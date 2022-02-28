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
        // $creds = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
        // if(Auth::guard('candidate')->attempt($creds))
        // {
        //     if(Auth::guard('candidate')->user()->status=='active')
        //     {
        //         toastr()->success('You Login Successfully into Candidate Panel');
        //         return redirect()->intended(route('candidate.dashboard.index'));
        //     }
        //     else{
        //         toastr()->success('You Login Successfully into Candidate Panel');
        //     return redirect()->intended(route('candidate.dashboard.index'));
        //     }
            
        // } else {
        //     return redirect()->back();
        // }
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
    public function code($code)
    {
        return view('candidate.auth.register')->with('code',$code);
    }
        public function sendVerification(Request $request){
        $candidate = Candidate::where('email',$request->email)->first();
        if(!$candidate){
            toastr()->error('User not found');
            return redirect()->back();
        }
        $candidate->verification = uniqid();
        $candidate->save();
        MailHelper::sendVerification($candidate);   
        toastr()->success('Verification Code Sent','Check your Message or Email Inbox');
        return redirect()->route('candidate.reset');
    }

    public function resetPassword(Request $request){
        $candidate = Candidate::where('verification',$request->verification)->first();
        if($candidate){
            $candidate->update([
                'password' => $request->password
            ]);
            toastr()->success('Password reset successfully');
            return redirect('candidate/login');
        } else {
            toastr()->error('Incorrect code');
            return redirect()->back();
        }
    }
}
