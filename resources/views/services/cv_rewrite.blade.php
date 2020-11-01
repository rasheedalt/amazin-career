@extends('layouts.main-layout')
<style>
.post p {
    line-height: 30px !important;
    font-size: 17px !important;
}
</style>
@section('main')
    <h3>CV Review</h3>
    <div class="post">
  
    <p>
    Landing a new job is like a game and it’s being played all around you. 
    Our Expert CV Consultants have helped over 1000 professionals and jobseekers get new jobs by just working on their CV. 
    You don't know how many opportunities you miss out on because of your CV.
    </p>
    <p> Just fill out the form and we’ll be in touch </p>

    <div>
        <form method="POST" action="{{ route('job.post') }}">
        @csrf
        <div class="row">
            <div class="col-6">
            <input class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" type="text"> <br>
            <input class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" type="text"><br>
            <input class="form-control" name="email_address" placeholder="Email Address" value="{{ old('email_address') }}" type="text"><br>
            <input class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" type="text"><br>
            <p>Upload your CV below:</p>
            <input class="form-control" name="cv" type="file" accept=".pdf, .doc, .docx"><br>
            <p>For CV creating, You might not need to upload any CV</p>
            <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
            </div>
        </div>
        </form>
    </div>

    </div>

@endsection