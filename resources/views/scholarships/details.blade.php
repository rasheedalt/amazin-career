@extends('layouts.main-layout')

@section('main')
    <h3>Scholarship Details</h3>
    <div class="post">
        <h4>{{ ucwords($scholarship->title) }}</h4>
        <date> Date posted: {{ $scholarship->created_at->format('d - M - Y') }} </date>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate culpa sequi quo, cum voluptates at consequatur maiores hic dicta voluptatem impedit deserunt, velit pariatur iste asperiores! Placeat ipsam quas eligendi error, facere quo aperiam deserunt temporibus accusamus itaque officia tempora, ipsum animi ex dolorum praesentium consequatur molestiae exercitationem saepe quis!. </p>

        <p><strong>Requirements</strong></p>

        <p>{{ $scholarship->description }}</p>

        <p><strong>Method of Application</strong></p>
        <p>{{ $scholarship->application_mode }}</p>

        <p><strong>Deadline</strong></p>
        <p>djlk</p>

        <p><strong>Deadline/Salary Range</strong></p>
        <p>{{ $scholarship->salary }} </p>

        @if($scholarship->link)
        <a href="{{ $scholarship->link }}" class="btn btn-success text-white" style="background-color:#072638; text-decoration:none">Apply</a>
        @endif
    </div>

@endsection