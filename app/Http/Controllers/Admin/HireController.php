<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hire;
use Illuminate\Http\Request;
use App\Helpers\Message;

class HireController extends Controller
{
    public function completed($id)
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
      return view('admin.hire.detail',compact('hire'));
    }
}
