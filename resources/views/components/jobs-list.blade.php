@if($jobs->count() > 0)
    @foreach($jobs as $key => $value)
        @php 
            $jobCount = $value->count();
            $job = $value[0];
        @endphp
        @if($jobCount > 1)
                <h4><a href="{{route('job.view', $job->job_code )}}" style="color: #072638;">{{ ucwords($jobCount." positions at ".$job->company_name) }}</a></h4>
                <date> Date posted: {{$job->created_at->format('d M Y h:i a')}} </date>
                <p>
                @if(strlen($job->description) > 210 )
                    {{  substr($job->description, 0, 200)."... "}}
                @else
                    {{ $job->description }}
                @endif
                <a href="{{route('job.view', $job->job_code )}}">read more</a> </p>
                <hr>

        @else
            <h4><a href="{{route('job.view', $job->job_code )}}" style="color: #072638;">{{ ucwords($job->title) }}</a></h4>
            <date> Date posted: {{$job->created_at->format('d M Y h:i a')}} </date>
            <p>
            @if(strlen($job->description) > 210 )
                {{  substr($job->description, 0, 200)."... "}}
            @else
                {{ $job->description }}
            @endif
            <a href="{{route('job.view', $job->job_code )}}">read more</a> </p>
            <hr>
        @endif
    @endforeach
@else
    <p class="text-center mt-4 pt-4">Jobs Not Available</p>
@endif

<div class="nextBTN container-fluid">

    

</div>
