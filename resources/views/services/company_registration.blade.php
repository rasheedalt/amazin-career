@extends('layouts.main-layout')
<style>
.post p {
    line-height: 30px !important;
    font-size: 17px !important;
}
</style>
@section('main')
    <h3>Company Registration</h3>
    <div class="post">
  
    <p>
    A business plan is a written description of your business's future, a document that tells what you plan to do and how you plan to do it. If you jot down a paragraph on the back of an envelope describing your business strategy, you've written a plan, or at least the germ of one. 
    Amazin Careers got you covered for a well detailed business plan.
    </p>
    <p> Just fill out the form and we’ll be in touch </p>

    <div>
        <form method="POST" action="{{ route('service.company_reg') }}">
        @csrf
        <div class="row">
            <div class="col-6">
            <input class="form-control" name="first_proposed_business_name" placeholder="First Proposed Business Name" value="{{ old('first_proposed_business_name') }}" type="text"><br>
            <input class="form-control" name="second_proposed_business_name" placeholder="Second Proposed Business Name" value="{{ old('second_proposed_business_name') }}" type="text"><br>
            <input class="form-control" name="name_of_business_owner" placeholder="Name of Business Owner" value="{{ old('name_of_business_owner') }}" type="text"><br>
            <input class="form-control" name="email_address" placeholder="Email Address" value="{{ old('email_address') }}" type="email"><br>
            <textarea class="form-control" name="business_address" placeholder="Business Address" type="text">{{ old('business_address') }}</textarea><br>
            <input class="form-control" name="nature_of_bussiness" placeholder="Nature of Business" value="{{ old('first_name') }}" type="text"><br>
            <input class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" type="text"><br>
            <p>Start Date:</p>
            <input class="form-control" name="start_date" placeholder="Start Date" value="{{ old('start_date') }}" type="date"><br>
            <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
            </div>
        </div>
        </form>
    </div>

    </div>

@endsection