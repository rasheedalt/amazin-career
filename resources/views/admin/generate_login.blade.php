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
            <h3>CREATE NEW USER ACCOUNT</h3>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class= "sideG">
                        <ul>
                            <li class="NL" href="{{ route('login.generate') }}"> New Login</li>
                            @if($user->isSuperAdmin())<a href="{{ route('login.deactivate_page') }}"><li class="NL mt-1">Deactivite Login</li></a>@endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="PostJ">
                        <form method="post" action="{{ route('login.generate') }}">
                            @csrf
                            <input class="form-control" name="firstname" placeholder="Firstname" type="text"/> <br/>
                            <input class="form-control" name="lastname" placeholder="Lastname" type="text"/> <br/>
                            <input class="form-control" name="email" placeholder="Email Address" type="email"/> <br/>
                            <input class="form-control" name="password" placeholder="Password" type="text"/><br/>
                            <button>Generate</button>
                        </form>
                    </div>
                </div>
            </div>

    </div>
@endsection