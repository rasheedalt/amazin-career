@extends('layouts.main-layout')
<style>
.post p {
    line-height: 30px !important;
    font-size: 17px !important;
}
</style>
@section('main')
    <h3>Cover Letter</h3>
    <div class="post">
  
    <p>
    At Amazin career we have believe and experienced that Cover letters can be daunting, 
    but they become simple when you break them down into three parts. 
    Make an appointment with us to improve your cover letter though our professionalism 
    in crafting a better cover letter for your dream job position in any career area in the industry.
    </p>
    <p> Just fill out the form and we’ll be in touch </p>
    
    <div>
        <form method="POST" action="{{ route('service.cover_letter') }}" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-6">
            <input class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" type="text"> <br>
            <input class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" type="text"><br>
            <input class="form-control" name="email_address" placeholder="Email Address" value="{{ old('email_address') }}" type="text"><br>
            <input class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" type="text"><br>
            <p>Upload your CV below:</p>
            <input class="form-control" name="cv" type="file" accept=".pdf, .doc, .docx"><br>
            <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
            </div>
        </div>
        </form>
    </div>

    </div>

@endsection