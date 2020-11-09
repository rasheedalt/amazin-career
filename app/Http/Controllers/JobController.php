<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\State;

class JobController extends Controller
{
    public function view(Job $job){
        return view('jobs.details', compact('job'));
    }

    public function postJobView(){
        return view('jobs.post-job');
    }

    public function saveJob(Request $request){
        $data = $request->all();
        
        $job = Job::create($data);
        if($job){
            $this->flashSuccessMessage('Job was saved successfully');
            return back();
        }else{
            $this->flashErrorMessage('Error saving Job');
            return back()->withInput();
        }
    }

    public function allStates(){
        $states = State::all();
        return view('jobs.job-by-states', compact('states'));
    }

    public function viewStateJobs($stateCode){
        $state = State::where('code', strtoupper($stateCode))->first();
        if(!$state){
            $this->flashErrorMessage('Error in State Code');
            return back();
        }
        $stateID = $state->id;
        $jobs = Job::whereHas('state', function($q) use($stateID) {
            $q->where('states.id', $stateID);
        })->paginate(10);
        return view('jobs.state-jobs', compact('state', 'jobs'));
    }

    public function searchJob(Request $request){
        // Split the terms by word.
        $job = $request->job ?? explode(" ", request('job'));
        $state = $request->state ?? explode(" ", request('state'));

        $search = Job::query()
            ->where(function ($query) use ($job) {
                foreach ($job as $term) {
                    $query->where('jobs.title', 'like', '%' . $term . '%');
                }
            });

        if($state){
            $serach = $search->whereHas('state', function ($query) use ($state) {
                foreach ($state as $term) {
                    // Loop over the terms and do a search for each.
                    $query->where('states.name', 'like', '%' . $term . '%');
                }
            });
        }

        $jobs = $search->paginate(10);
        return view('jobs.state-jobs', compact('state', 'jobs'));
    }
}
