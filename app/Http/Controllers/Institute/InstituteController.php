<?php

namespace App\Http\Controllers\Institute;

use App\Helpers\Message;
use App\Http\Controllers\Controller;
use App\Models\Institute;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstituteController extends Controller
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
        //
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
                'email' => 'required|unique:institutes'
            ]);

            if($validator->fails()){
                toastr()->error('Email Address  already exists');
                return redirect()->back();
            }
            if($request->password != $request->confirm_password)
            {
                toastr()->error('Password Not Match');
                return redirect()->back();
            }
            Institute::create($request->all());
            
        toastr()->success('Your Account Has Been successfully Created, Please Login and See Next Step Guides.');
        return redirect(route('institute.login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
        $institute = Institute::find($request->id);
        $institute->update($request->all());
        toastr()->success('Your Informations Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        //
    }
    
}
