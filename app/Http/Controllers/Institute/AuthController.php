<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\MailHelper;
use App\Helpers\Message;


class AuthController extends Controller
{
    public function login(Request $request){
        $institute = Institute::where('email',$request->email)->first();
        if($institute){
            if($institute->status == 'block')
            {
            toastr()->error('You are Blocked,Kindly Contact Support');
            return redirect()->back();
            }
        }
        $institute = Institute::where('email',$request->email)->first();
        if(!$institute){
            toastr()->error('Please register your account');
            return redirect()->back();
        }

        $creds = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::guard('institute')->attempt($creds)){
            
            $user = Auth::guard('institute')->user();
            toastr()->success('You Login Successfully into Institute Panel');
            return redirect()->intended(route('institute.dashboard.index'));
        } else {
            toastr()->error('Wrong Password','Please Contact Support');
            return redirect()->back();
            
        }
    }
    
    public function logout()
    {
        Auth::logout();
        toastr()->success('You Logout Successfully');
        return redirect(route('institute.login'));
    }
    public function searchCandidate(Request $request)
    {
        if($request->keyword && $request->location){
            
                $this->profiles = Profile::where('address','Like', '%'.$request->location.'%')
                        ->Where('professional', 'LIKE', '%' . $request->keyword . '%')->distinct()->get();
        }
        else if($request->location){

                $this->profiles = Profile::where('address','Like', '%'.$request->location.'%')->distinct()->get();
        }
        else if($request->keyword){
                    $this->profiles = Profile::Where('professional', 'LIKE', '%' . $request->keyword . '%')
                    ->distinct()->get();
        }
        else
            $this->profiles = Profile::all();
        
        
        $keyword = $request->keyword?$request->keyword:'';
        $location = $request->location?$request->location:'';
        return view('institute.candidate.candidate')
            ->with('Keyword', $keyword)
            ->with('Location', $location)
            ->with('profiles', $this->profiles);
    }
}
