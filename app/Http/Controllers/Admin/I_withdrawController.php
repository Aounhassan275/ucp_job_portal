<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\I_withdraw;
use Illuminate\Http\Request;

class I_withdrawController extends Controller
{
    public function completed($id)
    {
        $i_withdraw = I_withdraw::find($id);
        $i_withdraw->update([
            'status' => 'Completed'
        ]);     
        toastr()->success('Withdraw is Completed Now');
        return redirect()->back();
    }
    public function onhold($id)
    {
        $i_withdraw = I_withdraw::find($id);
        $i_withdraw->update([
            'status' => 'onHold'
        ]);     
        toastr()->success('Withdraw is On Hold Now');
        return redirect()->back();
    }
}
