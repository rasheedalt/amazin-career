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
        /* width: 100px; */
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
    <h3> SCHOLARSHIPS </h3>
    <hr>
    <div class="PostJ mx-md-3">
    @include('components.flash-message')
        <form method="post" action="{{ route('scholarship.post') }}">
            @csrf
            <input name="title" class="form-control" placeholder="Scholarships title" value="{{ old('title') }}" type="text"/> <br/>
            <textarea name="description" class="form-control" placeholder="About Scholarship" id="" cols="30" rows="3">{{ old('description') }}</textarea><br/>
            <textarea name="requirements" class="form-control" placeholder="Requirement/Qualifications" id="" cols="30" rows="5">{{ old('requirements') }}</textarea><br/>
            <textarea name="application_mode" class="form-control" placeholder="Method of Application" id="" cols="30" rows="5">{{ old('application_mode') }}</textarea><br/>
            <input class="form-control" name="deadline" placeholder="Deadlines" value="{{ old('deadline') }}" type="text"/><br/>
            <input class="form-control" name="link" placeholder="Application Link" value="{{ old('link') }}" type="text"/><br/>
            <button>Post</button>
        </form>
    </div>
</div>
@endsection