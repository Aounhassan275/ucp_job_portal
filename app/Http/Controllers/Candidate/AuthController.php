<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\MailHelper;
use App\Helpers\Message;


class AuthController extends Controller
{
    public function login(Request $request){
        
        $candidate = Candidate::where('email',$request->email)->first();
        if($candidate){
            if($candidate->status == 'block')
            {
            toastr()->error('You are Blocked,Kindly Contact Support');
            return redirect()->back();
             }
        }
        $candidate = Candidate::where('email',$request->email)->first();
        if(!$candidate){
            toastr()->error('Please register your account');
            return redirect()->back();
        }

        $creds = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::guard('candidate')->attempt($creds)){
            $user = Auth::guard('candidate')->user();
    
            toastr()->success('You Login Successfully into Candidate Panel');
            return redirect()->intended(route('candidate.dashboard.index'));
        } else {
            toastr()->error('Wrong Password','Please Contact Support');
            return redirect()->back();
            
        }
    }
    public function logout()
    {
        Auth::logout();
        toastr()->success('You Logout Successfully From Candidate Panel');
        return redirect(route('candidate.login'));
    }
}
