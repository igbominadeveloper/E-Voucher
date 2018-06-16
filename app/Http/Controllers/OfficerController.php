<?php

namespace App\Http\Controllers;

use App\Officer;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OfficerController extends Controller
{

    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers = Officer::latest()->get();


        if(request()->user()->hasRole('administrator')) return view('officer.index',['officers' => $officers, 'page' => 'Officers']);

        return $officers;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'staff_number' => 'required',
            'rank' => 'required',
            'phone' => 'required'
            ]);

        $officer = new Officer($request->all());

        if($officer->save()){

            return response("Officer Created successfully", 201);

        }

        return back()->with(['message' => 'Failed']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function show(Officer $officer)
    {
        return view('officer.officer',['officer' => $officer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function edit(Officer $officer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Officer $officer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Officer $officer)
    {
        //
    }
}
