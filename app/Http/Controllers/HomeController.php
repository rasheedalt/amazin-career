<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $jobs = Job::groupBy('job_code')
          ->select(DB::raw('group_concat(company_name) as company_name,
               group_concat(created_at) as date,
               group_concat(description) as description,
               group_concat(title) as title,
               job_code,
               count(*) as count'))
           ->orderBy('created_at', 'desc')
           ->paginate(10);

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
