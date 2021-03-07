<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Requests\SearchJobRequest;

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
        
        if(auth()->user()){
            $job->update(['is_approved' => true, 'is_active' => true]);
        }

        if($job){
            $this->flashSuccessMessage('Job was saved successfully');
            return back();
        }else{
            $this->flashErrorMessage('Error saving Job');
            return back()->withInput();
        }
    }

    public function deleteJob(Job $job){
        if(auth()->user() && auth()->user()->isSuperAdmin()){
            $job->delete();
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
        $jobs = Job::where('is_approved', true)->where('is_active', true)
                ->whereHas('states', function($q) use($stateID) {
                    $q->where('states.id', $stateID);
                })->paginate(10);
        return view('jobs.state-jobs', compact('state', 'jobs'));
    }

    public function searchJob(SearchJobRequest $request){
        if($request->mobile_search){
            $job = $request->mobile_search ? explode(" ", request('mobile_search')) : '';
            $state = '';
            $keyword = "{$request->mobile_search}";
        }else{
            // Split the terms by word.
            $job = $request->job ? explode(" ", request('job')) : '';
            $state = $request->state ? explode(" ", request('state')) : '';
            $keyword = "{$request->job} {$request->state}";
        }

        // $search = Job::query();
        $search = Job::where('is_approved', true)->where('is_active', true);
        if($job){
            $search = $search->where(function ($query) use ($job) {
                foreach ($job as $term) {
                    $query->where('jobs.title', 'like', '%' . $term . '%')
                    ->orWhere('jobs.company_name', 'like', '%' . $term . '%');
                }
            });
        }

        if($state){
            $search = $search->whereHas('states', function ($query) use ($state) {
                foreach ($state as $term) {
                    // Loop over the terms and do a search for each.
                    $query->where('states.name', 'like', '%' . $term . '%');
                }
            });
        }

        $jobs = $search->paginate(10);
        return view('jobs.state-jobs', compact('state', 'jobs', 'keyword'));
    }

    public function approveJob(Job $job){
        $job->update(['is_approved' => true]);
        $this->flashSuccessMessage('Job approved successfully');
        return back();
    }

    public function ActivateToggle(Job $job){
        if(auth()->user() && !auth()->user()->isStaff()){

            $toggle = $job->is_active ? false : true;
            $job->update(['is_active' => $toggle]);
            $this->flashSuccessMessage('Successfull');
            return back();

        }else{
            $this->flashErrorMessage('Unauthorized');
            return back();
        }
    }
}
