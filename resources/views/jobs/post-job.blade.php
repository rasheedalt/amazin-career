@extends('layouts.main-layout')

@section('main')
    <h3>Post Job</h3>
    <div class="post">
        <p>We are available to make your next hire fast and credible through posting job on our platforms. </p>

        <p>With the job seekers traffic on how websites and social media platforms; Instagram, Facebook, twitter, LinkedIn, WhatsApp, telegram, we offer Employers in Nigeria the opportunity to reach the right candidates by posting their job ads/vacancies. </p>

        <p> Get started with us by filling the below forms: </p>
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="POST" action="{{ route('job.post') }}">
                @csrf
                    <div class="">
                        <input class="form-control" placeholder="Company" type="text"> <br>
                        <input class="form-control" placeholder="Adress/Location" type="text"><br>
                        <input class="form-control" placeholder="Job Positions" type="text"><br>
                        <input class="form-control" placeholder="Salary Range" type="text"><br>
                        <textarea class="form-control" name="Requirement" placeholder="Requirements" id="" cols="30" rows="10"></textarea><br>
                        <input class="form-control" placeholder="Method of Application" type="text"><br>
                        <input class="form-control" placeholder="Deadlines" type="text"><br>
                        <input class="form-control" placeholder="Application Link" type="text"><br>
                        <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
                    </div>
                </form>
                <hr>
            </div>
        </div>

    </div>

@endsection
