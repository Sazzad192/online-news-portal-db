<?php

namespace App\Http\Controllers;

use App\Com_Country;
use Illuminate\Http\Request;

class ComCountryController extends Controller
{
    public function index()
    {
        $counties= Com_Country::all();
        return view('country.country', compact('counties'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_name' => ' ',
            'country_name_bn' => '',
            'country_slug' => 'min:4'

        ]);

        Com_Country::create($request->all());

        session()->flash('msg', 'country created successfully!');
        return redirect('country');
    }

   
    public function show(Com_Country $com_Country)
    {
        // 
    }

    public function edit(Com_Country $com_Country, $country_id)
    {
        $comCountries= Com_Country::find($country_id);
        dd($comCountries);
        return view('country.edit', compact('comCountries'));
    }

    public function update(Request $request, Com_Country $com_Country, $country_id)
    {

        $request->validate([
            'country_name' => ' ',
            'country_name_bn' => '',
            'country_slug' => 'min:4'

        ]);

        $comCountries=Com_Country::where('country_id','=',$country_id)->first();
        $comCountries->update($request->all());
        session()->flash('msg', 'country updated successfully!');
        return redirect('country');
    }

    public function destroy(Com_Country $com_Country)
    {
        //
    }
}
