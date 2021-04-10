@extends('layouts.main-layout')

@section('main')
    <h3>Scholarship Details</h3>
    <div class="post">
        <h4>{{ ucwords($scholarship->title) }}</h4>
        <date> Date posted: {{ $scholarship->created_at->format('d - M - Y') }} </date>
        <p> {{ $scholarship->description }}</p>

        <p><strong>Requirements</strong></p>

        <p>{{ $scholarship->requirements }}</p>

        <p><strong>Method of Application</strong></p>
        <p>{{ $scholarship->application_mode }}</p>

        <p><strong>Deadline</strong></p>
        <p>{{ $scholarship->deadline }} </p>

        @if($scholarship->link)
        <a href="{{ $scholarship->link }}" class="btn btn-success text-white" style="background-color:#072638; text-decoration:none">Apply</a>
        @endif
    </div>

@endsection
