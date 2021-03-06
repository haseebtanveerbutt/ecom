<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabuler;

class TabulerController extends Controller
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
       return view('admin.tabuler_input.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          return $request;
          dd();
        // dd($request);
        foreach ($request->file('name') as $index => $file) {
            // get file info       
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().'/images/', $fileName);

            // $model->image_name = $request->image_name[$index];
            // save data in model
            $model = new Tabuler();
            $model->title = $request->title[$index];
            // $model->description = $fileName;
            // $model->course_name = $fileName;
            
            $model->course_name = $request->course_name;
            // validate model saving
            $model->save();
        }
        
        Session::flash('alert-success', 'Content added Successfully');
        return redirect()->back();
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
