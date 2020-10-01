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

        #maincontent {
            border-radius: 5px;
            background-color:#E3E3E3;
            width: 900px;
            height: 400px;
            padding: 20px;
        }
        #maincontent h3 {
            text-align: center;
            font-family: Tahoma;
            font-size: 17px;
            padding: 5px;
            padding-bottom: 20px;
        }
        .PostJ {
            float: left;
            padding: 15px;
            margin-left: 60px;
        }

        .PostJ input, textarea {
            padding: 8px;
            width: 700px;
            font-size: 14px;
            font-family: Tahoma;
            margin-bottom: 8px;
            border-style: solid;
            border-width: 1px;
        }
        .PostJ textarea {
            height: 250px;
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

        @media only screen and (max-width: 800px){
            #maincontent{
            display: inline;
            margin: 20px;
            border-radius: 2px;
            background-color:#E3E3E3;
            width: 400px;
            height: 400px;
            padding: 10px;
        }
        #maincontent h3 {
            text-align: center;
            font-family: Tahoma;
            font-size: 13px;
            padding: 2px;
            padding-bottom: 10px;
        }

        .PostJ {
            float: left;
            padding: 5px;
            margin-left: 10px;
            padding-top: 10px;
        }

        .PostJ input, textarea {
            padding: 5px;
            width: 350px;
            font-size: 12px;
            font-family: Tahoma;
            margin-bottom: 4px;
            border-style: solid;
            border-width: 1px;
        }
        .PostJ  textarea {
            height: 400px;
        }
        .PostJ button{
        width: 60px;
        padding: 5px;
        margin-bottom: 5px;
        border-style: none;
        background-color: #072638;
        color: white;
        border-radius: 1px;
        font-family: tahoma;
        font-size: 11px;
       }
       .PostJ button:hover {
        background-color: #F2EDED;
        color:  #072638;
        transition: 0.8s ease;
        }

        }

    </style>
@endsection

@section('content')
<div id="maincontent">
        <h3> CHANGE PASSWORD </h3>
        <hr>
    <div class="PostJ">
        @include('components.flash-message')
        <form method="post" action="{{ route('password.change') }}">
            @csrf
            <input name="current_password" placeholder="Current Password" type="password"/> <br/>
            <input name="new_password" placeholder="Type New Password" type="password"/> <br/>
            <input name="password_confirmation" placeholder="Retype Password" type="password"/> <br/>
            <button>Submit</button>
        </form>
    </div>
</div>
@endsection