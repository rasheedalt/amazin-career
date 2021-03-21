@extends('layouts.main-layout')

@section('main')
    <h3>Post Job</h3>
    <div class="post">
        <p>We are available to make your next hire fast and credible through posting job on our platforms. </p>

        <p>With the job seekers traffic on how websites and social media platforms; Instagram, Facebook, twitter, LinkedIn, WhatsApp, telegram, we offer Employers in Nigeria the opportunity to reach the right candidates by posting their job ads/vacancies. </p>

        <p> Get started with us by filling the below forms: </p>
        <div class="row">
            <div class="col-md-9">
                @include('components.post-job')
                <hr>
            </div>
        </div>

    </div>

@endsection
