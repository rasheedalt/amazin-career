<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class StaticPagesController extends Controller
{
    public function aboutPage(){
        return view('pages.about');
    }

    public function servicesPage(){
        $services = Service::where('is_active', true)->latest()->get();
        return view('pages.services', compact('services'));
    }

    public function contactPage(){
        return view('pages.contact');
    }

    public function postJobPage(){
        return view('pages.post-job');
    }

    public function disclaimerPage(){
        return view('pages.disclaimer');
    }

    public function termsPage(){
        return view('pages.terms');
    }

    public function policyPage(){
        return view('pages.policy');
    }

}
