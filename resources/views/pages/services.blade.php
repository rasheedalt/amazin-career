@extends('layouts.main-layout')

@section('main')
    <h3>Our Services</h3>
    <div class="post">
        <p>Over 100,000 youths in Nigeria each year’s trust Amazin Careers to help them find and win at work, from professional advancement and skills-building to finding a job. Our platforms use to help our clients in providing outstanding service to follow up the process of finding jobs in the Nigerian current situations.</p>

        <p> The below are our service you might be interested in:. </p>

        <p> 
        @foreach($services as $service)
        {{ $service->display_name }} <br><br>
        @endforeach
        </p>
                    
    </div>

@endsection