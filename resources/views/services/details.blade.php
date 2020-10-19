@extends('layouts.main-layout')
<style>
.post p {
    line-height: 30px !important;
    font-size: 17px !important;
}
</style>
@section('main')
    <h3>{{$service->display_name}}</h3>
    <div class="post">
  
    <p>
        {{ $service->description }}
    </p>
    <p> Just fill out the form and we’ll be in touch </p>

    </div>

@endsection