<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Profile;
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
      $profiles = Profile::whereIn('category_id',$categories)->where('profile','Approved')->get();
      return view('institute.candidate.index')->with('profiles',$profiles);
    }
}
