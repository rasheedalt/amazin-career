@extends('layouts.main-layout')
<style>
        
        .maincontent {
            height: 500px;

        }
        .post {
            padding: 20px;
            font-size: 15px;
            font-family: tahoma;
            
        }
        .post img{
            width: 500px;
            height: 333px;
        }
         .post h4{
            margin-bottom: 20px;
            

         }
        .post p,  date {
            text-align: justify;
            display: block;
            line-height: 25px;
        }

        .share {
            padding: 20px;
            font-size: 15px;
            font-family: tahoma;
        }
        .share img {
            width: 24px;
            height: 24px;
        }

        .share p {
            text-align: justify;
            display: block;
            line-height: 25px;
        }

    </style>
@section('main')
    <h3>Blog</h3>
    <div class="post">
        <h4>{{ $post->title }}</h4>

        <img src="/images/Blog.jpg" alt="{{ $post->title }}">
    
        <date> Date: {{ $post->created_at }} </date><br>
        <p>{{ $post->body }}</p>
        
        <div class="share">
            <p>Share this on: </p>
            <a href="https://www.facebook.com"> <img src="images/facebook.png" alt=""></a>
            <a href="https://www.instagram.com"> <img src="images/instagram.png" alt=""></a>
            <a href="https://www.twitter.com"> <img src="images/twitter.png" alt=""></a>
            <a href="https://www.linkedin.com"> <img src="images/linkedin.png" alt=""></a>      
        </div>
        <hr>
    </div>


@endsection