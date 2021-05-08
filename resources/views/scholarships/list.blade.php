@extends('layouts.main-layout')

@section('main')
    <h3>SCHOLARSHIPS</h3>
    <div class="post">
      @if($scholarships->count() > 0)
        @foreach($scholarships as $scholarship)
            <h4>{{ ucwords($scholarship->title) }}</h4>
            <date> Date: {{$scholarship->created_at}} </date>
            <p>
            @if(strlen($scholarship->description) > 210 )
                {{  substr($scholarship->description, 0, 200)."... "}}
            @else
                {{ $scholarship->description }}
            @endif
            <a href="{{route('scholarship.view', $scholarship->id )}}" >read more</a> </p>
            <hr>
        @endforeach
      @else
        <p class="text-center mt-4">No scholarship available</p>
      @endif

    </div>

    <div class="nextBTN">

        {{ $scholarships->links() }}

    </div>
@endsection
