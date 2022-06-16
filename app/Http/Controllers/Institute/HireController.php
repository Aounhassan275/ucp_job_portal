<?php

namespace App\Http\Controllers\Institute;

use App\Helpers\Message;
use App\Http\Controllers\Controller;
use App\Models\Hire;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('institute.hire.index');
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
        $interview_date = Carbon::parse($request->date);
        if($interview_date->format('l') == 'Sunday')
        {
            toastr()->error('Sunday is Off.');
            return redirect()->back();
        }
        if(!$interview_date->gt(Carbon::today()))
        {
            toastr()->error('Interview Date is invalid.Please Choose Future Date.');
            return redirect()->back();
        }
        $hire = Hire::create($request->all()); 
        toastr()->success('Your Hire Request Posted Successfully');
        return redirect()->route('institute.hire.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hire  $hire
     * @return \Illuminate\Http\Response
     */
    public function show(Hire $hire)
    {
        return view('institute.hire.show')->with('hire',$hire);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hire  $hire
     * @return \Illuminate\Http\Response
     */
    public function edit(Hire $hire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hire  $hire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hire = Hire::find($id);
        if($request->date)
        {
            $interview_date = Carbon::parse($request->date);
            if($interview_date->format('l') == 'Sunday')
            {
                toastr()->error('Sunday is Off.');
                return redirect()->back();
            }
            if(!$interview_date->gt(Carbon::today()))
            {
                toastr()->error('Interview Date is invalid.Please Choose Future Date.');
                return redirect()->back();
            }
        }else{
            $request->merge([
                'date'  => $hire->date,
            ]);
        }
        dd($request);
        $hire->update($request->all());
        toastr()->success('Candidate Hirign Informations Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hire  $hire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hire = Hire::find($id);
        $hire->delete();
        toastr()->success('Hire Detail Deleted Successfuly');
        return redirect()->back();
    }
     public function completed($id)
    {
        $hire = Hire::find($id);
        $hire->update([
            'status' => 'Completed'
        ]);
        toastr()->success('Hire Request is Completed Now');
        return redirect()->back();
    }
}
