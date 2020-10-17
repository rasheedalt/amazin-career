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
            <form action="{{ route('admin.job_post') }}" method="POST">
                <div class= "State">
                            <label><input type="checkbox" value="" id="ckbCheckAll"> select all</label><br/>
                        @foreach($states as $state)
                            <label><input class="checkBoxClass" type="checkbox"name="state[]" value="{{ $state->id }}" id="{{ $state->name }}"> {{ $state->name }}</label><br/>
                        @endforeach
                </div>

                <div class="PostJ">
                @include('components.flash-message')

                        @csrf
                        <input name="company_name" value="{{ old('company_name') }}" placeholder="Company" type="text"/> <br/>
                        <input name="address" value="{{ old('address') }}" placeholder="Adress/Location" type="text"/><br/>
                        <input name="title" value="{{ old('title') }}" placeholder="Job Positions" type="text"/><br/>
                        <input name="salary" value="{{ old('salary') }}" placeholder="Salary Range" type="text"/><br/>
                        <textarea name="description" placeholder="Requirements" id="" cols="30" rows="10">{{ old('description') }}</textarea><br/>
                        <textarea name="application_mode" placeholder="Method of Application" id="" cols="30" rows="10">{{ old('application_mode') }}</textarea><br/>
                        <input name="deadline" value="{{ old('deadline') }}" placeholder="Deadlines" type="text"/><br/>
                        <!-- <input name="deadline" placeholder="Deadlines" type="text" onfocus="(this.type='date')" /><br/> -->
                        <input name="link" value="{{ old('link') }}" placeholder="Application Link" type="text"/><br/>
                        <button>Post</button>
                </div>
            </form>
           
        </div>
<script>
    $(document).ready(function () {
    $("#ckbCheckAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
    
    $(".checkBoxClass").change(function(){
        if (!$(this).prop("checked")){
            $("#ckbCheckAll").prop("checked",false);
        }
    });
});
</script>
@endsection