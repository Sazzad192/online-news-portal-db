<?php

namespace App\Http\Controllers;

use App\Com_District;
use App\Com_Division;
use Illuminate\Http\Request;

class ComDistrictController extends Controller
{
    
    public function index()
    {
        $district= Com_District::all();
        return view('district.index', compact('district'));
    }

    public function create()
    {
        $district= Com_Division::all();
        return view('district.create', compact('district'));
    }


    public function store(Request $request)
    {
        $request->validate([
            
            'district_name' => ' ',
            'district_name_bn' => '',
            'district_slug' => 'min:4',
            'district_title' => '',
            'meta_district' => ''

        ]);

        Com_District::create($request->all());

        session()->flash('msg', 'District created successfully!');
        return redirect('district');
    }


    public function show(Com_District $com_District)
    {
        //
    }


    public function edit(Com_District $com_District)
    {
        //
    }


    public function update(Request $request, Com_District $com_District)
    {
        //
    }


    public function destroy(Com_District $com_District)
    {
        //
    }
}
