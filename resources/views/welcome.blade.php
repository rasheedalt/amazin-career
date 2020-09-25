@extends('layouts.main-layout')

@section('main')
    <h3>JOB VACANCIES</h3>
    <div class="post">
        @foreach($jobs as $job)
            <h4>{{ ucwords($job->title) }}</h4>
            <date> Date: {{$job->created_at}} </date>
            <p>
            @if(strlen($job->description) > 210 )
                {{  substr($job->description, 0, 200)."... "}}
            @else
                {{ $job->description }}
            @endif
            <a href="{{route('job.view', $job->id )}}">read more</a> </p>
            <hr>
        @endforeach

    </div>

    <div class="nextBTN">

        {{ $jobs->links() }}

    </div>
@endsection