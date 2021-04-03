@extends('layouts.main-layout')

@section('main')
    <h3>Job Vacancy Overview</h3>
    @if($jobs->count() == 1)
        @php $job = $jobs[0]; @endphp
        <div class="post">
            <h4>{{ ucwords($job->title)." at ".ucwords($job->company_name) }}</h4>
            <date> Date posted: {{ $job->created_at->format('d - M - Y') }} </date>
            <p>Location: {{ ucwords($job->address) }}</p>
            <div class="card">
                <div class="card-body">
                    <p><strong>Job Title</strong></p>
                    <p>{{ ucwords($job->title) }}</p>

                    <p><strong>Requirements</strong></p>

                    <pre style="font-family: 'roboto','Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.9;">{{ $job->description }}</pre>

                    <p><strong>Method of Application</strong></p>
                    <p>{{ $job->application_mode }}</p>

                    <p><strong>Deadline</strong></p>
                    <p>{{ $job->deadline }}</p>

                    <p><strong>Salary</strong></p>
                    <p>{{ $job->salary ?? 'Not Available' }} </p>

                    @if($job->link)
                    <a href="{{ $job->link }}" class="btn btn-success text-white" style="background-color:#072638; text-decoration:none">Apply</a>
                    @endif
                </div>
            </div>
        </div>
    @else
            <div class="post">
                <h4>{{ count($jobs)." Positions at ".$jobs[0]->company_name }}</h4>
                <date> Date posted: {{ $jobs[0]->created_at->format('d - M - Y') }} </date>

                <div class="row">
                    @foreach ($jobs as $job)
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>Job Title</strong></p>
                                    <h6 class="text-danger">{{ ucwords($job->title)." (Position".$loop->iteration.")" }}</h6>

                                    <p><strong>Requirements</strong></p>

                                    <p><pre style="font-family: 'roboto','Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.9;">{{ $job->description }}</pre></p>

                                    <p><strong>Method of Application</strong></p>
                                    <p>{{ $job->application_mode }}</p>

                                    <p><strong>Deadline</strong></p>
                                    <p>{{ $job->deadline }}</p>

                                    <p><strong>Salary</strong></p>
                                    <p>{{ $job->salary ?? 'Not Available' }} </p>

                                    @if($job->link)
                                    <a href="{{ $job->link }}" class="btn btn-success text-white" style="background-color:#072638; text-decoration:none">Apply</a>
                                    <hr>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    @endif

@endsection