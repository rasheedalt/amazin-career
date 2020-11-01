<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function viewService(Service $service){
        return view('services.details', compact('service'));
    }

    public function businessPlanView(){
        return view('services.business_plan');
    }

    public function companyRegistrationView(){
        return view('services.company_registration');
    }

    public function coverLetterView(){
        return view('services.cover_letter');
    }

    public function cvRevieView(){
        return view('services.cv_rewrite');
    }

    public function linkedInOptimizationView(){
        return view('services.linkedin_optimization');
    }

}
