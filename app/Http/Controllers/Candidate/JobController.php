<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function detail($id)
    {
      $job = Job::find($id);
    //   dd($candidate);

      return view('candidate.job.show',compact('job'));
    }
    public function show()
    {
      $candidate = Auth::user();
      $deposits = $candidate->deposits;
      $jobs = [];
      foreach($deposits as $key => $deposit){
        $jobs = Job::where('category_id',$deposit->category2)->orWhere('category_id',$deposit->category1)->get();
        
      }

      // dd($jobs);
      return view('candidate.job.index')->with('jobs',$jobs);
    }
}
