@extends('layouts.main-layout')
<style>
.post p {
    line-height: 30px !important;
    font-size: 17px !important;
}
</style>
@section('main')
    <h3>Business Plan</h3>
    <div class="post">
  
    <p>
    A business plan is a written description of your business's future, a document that tells what you plan to do and how you plan to do it. If you jot down a paragraph on the back of an envelope describing your business strategy, you've written a plan, or at least the germ of one. 
    Amazin Careers got you covered for a well detailed business plan.
    </p>
    <p> Just fill out the form and we’ll be in touch </p>
    <div>
        <form method="POST" action="{{ route('service.business_plan') }}">
        @csrf
        <div class="row">
            <div class="col-6">
            <input class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" type="text"> <br>
            <input class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" type="text"><br>
            <input class="form-control" name="email_address" placeholder="Email Address" value="{{ old('email_address') }}" type="text"><br>
            <input class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" type="text"><br>
            <input class="form-control" name="type_of_business" placeholder="Type of Business" value="{{ old('type_of_business') }}" type="text"><br>
            <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
            </div>
        </div>
        </form>
    </div>

    </div>

@endsection