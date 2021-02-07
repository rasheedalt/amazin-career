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
             <h3> BLOG POSTS </h3>
             <hr>
            <div class="PostJ">
                @include('components.flash-message')
                <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                    <input placeholder="Blog title" class="form-control" value="{{ old('title') }}" name="title" type="text"/> <br/>
                    <textarea name="body" class="form-control" placeholder="Blof Write Up" id="" cols="250" rows="10">{{ old('body') }}</textarea><br/>
                    <p>Upload your images below: </p>
                    <input type="file" name="post_image" placeholder="Image"/> <br/>
                    <button>Post</button>
                </form>
            </div>
        </div>
@endsection