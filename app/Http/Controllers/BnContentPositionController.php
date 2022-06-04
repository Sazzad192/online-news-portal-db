<?php

namespace App\Http\Controllers;

use App\Bn_Content_Position;
use App\Com_Categorie;
use App\Com_Subcategorie;
use Illuminate\Http\Request;

class BnContentPositionController extends Controller
{
   
    public function index()
    {
        $conposition= Bn_Content_Position::all();
        return view('content_position.index', compact('conposition'));
    }

    public function create()
    {
        $categorys = Com_Categorie::all();
        $subcategorys = Com_Subcategorie::all();
        return view('content_position.create', compact('categorys'), compact('subcategorys'));
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

        Bn_Content_Position::create($request->all());

        session()->flash('msg', 'Content position ID created successfully!');
        return redirect('conposition');
    }

    
    public function show(Bn_Content_Position $bn_Content_Position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bn_Content_Position  $bn_Content_Position
     * @return \Illuminate\Http\Response
     */
    public function edit(Bn_Content_Position $bn_Content_Position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bn_Content_Position  $bn_Content_Position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bn_Content_Position $bn_Content_Position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bn_Content_Position  $bn_Content_Position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bn_Content_Position $bn_Content_Position)
    {
        //
    }
}
