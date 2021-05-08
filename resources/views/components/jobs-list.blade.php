@if($jobs->count() < 1)
  <p class="text-center mt-4 pt-4">Jobs Not Available</p>
@endif

@foreach($jobs as $job)
    @php
      $isGroupJob = $job->count > 1;
    @endphp

    <h4><a href="{{route('job.view', $job->job_code )}}" style="color: #072638;">{{ $isGroupJob ? ucwords($job->count." positions at ".explode(',', $job->company_name)[0] ) : ucwords($job->title) }}</a></h4>

    <date> Date posted: {{ $isGroupJob ? explode(',', $job->date)[0] : $job->date }} </date>
    <p>
    @if(strlen($job->description) > 210 )
        {{  substr($job->description, 0, 200)."... "}}
    @else
        {{ $job->description }}
    @endif
    <a href="{{route('job.view', $job->job_code )}}">read more</a> </p>
    <hr>
@endforeach


<div class="nextBTN container-fluid">
    {{ $jobs->onEachSide(2)->links() }}
</div>
