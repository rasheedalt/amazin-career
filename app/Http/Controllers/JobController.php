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
}
