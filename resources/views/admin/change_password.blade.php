@extends('layouts.admin-layout')
    <link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
@section('more-styles')

<style>
        .CP {
            padding: 12px;
            padding-left: 29px;
            background-color: #072638;
            color: white;
        }

        .PostJ {
            padding: 15px;
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
<div id="maincontent" class="my-2">
        <h3> CHANGE PASSWORD </h3>
        <hr>
    <div class="PostJ">
        @include('components.flash-message')
        <form method="post" action="{{ route('password.change') }}">
            @csrf
            <input class="form-control" name="current_password" placeholder="Current Password" type="password"/> <br/>
            <input class="form-control" name="new_password" placeholder="Type New Password" type="password"/> <br/>
            <input class="form-control" name="password_confirmation" placeholder="Retype Password" type="password"/> <br/>
            <button>Submit</button>
        </form>
    </div>
</div>
@endsection