<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function block($id)
    {
        $candidate = Candidate::find($id);
        $candidate->update([
            'status' => 'block'
        ]);     
        toastr()->success('Candidate is blocked Now');
        return redirect()->back();
    }
    public function active($id)
    {
        $candidate = Candidate::find($id);
        $candidate->update([
            'status' => 'active'
        ]);   
        toastr()->success('Candidate is Active Now');
        return redirect()->back();
    }
        public function actives($id)
    {
        toastr()->success('Profile is Active Now');
        return redirect()->back();
    }
    public function approved($id)
    {
        $profile = Profile::find($id);
        $profile->update([
            'profile' => 'Approved',
            'a_date' => Carbon::today()

        ]);     
        toastr()->success('Candidate Profile is Approved Now');
        return redirect()->back();
    }  
    public function rejected($id)
    {
        $profile = Profile::find($id);
        $profile->update([
            'profile' => 'Rejected'
        ]);     
        toastr()->success('Candidate Profile is Reject Now');
        return redirect()->back();
    }
    public function detail($id)
    {
      $candidate = Candidate::find($id);
      return view('admin.profile.index',compact('candidate'));
    }
    public function showProfile($id)
    {
      $profile = Profile::find($id);
      return view('admin.profile.show',compact('profile'));
    }
}
