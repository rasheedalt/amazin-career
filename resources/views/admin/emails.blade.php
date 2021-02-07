@extends('layouts.admin-layout')

@section('more-styles')
<link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

<style>
        .BP {
            padding: 12px;
            padding-left: 29px;
            background-color: #072638;
            color: white;
        }

        .PostJ {
            /* float: left;
            padding: 15px;
            margin-left: 60px; */
        }

        .PostJ input, textarea {
            padding: 8px;
            /* width: 700px; */
            font-size: 14px;
            font-family: Tahoma;
            margin-bottom: 8px;
            border-style: solid;
            border-width: 1px;
        }

        .PostJ p {
            font-size: 14px;
            font-family: Tahoma;
            padding-bottom: 5px;
        }
      
        .PostJ button{
        width: 100px;
        padding: 10px;
        margin-bottom: 20px;
        border-style: none;
        background-color: #072638;
        color: white;
        border-radius: 3px;
        font-family: tahoma;
        font-size: 14px;
       }
       .PostJ button:hover {
        background-color: #F2EDED;
        color:  #072638;
        transition: 0.8s ease;
        }

    </style>
@endsection

@section('content')
<div id="maincontent" class="mt-2 mr-2">
             <h3> Subscribed Emails </h3>
             <hr>
            <div class="PostJ">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($emails->count() > 0)
                                @foreach($emails as $email)
                                <tr>
                                    <td>{{ $email->id }}</td>
                                    <td>{{ $email->email }}</td>
                                    <td>{{ $email->created_at->format('d M Y') }}</td>
                                </tr>
                                @endforeach
                            @else
                                <tr><td colspan="3" class="text-center">No request available</td></tr>
                            @endif
                        </tbody>
                        <tfoot>
                            {{ $emails->links() }}
                        </tfoot>
                    </table>
            </div>
        </div>
@endsection