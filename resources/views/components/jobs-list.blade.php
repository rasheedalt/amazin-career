@if($jobs->count() > 0)
    @foreach($jobs as $job)
        <h4>{{ ucwords($job->title) }}</h4>
        <date> Date posted: {{$job->created_at->format('d M Y h:i a')}} </date>
        <p>
        @if(strlen($job->description) > 210 )
            {{  substr($job->description, 0, 200)."... "}}
        @else
            {{ $job->description }}
        @endif
        <a href="{{route('job.view', $job->id )}}">read more</a> </p>
        <hr>
    @endforeach
@else
    <p class="text-center mt-4 pt-4">Jobs Not Available</p>
@endif

<div class="nextBTN">

    {{ $jobs->links() }}

</div>
