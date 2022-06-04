<?php

namespace App\Http\Controllers;

use App\Com_Upazila;
use App\Com_Division;
use App\Com_District;
use Illuminate\Http\Request;

class ComUpazilaController extends Controller
{
    
    public function index()
    {
        $upazilas= Com_Upazila::all();
        return view('upazila.index', compact('upazilas'));
    }

   
    public function create()
    {
        $divisions = Com_Division::all();
        $districts = Com_District::all();
        return view('upazila.create', compact('districts'), compact('divisions'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            
            'division_name' => ' ',
            'division_name_bn' => '',
            'division_slug' => 'min:4',
            'division_title' => '',
            'meta_description' => ''

        ]);

        Com_Upazila::create($request->all());

        session()->flash('msg', 'Upazila created successfully!');
        return redirect('upazila');
    }

   
    public function show(Com_Upazila $com_Upazila)
    {
        //
    }

    public function edit(Com_Upazila $com_Upazila)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Com_Upazila  $com_Upazila
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Com_Upazila $com_Upazila)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Com_Upazila  $com_Upazila
     * @return \Illuminate\Http\Response
     */
    public function destroy(Com_Upazila $com_Upazila)
    {
        //
    }
}
