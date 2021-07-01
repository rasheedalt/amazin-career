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
        /* background-color: red;
        color: white; */
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
            <h3>Manage Scholarship</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="PostJ">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Application mode</th>
                                <th>Deadline</th>
                                <th>Date Submitted</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($scholarships as $scholarship)
                            <tr>
                                <td>{{ $scholarship->title }}</td>
                                <td>{{ $scholarship->application_mode }}</td>
                                <td>{{ $scholarship->deadline }}</td>
                                <td>{{ $scholarship->created_at->format('d M Y')}}</td>
                                <td class="{{ $scholarship->is_active ? 'text-success' : 'text-danger' }}">{{ $scholarship->is_active ? 'Active' : 'Inactive' }}</td>
                                <td><a href="#" data-toggle="modal" data-target="#exampleModal" onclick="loadDetails({{$scholarship}})" >View details</a></td>
                                <td><form method="post" id="scholarshipForm{{$scholarship->id}}"> @csrf</form>
                                    <button class="btn {{ $scholarship->is_active ? 'btn-danger' : 'btn-success'}}" onClick="confirmDelete('scholarshipForm{{$scholarship->id}}', '{{ route('admin.scholarship_activate_toggle', $scholarship->id) }}', 'active')" class="btn btn-danger">{{ $scholarship->is_active ? 'Deactivate' : 'Activate'}}</button>
                                    @if(auth()->user()->isSuperAdmin())
                                    <button onClick="confirmDelete('scholarshipForm{{$scholarship->id}}', '{{ route('admin.delete_scholarship', $scholarship->id) }}', 'delete')" class="btn btn-danger mt-1">Delete</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            {{ $scholarships->links() }}
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
                <h5 class="modal-title" id="exampleModalLabel">Scholarship Details</h5>
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

@endsection

@section('more-scripts')
    <script>
        function loadDetails(scholarship){
            var content = `
            Title: ${scholarship.title} <br><br>
            Requirements: ${scholarship.requirements} <br><br>
            Description: ${scholarship.description} <br><br>
            Application Mode: ${scholarship.application_mode} <br><br>
            Link: ${scholarship.link} <br><br>
            Deadline: ${scholarship.deadline} <br><br>
            Date Submitted: ${scholarship.created_at} <br><br>
            `;
            $('#details').html(content)
            $('#exampleModal').show()
        }

        function confirmDelete(formId, url, type){
            let form =  $(`#${formId}`)

            if(type == 'delete'){
                swal({
                    title: "Are you sure you want to delete this scholarship?",
                    text: "Once deleted, you will not be able to recover this scholarship details",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        form.attr('action', url);
                        form.submit()
                    } else {
                        swal("Job not deleted");
                    }
                });
            }else{
                form.attr('action', url);
                form.submit()
            }
        }
    </script>
@endsection