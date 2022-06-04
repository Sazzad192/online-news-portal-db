<?php

namespace App\Http\Controllers;

use App\Com_Division;
use Illuminate\Http\Request;

class ComDivisionController extends Controller
{
    public function index()
    {
        $divisions= Com_Division::all();
        return view('division.index', compact('divisions'));
    }

    public function create()
    {
        return view('division.create');
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

        Com_Division::create($request->all());

        session()->flash('msg', 'division created successfully!');
        return redirect('division');
    }

    public function show(Com_Division $com_Division)
    {
        //
    }


    public function edit(Com_Division $com_Division, $division_id)
    {
        $comdivisions = Com_Division::find($division_id);
        return view('division.edit', compact('comdivisions'));
    }

    public function update(Request $request, Com_Division $com_Division, $division_id)
    {
        $request->validate([
        ]);

        $comCountries=Com_Division::where('division_id','=',$division_id)->first();
        $comCountries->update($request->all());
        session()->flash('msg', 'Division updated successfully!');
        return redirect('division');
    }

    public function destroy(Com_Division $com_Division)
    {
        //
    }
}
