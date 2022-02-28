<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\C_withdraw;
use Illuminate\Http\Request;

class C_withdrawController extends Controller
{
    public function completed($id)
    {
        $c_withdraw = C_withdraw::find($id);
        $c_withdraw->update([
            'status' => 'Completed'
        ]);     
        toastr()->success('Withdraw is Completed Now');
        return redirect()->back();
    }
    public function onhold($id)
    {
        $c_withdraw = C_withdraw::find($id);
        $c_withdraw->update([
            'status' => 'onHold'
        ]);     
        toastr()->success('Withdraw is On Hold Now');
        return redirect()->back();
    }
    
}
