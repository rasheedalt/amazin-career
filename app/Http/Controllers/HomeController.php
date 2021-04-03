<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
        
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $jobs = Job::where('is_approved', true)
                ->where('is_active', true)
                ->orderBy('created_at', 'desc')
                // ->get()
                ->paginate(10)
                ->groupBy('job_code');
        // return $jobs;
        return view('welcome', compact('jobs'));
    }

    public function login()
    {
        return redirect()->route('login');
    }

    public function index()
    {
        return redirect()->route('dashboard');
    }
}
