<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AuthController extends Controller
{
    public function login(Request $request){
        $creds = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::guard('admin')->attempt($creds))
        {
            toastr()->success('Admin Login Successfully');
            return redirect()->intended(url('admin/dashboard'));
        } else {
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        toastr()->success('Admin Logout Successfully');
        return redirect('admin/login');
    }
     public function reset(Request $request){
        $user = Admin::where('email',$request->email)->first();
        if(!$user){
            toastr()->error('User not found');
            return redirect()->back();
        }
        $user->password = "12345";
        $user->save(); 
        return redirect()->route('admin.login');
    }
    
}
