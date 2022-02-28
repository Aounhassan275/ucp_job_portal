<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Hire;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function onHold($id)
    {
        $hire = Hire::find($id);
        $hire->update([
            'status' => 'Completed'
        ]);     
        toastr()->success('Hire Request is Completed Now');
        return redirect()->back();
    }
    public function detail($id)
    {
      $hire = Hire::find($id);
      return view('candidate.hire.detail',compact('hire'));
    }
}
