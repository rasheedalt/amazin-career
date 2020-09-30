<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function generateLogin(){
        return view('admin.generate_login');
    }

    public function deactivateLogin(){
        $users= User::paginate(10);
        return view('admin.deactivate_login', compact('users'));
    }

    public function deactivateUser(User $user){
        $user->is_active = !$user->is_active;
        $user->save();
        return back();
    }

    public function registerUser(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6'
            ]);
        $data = $request->all();
        // return $data;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $this->flashSuccessMessage("{$user->firstname} added successfully");
        return back();
    }
}
