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
        background-color: red;
        color: white;
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
            <h3>Cover Letter Requests</h3>
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
                                <th>Applicant Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>CV</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($requests->count() > 0)

                                @foreach($requests as $request)
                                <tr>
                                    <td>{{ $request->first_name.' '.$request->last_name }}</td>
                                    <td>{{ $request->email_address }}</td>
                                    <td>{{ $request->created_at->format('d M Y') }}</td>
                                    <td><a href="{{ $request->cv }}" target="blank" >View</td>
                                    <td><a href="#" data-toggle="modal" data-target="#exampleModal" onclick="loadDetails({{$request}})" >View details</a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr><td colspan="5" class="text-center">No request available</td></tr>
                            @endif
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
                <h5 class="modal-title" id="exampleModalLabel">Cover Letter Request Details</h5>
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
        function loadDetails(request){
            var content = `
            First Name: ${request.first_name} <br><br>
            Last Name: ${request.last_name} <br><br>
            email: ${request.email_address} <br><br>
            Phone: ${request.phone_number} <br><br>
            Date Submitted: ${request.created_at} <br><br>
            `;
            $('#details').html(content)
            $('#exampleModal').show()
        }
    </script>
@endsection