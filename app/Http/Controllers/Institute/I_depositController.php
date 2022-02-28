<?php

namespace App\Http\Controllers\Institute;

use App\Helpers\Message;
use App\Http\Controllers\Controller;
use App\Models\I_deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class I_depositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institute.deposit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            't_id' => 'required|unique:i_deposits'
        ]);

        if($validator->fails()){
            toastr()->error('Transaction Id already exists');
            return redirect()->back();
        }
        $i_deposit = I_deposit::create($request->all());
        toastr()->success('Institute Account Deposit Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\I_deposit  $i_deposit
     * @return \Illuminate\Http\Response
     */
    public function show(I_deposit $i_deposit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\I_deposit  $i_deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(I_deposit $i_deposit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\I_deposit  $i_deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, I_deposit $i_deposit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\I_deposit  $i_deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(I_deposit $i_deposit)
    {
        //
    }
}
