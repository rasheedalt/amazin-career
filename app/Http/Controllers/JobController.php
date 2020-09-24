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

    public function allStates(){
        $states = State::all();
        return view('jobs.job-by-states', compact('states'));
    }
}
