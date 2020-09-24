<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function view(Job $job){
        return view('jobs.details', compact('job'));
    }
}
