@extends('layouts.main-layout')

@section('main')
    <h3>Job Vacancy Overview</h3>
    @if($jobs->count() == 1)
        @php $job = $jobs[0]; @endphp
        <div class="post">
            <h4>{{ ucwords($job->title) }}</h4>
            <date> Date posted: {{ $job->created_at->format('d - M - Y') }} </date>
            <p>{{ $job->company_name }}</p>

            <p><strong>Requirements</strong></p>

            <p><pre style="font-family: 'roboto','Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.9;">{{ $job->description }}</pre></p>

            <p><strong>Method of Application</strong></p>
            <p>{{ $job->application_mode }}</p>

            <p><strong>Deadline</strong></p>
            <p>{{ $job->deadline }}</p>

            <p><strong>Salary</strong></p>
            <p>{{ $job->salary }} </p>

            @if($job->link)
            <a href="{{ $job->link }}" class="btn btn-success text-white" style="background-color:#072638; text-decoration:none">Apply</a>
            @endif
        </div>
    @else
        @foreach ($jobs as $job)
            <div class="post">
                <h4 class="text-danger">{{ ucwords($job->title)." (Position".$loop->iteration.")" }}</h4>
                <date> Date posted: {{ $job->created_at->format('d - M - Y') }} </date>
                <p>{{ $job->company_name }}</p>

                <p><strong>Requirements</strong></p>

                <p><pre style="font-family: 'roboto','Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.9;">{{ $job->description }}</pre></p>

                <p><strong>Method of Application</strong></p>
                <p>{{ $job->application_mode }}</p>

                <p><strong>Deadline</strong></p>
                <p>{{ $job->deadline }}</p>

                <p><strong>Salary</strong></p>
                <p>{{ $job->salary }} </p>

                @if($job->link)
                <a href="{{ $job->link }}" class="btn btn-success text-white" style="background-color:#072638; text-decoration:none">Apply</a>
                <hr>
                @endif
            </div>
        @endforeach
    @endif

@endsection