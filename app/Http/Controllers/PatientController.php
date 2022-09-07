<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new_patient()
    {
        return view('new_patient');
    }

    public function old_patient()
    {
        return view('old_patient');
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
        $patient_insert = new Patient;

        $patient_insert->p_name            = $request->input('p_name');
        $patient_insert->p_age            = $request->input('p_age');
        $patient_insert->p_mobile            = $request->input('p_mobile');
        $patient_insert->p_gender            = $request->input('p_gender');
        $patient_insert->p_blood            = $request->input('p_blood');
        $patient_insert->p_address            = $request->input('p_address');
        $patient_insert->p_d_name            = $request->input('p_d_name');
        $patient_insert->p_r_d_name            = $request->input('p_r_d_name'); 
        $patient_insert->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
