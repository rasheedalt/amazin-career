@extends('layouts.main-layout')
<style>
.post p {
    line-height: 30px !important;
    font-size: 17px !important;
}
</style>
@section('main')
    <h3>LinkedIn Optimization</h3>
    <div class="post">
  
    <p>
    LinkedIn now has over 500 million members worldwide; it is the pond that recruiter’s fish for talent and is an essential networking/job hunting tool. 
    It also presents your personal brand and professional footprint to the outside world and 
    poses an opportunity and risk in equal measures.
    </p>
    <p> Just fill out the form and we’ll be in touch </p>

    <div>
        <form method="POST" action="{{ route('service.linkin_opt') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
            <input class="form-control" name="linkedin_username" placeholder="LinkedIn Username" value="{{ old('linkedin_username') }}" type="text"> <br>
            <input class="form-control" name="linkedin_password" placeholder="LinkedIn Password" value="{{ old('linkedin_password') }}" type="text"><br>
            <input class="form-control" name="email_address" placeholder="Email Address" value="{{ old('email_address') }}" type="text"><br>
            <input class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" type="text"><br>
            <p>Upload your CV below:</p>
            <input class="form-control" name="cv" type="file" accept=".pdf, .doc, .docx"><br>
            <p>Upload your professional picture below:</p>
            <input class="form-control" name="picture" type="file" accept=".png, .jpg, .jpeg"><br>
            <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
            </div>
        </div>
        </form>
    </div>

    </div>

@endsection