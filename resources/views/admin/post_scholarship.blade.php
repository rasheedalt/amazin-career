@extends('layouts.admin-layout')

@section('more-styles')
<link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

<style>
        .SP {
            padding: 12px;
            padding-left: 29px;
            background-color: #072638;
            color: white;
        }

        #maincontent {
            border-radius: 5px;
            background-color:#E3E3E3;
            width: 900px;
            height: 900px;
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
            height: 900px;
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
            <input type="checkbox" value="Lagos"> Lagos<br/>
            <input type="checkbox" value="Abuja"> Abuja<br/>
            <input type="checkbox" value="Kano"> Kano<br/>
            <input type="checkbox" value="Portharcourt"> Portharcourt<br/>
            <input type="checkbox" value="Abia"> Abia<br/>
            <input type="checkbox" value="Adamawa"> Adamawa<br/>
            <input type="checkbox" value="Akwa Ibom"> Akwa Ibom<br/>
            <input type="checkbox" value="Anambra"> Anambra<br/>
            <input type="checkbox" value="Bauchi"> Bauchi<br/>
            <input type="checkbox" value="Bayelsa"> Bayelsa<br/>
            <input type="checkbox" value="Benue"> Benue<br/>
            <input type="checkbox" value="Borno"> Borno<br/>
            <input type="checkbox" value="Cross River"> Cross River<br/>
            <input type="checkbox" value="Edo"> Edo<br/>
            <input type="checkbox" value="Ekiti"> Ekiti<br/>
            <input type="checkbox" value="Gombe"> Gombe<br/>
            <input type="checkbox" value="Jigawa"> Jigawa<br/>
            <input type="checkbox" value="Kaduna"> Kaduna<br/>
            <input type="checkbox" value="Katsina"> Katsina<br/>
            <input type="checkbox" value="Kebbi"> Kebbi<br/>
            <input type="checkbox" value="Kogi"> Kogi<br/>
            <input type="checkbox" value="Kwara"> Kwara<br/>
            <input type="checkbox" value="Nassarawa"> Nassarawa<br/>
            <input type="checkbox" value="Niger"> Niger<br/>
            <input type="checkbox" value="Ogun"> Ogun<br/>
            <input type="checkbox" value="Ondo"> Ondo<br/>
            <input type="checkbox" value="Osun"> Osun<br/>
            <input type="checkbox" value="Oyo"> Oyo<br/>
            <input type="checkbox" value="Plateau"> Plateau<br/>
            <input type="checkbox" value="Sokoto"> Sokoto<br/>
            <input type="checkbox" value="Taraba"> Taraba<br/>
            <input type="checkbox" value="Yobe"> Yobe<br/>
            <input type="checkbox" value="Zamfara"> Zamfara<br/>
    </div>

    <div class="PostJ">
    @include('components.flash-message')
        <form method="post" action="{{ route('password.change') }}">
        @csrf            
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