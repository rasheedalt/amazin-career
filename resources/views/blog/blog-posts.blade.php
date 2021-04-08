@extends('layouts.main-layout')
<style>

        /* .post img{
            width: 333px;
            height: 222px;
           float: left;
            padding: 10px;
        } */

        .post p, h4, date {
            text-align: justify;

        }
        .nextBTN {
            margin-left: 280px;

        }
    </style>

@section('main')
    <h3>Blog</h3>
    <div class="post">
      @if($posts->count() > 0)
        @foreach($posts as $post)
        <div class="row">
            <div class="col-6">
                <img src="images/Blog.jpg" width="100%" class="max-width: 90vw;" alt="">
            </div>
            <div class="col-6">
                <h4>{{ $post->title }}</h4>
                <date> Date; {{ $post->created_at }} </date><br>
                @if(strlen($post->body) > 210 )
                    {{  substr($post->body, 0, 200)."... "}}
                @else
                    {{ $post->body }}
                @endif
                <a href="{{route('post', $post->id )}}">read more</a> </p>
            </div>
        </div>
        <hr>
        @endforeach
      @else
        <p class="text-center mt-4">No blog post available.</p>
      @endif
    </div>
        <div class="nextBTN">

            {{ $posts->links() }}

        </div>

@endsection
