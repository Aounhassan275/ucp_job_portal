<?php

namespace App\Http\Controllers\Candidate;

use App\Helpers\Message;
use App\Http\Controllers\Controller;
use App\Models\C_withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_withdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidate.withdraw.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.withdraw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        
        if($request->amount > $user->balance){
              toastr()->error('Not enough balance');
              return redirect()->back();
          }
        $user->update([
            'balance' => $user->balance -= $request->amount,    
        ]);
        $c_withdraw = C_withdraw::create($request->all());
        toastr()->success('Withraw Request Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\C_withdraw  $c_withdraw
     * @return \Illuminate\Http\Response
     */
    public function show(C_withdraw $c_withdraw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\C_withdraw  $c_withdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(C_withdraw $c_withdraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\C_withdraw  $c_withdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, C_withdraw $c_withdraw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\C_withdraw  $c_withdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(C_withdraw $c_withdraw)
    {
        //
    }
    
}
