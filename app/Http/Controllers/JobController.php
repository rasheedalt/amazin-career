<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\State;
use App\Models\JobGroup;
use App\Http\Requests\CreateJobRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SearchJobRequest;

class JobController extends Controller
{
    public function view($jobCode){
        $jobs = Job::where('job_code', $jobCode)->get();
        return view('jobs.details', compact('jobs'));
    }

    public function viewById(Job $job){
        return view('jobs.details', compact('job'));
    }

    public function postJobView(){
        $states = State::all();
        return view('jobs.post-job', compact('states'));
    }

    public function saveJob(CreateJobRequest $request, $admin = null){
        $data = $request->all();

        if(isset($data['is_group']) && $data['is_group'] == 'yes'){
            DB::beginTransaction();

            try {
                $basicData = [
                    'company_name' => $data['company_name'],
                    'company_registration_no' => $data['company_registration_no'],
                ];

                $jobs = $data['job'];
                $jobCode = uniqid();

                foreach($jobs as $job){
                    $adds = $job['address'];
                    $addToSaveAsLocation = !empty($adds) ? implode(",", $adds) : '';

                    $job = array_merge($basicData, $job);
                    $job['job_code'] = $jobCode;
                    $job['address'] = $addToSaveAsLocation;

                    $savedJob = Job::create($job);

                    if(!empty($adds)){
                      if( in_array('Nation wide',$adds) ){
                        $allStates = State::all();
                        $job->states()->attach($allStates);
                      }else{
                        foreach ($adds as $add) {
                          $state = State::where('name', $add)->first();
                          if($state){
                            $savedJob->states()->attach($state);
                          }
                        }
                      }
                    }

                    if($admin){
                        $savedJob->update(['is_approved' => true, 'is_active' => true]);
                    }else{
                      $savedJob->update(['is_approved' => false]);
                    }
                }
                DB::commit();

                $this->flashSuccessMessage('Jobs posted successfully');
                return back();

            } catch (\Exception $e) {
                DB::rollback();
                dd($e);
                $this->flashErrorMessage('Error posting Job');
                return back()->withInput();
            }

        }else{
            $jobs = $data['job'];
            $adds = $jobs[1]['address'];
            $addToSaveAsLocation = !empty($adds) ? implode(",", $adds) : '';

            $dataToSave = [
                'company_name' => $data['company_name'],
                'company_registration_no' => $data['company_registration_no'],
                'address' => $addToSaveAsLocation,
                'title' => $jobs[1]['title'],
                'description' => $jobs[1]['description'],
                'application_mode' => $jobs[1]['application_mode'],
                'salary' => $jobs[1]['salary'],
                'deadline' => $jobs[1]['deadline'],
                'link' => $jobs[1]['link'],
                'job_code' => uniqid()
            ];

            $job = Job::create($dataToSave);

            if(!empty($adds)){
              if( in_array('Nation wide',$adds) ){
                $allStates = State::all();
                $job->states()->attach($allStates);
              }

              foreach ($adds as $add) {
                $state = State::where('name', $add)->first();
                if($state){
                  $job->states()->attach($state);
                }
              }
            }

            if($admin){
                $job->update(['is_approved' => true]);
            }else{
                $job->update(['is_approved' => false]);
            }

            if($job){
                $this->flashSuccessMessage('Job posted successfully');
                return back();
            }else{
                $this->flashErrorMessage('Error posting Job');
                return back()->withInput();
            }
        }

    }

    public function deleteJob(Job $job){
        if(auth()->user() && auth()->user()->isSuperAdmin()){
            $job->delete();
            $this->flashSuccessMessage('Job deleted successfully');
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
                })
                ->orWhere('address', 'like', '%' . $state->name . '%')
                ->select(DB::raw('group_concat(company_name) as company_name,
                     group_concat(created_at) as date,
                     group_concat(description) as description,
                     group_concat(title) as title,
                     job_code,
                     count(*) as count'))
                 ->orderBy('date', 'desc')
                 ->groupBy('job_code')
                ->paginate(10);
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
            foreach ($state as $term) {
                // Loop over the terms and do a search for each.
                $search->orWhere('jobs.address', 'like', '%' . $term . '%');
            }
        }

        $jobs = $search
        ->select(DB::raw('group_concat(company_name) as company_name,
             group_concat(created_at) as date,
             group_concat(description) as description,
             group_concat(title) as title,
             job_code,
             count(*) as count'))
         ->orderBy('date', 'desc')
         ->groupBy('job_code')
        ->paginate(10);
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
