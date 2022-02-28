<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function detail($id)
    {
      $applicant = Applicant::find($id);
      return view('institute.applicant.show',compact('applicant'));
    }
}
