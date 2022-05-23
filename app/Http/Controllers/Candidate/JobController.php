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
      return view('candidate.job.show',compact('job'));
    }
    public function show()
    {
      $candidate = Auth::user();
      $categories = $candidate->profiles->where('profile','Approved')->pluck('category_id');
      $jobs = Job::whereIn('category_id',$categories)->where('status','Approved')->get();
      return view('candidate.job.index')->with('jobs',$jobs);
    }
}
