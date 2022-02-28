<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Profile;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function detail($id)
    {
      $profile = Profile::find($id);
    //   dd($candidate);

      return view('institute.candidate.show',compact('profile'));
    }
        public function index()
    {
        $profiles = Profile::where('id',0)->get();
        $deposit = [];
      
        
      $jobs = Auth::user()->jobs;

      foreach($jobs as $key => $job){
        $deposits = Deposit::where('category2',$job->category_id)->orWhere('category1',$job->category_id)->get();
         foreach($deposits as $key => $deposit){
            $profiles->add($deposit->profile);
         }
      }
       
      return view('institute.candidate.index')->with('profiles',$profiles);
    }
}
