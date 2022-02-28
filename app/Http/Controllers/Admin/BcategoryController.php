<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bcategory;
use Illuminate\Http\Request;

class BcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bcategory.index');
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
        $bcategory = Bcategory::create($request->all());
        toastr()->success('Blog Category Created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bcategory  $bcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Bcategory $bcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bcategory  $bcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Bcategory $bcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bcategory  $bcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bcategory $bcategory)
    {
        $bcategory->update($request->all());
        toastr()->success('Blog Category Informations Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bcategory  $bcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bcategory $bcategory)
    {
        $bcategory->delete();
        toastr()->success('Blog Category Deleted Successfully');
        return redirect()->back();
    }
}
