<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function approved($id)
    {
        $job = Job::find($id);
        $job->update([
            'status' => 'Approved'
        ]);     
        
        toastr()->success('Job is Approved Now');
        return redirect()->back();
    }
    public function delete1($id)
    {
        $job = Job::find($id);
        $job->delete();
        toastr()->success('Job Deleted Successfully');
        return redirect()->back();
    }
}
