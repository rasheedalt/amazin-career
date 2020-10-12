@extends('layouts.admin-layout')

@section('more-styles')
<link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

<style>
        .PV {
            padding: 12px;
            padding-left: 29px;
            background-color: #072638;
            color: white;
        }
        #maincontent {
            border-radius: 5px;
            background-color:#E3E3E3;
            width: 900px;
            height: 800px;
            padding: 20px;
        }
        #maincontent h3 {
            text-align: center;
            font-family: Tahoma;
            font-size: 17px;
            padding: 5px;
            padding-bottom: 20px;
        }
        #sidebar {
        height: 1100px;
        }
        
        .State {
            padding: 15px;
            margin-left: 10px;
            float: left;
        }

        .PostJ {
            float: left;
            padding: 15px;
            margin-left: 40px;
        }

        .PostJ input, textarea {
            padding: 8px;
            width: 600px;
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

        @media only screen and (max-width: 800px){
            #maincontent{
            display: inline;
            margin: 20px;
            border-radius: 2px;
            background-color:#E3E3E3;
            width: 400px;
            height: 800px;
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

        .PostJ input, textarea {
            padding: 5px;
            width: 230px;
            font-size: 12px;
            font-family: Tahoma;
            margin-bottom: 4px;
            border-style: solid;
            border-width: 1px;
        }
        .PostJ  textarea {
            height: 220px;

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
             <h3>POST VANCANCIES</h3>
             <hr>
            <div class= "State">
                <form action="">
                    @foreach($states as $state)
                        <input type="checkbox" value="{{ $state->name }}"> {{ $state->name }}<br/>
                    @endforeach
            </div>

            <div class="PostJ">
                <form>
                    <input placeholder="Company" type="text"/> <br/>
                    <input placeholder="Adress/Location" type="text"/><br/>
                    <input placeholder="Job Positions" type="text"/><br/>
                    <input placeholder="Salary Range" type="text"/><br/>
                    <textarea name="Requirement" placeholder="Requirements" id="" cols="30" rows="10"></textarea><br/>
                    <textarea name="Requirement" placeholder="Metod of Application" id="" cols="30" rows="10"></textarea><br/>
                    <input placeholder="Deadlines" type="text"/><br/>
                    <input placeholder="Application Link" type="text"/><br/>
                    <button>Post</button>
                </form>
            </div>
           
        </div>
@endsection