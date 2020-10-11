@extends('layouts.admin-layout')

@section('more-styles')
<link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

    <style>
        .GL {
            padding: 12px;
            padding-left: 29px;
            background-color: #072638;
            color: white;
        }
        .NL {
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
            padding-top: 20px;
            margin-left: 40px;
        }

        .PostJ input {
            padding: 8px;
            width: 500px;
            font-size: 14px;
            font-family: Tahoma;
            margin-bottom: 5px;
            margin-top: 5px;
            border-bottom-style: solid;
            border-width: 0px;
            background-color: #E3E3E3;
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
            width: 200px;
            background-color:#E3E3E3;
            float: left;
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

        .State {
            padding: 5px;
            margin-left: 5px;
            float: left;
            padding-top: 10px;
        }

        .PostJ {
            float: left;
            padding: 5px;
            margin-left: 10px;
            padding-top: 10px;
        }

        .PostJ input {
            padding: 5px;
            width: 180px;
            font-size: 12px;
            font-family: Tahoma;
            margin-bottom: 4px;
            margin-top: 4px;
            border-style: solid;
            border-width: 0px;
        }
        .PostJ  textarea {
            height: 220px;

        }
        .PostJ button{
        width: 60px;
        padding: 6px;
        margin-bottom: 5px;
        border-style: none;
        background-color: red;
        color: white;
        border-radius: 1px;
        font-family: tahoma;
        font-size: 11px;
       }
       .PostJ button:hover {
        color: #F2EDED;
        background-color:  #072638;
        transition: 0.8s ease;
        }

        .DL {
            padding: 8px;
            padding-left: 10px;
            background-color: #072638;
            color: white;
            font-size: 12px;
            margin-bottom: 3px;
        }
        .sideG {
            padding-top: 10px;
            width: 120px;
            background-color #072638;
        }
        .sideG ol a {
            text-decoration: none;
            list-style: none;
            color:  #072638;
            font-family: tahoma;
            font-size: 12px;
            display: inline;
            
        }
        .sideG ol a li {
            padding: 8px;
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

@section('content')
    <div id="maincontent">
            <h3>GENERATE LOGIN</h3>
            <hr>
        <div class= "sideG">
            <ol>
                <li Class = "NL" href="{{ route('login.generate') }}"> New Login</li>
                <a href="{{ route('login.deactivate_page') }}"><li>Deactivite Login</li></a>
            </ol>
        </div>

        <div class="PostJ">
            <form method="post" action="{{ route('login.generate') }}">
                @csrf
                <input name="firstname" placeholder="Firstname" type="text"/> <br/>
                <input name="lastname" placeholder="Lastname" type="text"/> <br/>
                <input name="email" placeholder="Email Address" type="email"/> <br/>
                <input name="password" placeholder="Password" type="text"/><br/>
                <button>Generate</button>
            </form>
        </div>
    </div>
@endsection