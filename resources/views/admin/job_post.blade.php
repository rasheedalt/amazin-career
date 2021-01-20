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

        .State {
            padding: 15px;
            margin-left: 10px;
            /* float: left; */
        }

        .PostJ {
            /* float: left; */
            padding: 15px;
            margin-left: 40px;
        }

        .PostJ input, textarea {
            padding: 8px;
            /* width: 600px; */
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
<div id="maincontent" class="mt-2 mr-2 mb-3">
             <h3>POST JOB</h3>
             <hr>
            <form action="{{ route('admin.job_post') }}" method="POST">
                <div class="row">
                    <div class="col-3">
                        <div class= "State">
                                    <label><input type="checkbox" value="" id="ckbCheckAll"> select all</label><br/>
                                <div class="row">
                                @foreach($states as $state)
                                    <div class="col-6">
                                        <label><input class="checkBoxClass" type="checkbox"name="state[]" value="{{ $state->id }}" id="{{ $state->name }}"> {{ $state->name }}</label><br/>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                    <div class="col-8">

                        <div class="PostJ">
                        @include('components.flash-message')
        
                                @csrf
                                <input class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="Company" type="text"/> <br/>
                                <input class="form-control" name="address" value="{{ old('address') }}" placeholder="Adress/Location" type="text"/><br/>
                                <input class="form-control" name="title" value="{{ old('title') }}" placeholder="Job Positions" type="text"/><br/>
                                <input class="form-control" name="salary" value="{{ old('salary') }}" placeholder="Salary Range" type="text"/><br/>
                                <textarea class="form-control" name="description" placeholder="Requirements" id="" cols="30" rows="5">{{ old('description') }}</textarea><br/>
                                <textarea class="form-control" name="application_mode" placeholder="Method of Application" id="" cols="30" rows="5">{{ old('application_mode') }}</textarea><br/>
                                <input class="form-control" name="deadline" value="{{ old('deadline') }}" placeholder="Deadlines" type="text"/><br/>
                                <input class="form-control" name="link" value="{{ old('link') }}" placeholder="Application Link" type="text"/><br/>
                                <button>Post</button>
                        </div>
                    </div>
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