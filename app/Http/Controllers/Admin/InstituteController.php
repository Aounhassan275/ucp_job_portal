<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\I_deposit;
use App\Models\Institute;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function detail($id)
    {
        $institute = Institute::find($id);
      return view('admin.institute.detail',compact('institute'));
    }
    public function block($id)
    {
        $institute = Institute::find($id);
        $institute->update([
            'status' => 'block'
        ]);     
        toastr()->success('Institute is blocked Now');
        return redirect()->back();
    }
    public function active($id)
    {
        $institute = Institute::find($id);
        $institute->update([
            'status' => 'active',
            'a_date' => Carbon::today()
        ]);
        toastr()->success('Institute is Active Now');
        return redirect()->back();
    }
}
