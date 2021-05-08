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
          <div class="col-md-12">
            <div class="card mb-3" style="">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="{{ $post->post_image ?? '/images/Blog.jpg' }}" style="" class="card-img" alt="Aamazin Careers {{ $post->title }}">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <!-- <date> Date; {{ $post->created_at }} </date><br> -->

                    <p class="card-text">
                      @if(strlen($post->body) > 210 )
                      {{  substr($post->body, 0, 200)."... "}}
                      @else
                      {{ $post->body }}
                      @endif
                    </p>
                    <a href="{{route('post', $post->id )}}">read more</a> </p>

                    <p class="card-text"><small class="text-muted">Date posted: {{ $post->created_at }}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- <hr> -->
        @endforeach
      @else
        <p class="text-center mt-4">No blog post available.</p>
      @endif
    </div>
        <div class="nextBTN">

            {{ $posts->links() }}

        </div>

@endsection
