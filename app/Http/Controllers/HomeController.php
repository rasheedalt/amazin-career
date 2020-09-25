<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    public function home(){
        $jobs = Job::paginate(10);
        return view('welcome', compact('jobs'));
    }
}
