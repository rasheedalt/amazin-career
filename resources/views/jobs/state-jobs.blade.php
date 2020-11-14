@extends('layouts.main-layout')
<style>
    ol li {
            /* padding-left: 15px; */
            /* text-align: center; */
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
</style>
<!-- <style>
        .OthJobs {
            color: #072638;
        }
        .home {
            color: #072638;
            height: 20px;
            Background-color: #F2EDED;
            border-radius: 5px;
            padding-top: 8px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 8px;
        }
        #maincontent{
            height: 200px;
            
        }

        .post1 {
            padding: 50px;
            float: left;
           
       }
       .post1 ol li {
            padding-left: 15px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
       .post1 ol li a {
            text-decoration: none;
            color: #02977D;
        }
        .post1 ol li a:hover {
            color:  #072638;
            border-bottom-style: solid;
            border-width: 1px;
            border-color: #072638;
        }
        .post2 {
            padding: 50px;
            float: left;
           
       }
       .post2 ol li {
            padding-left: 15px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
       .post2 ol li a {
            text-decoration: none;
            color: #02977D;
        }
        .post2 ol li a:hover {
            color:  #072638;
            border-bottom-style: solid;
            border-width: 1px;
            border-color: #072638;
        }
        .post3 {
            padding: 50px;
            float: left;
           
       }
       .post3 ol li {
            padding-left: 15px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
       .post3 ol li a {
            text-decoration: none;
            color: #02977D;
        }
        .post3 ol li a:hover {
            color:  #072638;
            border-bottom-style: solid;
            border-width: 1px;
            border-color: #072638;
        }
        .nextBTN {
            Clear: both;
        }
</style> -->

@section('main')
    @php
        $keyword = $keyword ?? NULL;
    @endphp
    @if($keyword)
        <h3>SEARCH RESULT FOR KEYWORDS  "{{ $keyword }}"</h3>
    @else
        <h3>JOB VACANCIES {{ strtoupper($state->name) }}</h3>
    @endif

    <div class="row">
        @if($jobs->count() > 0)
            <div class="post">
                @include('components.jobs-list', [
                'jobs' => $jobs
                ])
            </div>
        @else
            <div class="col-12 mx-auto text-center mt-4">No Job record found</div>
        @endif
    </div>

@endsection