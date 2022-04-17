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
      return view('institute.candidate.show',compact('profile'));
    }
    public function index()
    {
      $categories = Auth::user()->jobs->pluck('category_id');
      $profiles = Profile::whereIn('category_id',$categories)->get();
      return view('institute.candidate.index')->with('profiles',$profiles);
    }
}
