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

    public function changePasswordView(){
        return view('admin.change_password');
    }

    public function changePassword(Request $request){
        $request->validate([
            'current_password' => 'required|string|min:4',
            'new_password' => 'required|string|min:4',
            'password_confirmation' => 'required|string|min:4|same:new_password',
        ]);

        if(!Hash::check($request->current_password, auth()->user()->password)){
            $this->flashErrorMessage('current password incorrect');
            return back()->withInput();
        }

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]); 
        $this->flashSuccessMessage('Password changed successfully');
        return back();
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
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $this->flashSuccessMessage("{$user->firstname} added successfully");
        return back();
    }
}
