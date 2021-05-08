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
            font-family: Roboto;
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
        background-color: red;
        color: white;
        border-radius: 3px;
        font-family: Roboto;
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
            font-family: Roboto;
            font-size: 15px;
            
        }
        .sideG ul a li {
            padding: 12px;
            padding-left: 29px;
            border-bottom-style: solid;
            border-color: white;
            border-width: 5px;
        }
        .sideG ul li:hover {
            background-color: #072638;
            color: white;
            transition: 1s ease;
        }




    </style>
@endsection
<?php $user = auth()->user(); ?>

@section('content')
    <div id="maincontent" class="my-2">
            <h3>Job Posting Requests</h3>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    @include('components.services-list')
                </div>
                <div class="col-md-9">
                    <div class="PostJ">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Company Name</th>
                                <!-- <th>Date</th> -->
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requests as $request)
                            <tr>
                                <td>{{ $request->title}}</td>
                                <td>{{ $request->company_name}}</td>
                                <!-- <td>{{ $request->created_at->format('d M Y')}}</td> -->
                                <td><a href="#" data-toggle="modal" data-target="#exampleModal" onclick="loadDetails({{$request}})" >View details</a></td>
                                <td><form method="post" action="{{ route('admin.approve_job', $request->id) }}">
                                    @csrf
                                    <button class="btn btn-success">Approve</button>
                                 </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            {{ $requests->links() }}
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