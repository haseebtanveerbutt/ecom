<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient_data = new Patient;
        $data_p = $patient_data->all();
        
        return view('patient.index', compact('data_p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient_data = $request->except('image');
        $this->validate($request,[ 
        'name'=>'required']
        );
        $password = Hash::make($request->password);
        $patient_data['password'] = $password;
        $image= $request->image;
        if($image)
        {
            $destination = 'patient_images/';
            $imageName = $image->getClientOriginalName();
            $image->move($destination, $imageName);
            $patient_data['image'] = $imageName;

        }

        Patient::create($patient_data);
        return redirect()->route('patient-crud.index');
        
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
        $data=Patient::find($id);
        return view('patient.edit', compact('data'));
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
        
        $data = Patient::where('id', '=', $id)->first();
        $data->update($request->all());
        $data_p = $data->all();
        return view('patient.index', compact('data_p'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Patient::find($id);
        
        $data->delete();
        return redirect()->back();
    }
}
