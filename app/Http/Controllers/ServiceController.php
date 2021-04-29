<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\CvRewrite;
use App\Models\CoverLetter;
use App\Models\BusinessPlan;
use Illuminate\Http\Request;
use App\Models\CompanyRegistration;
use App\Models\LinkedinOptimization;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function viewService(Service $service){
        return view('services.details', compact('service'));
    }

    public function businessPlanView(){
        return view('services.business_plan');
    }

    public function postBusinessPlan(Request $request){
      $request->validate([
        'first_name' => 'bail|required|string',
        'last_name' => 'bail|required|string',
        'email_address' => 'bail|required|email',
        'phone_number' => 'bail|required',
        'type_of_business' => 'bail|required|string',
      ]);

        $data = $request->all();
        $result = BusinessPlan::create($data);

        if($result){
            $this->flashSuccessMessage('Business Plan request successfull');
        }
        return back();
    }

    public function companyRegistrationView(){
        return view('services.company_registration');
    }

    public function postCompanyRegistration(Request $request){
      $request->validate([
        'first_proposed_business_name' => 'bail|required|string',
        'second_proposed_business_name' => 'bail|required|string',
        'name_of_business_owner' => 'bail|required|string',
        'business_address' => 'bail|required|string',
        'nature_of_bussiness' => 'bail|required|string',
        'email_address' => 'bail|required|email',
        'phone_number' => 'bail|required',
        'start_date' => 'bail|required|file',
      ]);

        $data = $request->all();
        $result = CompanyRegistration::create($data);

        if($result){
            $this->flashSuccessMessage('Company registration request successfull');
        }
        return back();
    }

    public function coverLetterView(){
        return view('services.cover_letter');
    }

    public function postCoverLetter(Request $request){
      $request->validate([
        'first_name' => 'bail|required|string',
        'last_name' => 'bail|required|string',
        'email_address' => 'bail|required|email',
        'phone_number' => 'bail|required',
        'cv' => 'bail|required|file',
      ]);

        $data = $request->all();
        if($request->hasFile('cv')){
            $image = $request->file('cv');
            $extension = $image->getClientOriginalExtension();
            $name = "{$request->first_name}_{$request->last_name}_cv_".time().'.'.$extension;
            $url = $request->file('cv')->storeAs('public/cvs/', $name);
            $cv = url('/')."/storage/cvs/".$name;
            $data['cv'] = $cv;
        }

        $result = CoverLetter::create($data);

        if($result){
            $this->flashSuccessMessage('Cover letter request successfull');
        }
        return back();
    }

    public function cvReviewView(){
        return view('services.cv_rewrite');
    }

    public function postCvReview(Request $request){
        $request->validate([
          'first_name' => 'bail|required|string',
          'last_name' => 'bail|required|string',
          'email_address' => 'bail|required|email',
          'phone_number' => 'bail|required',
          'cv' => 'bail|required|file',
        ]);

        $data = $request->all();

        if($request->hasFile('cv')){
            $image = $request->file('cv');
            $extension = $image->getClientOriginalExtension();
            $name = "{$request->first_name}_{$request->last_name}_cv_".time().'.'.$extension;
            $url = $request->file('cv')->storeAs('public/cvs/', $name);
            $cv = url('/')."/storage/cvs/".$name;
            $data['cv'] = $cv;
        }

        $result = CvRewrite::create($data);

        if($result){
            $this->flashSuccessMessage('CV rewrite request successfull');
        }
        return back();
    }

    public function linkedInOptimizationView(){
        return view('services.linkedin_optimization');
    }

    public function postLinkedInOptimization(Request $request){
        $request->validate([
          'linkedin_username' => 'bail|required|string',
          'linkedin_password' => 'bail|required|string',
          'email_address' => 'bail|required|email',
          'phone_number' => 'bail|required',
          'cv' => 'bail|required|file',
          'picture' => 'bail|required|file',
        ]);

        $data = $request->all();
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $extension = $image->getClientOriginalExtension();
            $name = "{$request->linkedin_username}_picture_".time().'.'.$extension;
            $url = $request->file('picture')->storeAs('public/pictures/', $name);
            $cv = url('/')."/storage/pictures/".$name;
            $data['picture'] = $cv;
        }

        if($request->hasFile('cv')){
            $image = $request->file('cv');
            $extension = $image->getClientOriginalExtension();
            $name = "{$request->first_name}_{$request->last_name}_cv_".time().'.'.$extension;
            $url = $request->file('cv')->storeAs('public/cvs/', $name);
            $cv = url('/')."/storage/cvs/".$name;
            $data['cv'] = $cv;
        }

        $result = LinkedinOptimization::create($data);

        if($result){
            $this->flashSuccessMessage('LinkedIn Optimization request successfull');
        }
        return back();
    }

}
