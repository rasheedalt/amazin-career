@extends('layouts.admin-layout')

@section('more-styles')
<link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

    <style>
        .GL {
            padding: 12px;
            background-color: #072638;
            color: white;
        }
        .NL {
            padding: 12px;
            padding-left: 29px;
            background-color: #072638;
            color: white;
        }

        ul{
            list-style-type:none;
        }

        .PostJ input {
            /* padding: 8px; */
            font-size: 14px;
            font-family: Tahoma;
            /* margin-bottom: 5px;
            margin-top: 5px; */
            border-bottom-style: solid;
            /* border-width: 0px; */
            /* background-color: #E3E3E3; */
        }

        .PostJ button{
        width: 100px;
        padding: 10px;
        border-style: none;
        /* background-color: red;
        color: white; */
        border-radius: 3px;
        font-family: tahoma;
        font-size: 14px;
       }
       .PostJ button:hover {
        background-color: #072638;
        color: white;
        transition: 0.8s ease;
        }

        .sideG {
            padding-top: 20px;
            background-color:#E3E3E3;
        }
        .sideG ol a {
            text-decoration: none;
            list-style: none;
            color:  #072638;
            font-family: tahoma;
            font-size: 15px;
            
        }
        .sideG ol a li {
            padding: 12px;
            padding-left: 29px;
            border-bottom-style: solid;
            border-color: white;
            border-width: 1px;
        }
        .sideG ol li:hover {
            background-color: #072638;
            color: white;
            transition: 1s ease;
        }




    </style>
@endsection
<?php $user = auth()->user(); ?>

@section('content')
    <div id="maincontent" class="my-2">
            <h3>Manage Jobs</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="PostJ">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Company Name</th>
                                <th>Date Submitted</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <td>{{ $job->title}}</td>
                                <td>{{ $job->company_name}}</td>
                                <td>{{ $job->created_at->format('d M Y')}}</td>
                                <td class="{{ $job->is_active ? 'text-success' : 'text-danger' }}">{{ $job->is_active ? 'Active' : 'Inactive'}}</td>
                                <td><a href="#" data-toggle="modal" data-target="#exampleModal" onclick="loadDetails({{$job}})" >View details</a></td>
                                <td><form method="post" action="{{ route('admin.activate_toggle', $job->id) }}">
                                    @csrf
                                    <button class="btn {{ $job->is_active ? 'btn-danger' : 'btn-success'}}">{{ $job->is_active ? 'Deactivate' : 'Activate'}}</button>
                                 </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            {{ $jobs->links() }}
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Job Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="details"></div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>

    <script>
        function loadDetails(job){
            var content = `
            Title: ${job.title} <br><br>
            Company Name: ${job.company_name} <br><br>
            Company Registration No: ${job.company_registration_no} <br><br>
            Description: ${job.description} <br><br>
            Salary: ${job.salary} <br><br>
            Application Mode: ${job.application_mode} <br><br>
            Link: ${job.link} <br><br>
            Deadline: ${job.deadline} <br><br>
            Date Submitted: ${job.created_at} <br><br>
            `;
            $('#details').html(content)
            $('#exampleModal').show()
        }
    </script>
@endsection