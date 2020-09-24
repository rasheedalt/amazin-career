@extends('layouts.main-layout')

@section('main')
    <h3>Contact Us</h3>
    <div class="post">
        <p>The thing we love must in the world is the feedback from our clients using our platforam and subscribing to our services, or just a note about literally anything on your mind. We want to hear it. We promise to respond too, because there is nothing worse than sending a note like this to a company and not hearing back. </p>

        <p> Just fill out the form and we’ll be in touch </p>

        <form>
            <div class="form-group container">
                <input  class="form-control" placeholder="Full Name" type="text"> <br>
                <input class="form-control"  placeholder="Email Adress" type="text"><br>
                <select  class="form-control" name="info" id="info">
                    <option value="Complaints"> Choose information Categories</option>
                    <option value="Enquiries"> Enquiries</option>
                    <option value="Adverts"> Adverts</option>
                    <option value="Services"> Services</option>
                    <option value="Others">Others</option>
                </select>  <br>
                <textarea class="form-control" name="Requirement" placeholder="Type your message here" id="" cols="30" rows="10"></textarea><br>
                <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
            </div>
        </form>
    </div>
@endsection