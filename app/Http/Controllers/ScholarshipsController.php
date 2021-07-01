<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Http\Requests\SaveScholarshipRequest;

class ScholarshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::where('is_active', true)->latest()->paginate(10);
        return view('scholarships.list',compact('scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function manage()
    {
        $scholarships = Scholarship::latest()->paginate(10);
        return view('admin.manage_scholarship', compact('scholarships'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveScholarshipRequest $request)
    {
        $scholarship = Scholarship::create($request->all());
        $this->flashSuccessMessage('Scholarship saved successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        return view('scholarships.details', compact('scholarship'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scholarship $scholarship)
    {
        $scholarship->delete();
        return back()->with('success', 'Scolarship deleted successfully');   
    }

    public function activateToggle(Scholarship $scholarship){
        if(auth()->user() && !auth()->user()->isStaff()){

            $toggle = $scholarship->is_active ? false : true;
            $scholarship->update(['is_active' => $toggle]);
            $this->flashSuccessMessage('Successfull');
            return back();

        }else{
            $this->flashErrorMessage('Unauthorized');
            return back();
        }
    }
}
