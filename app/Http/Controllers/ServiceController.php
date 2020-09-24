<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function viewService(Service $service){
        return view('services.details', compact('service'));
    }
}
