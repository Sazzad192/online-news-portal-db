<?php

namespace App\Http\Controllers;

use App\com_audittrail_bncontent;
use Illuminate\Http\Request;

class ComAudittrailBncontentController extends Controller
{

    public function index()
    {
        $audittrail= com_audittrail_bncontent::all();
        return view('audittrail.index', compact('audittrail'));
    }

    public function create()
    {
        return view('audittrail.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name'=>'',
            'ip'=>'',
            'action_datetime'=>'',
            'path_name'=>'',
            'query_details'=>''

        ]);

        com_audittrail_bncontent::create($request->all());

        session()->flash('msg', 'Category created successfully!');
        return redirect('audittrail');
    }

    public function show(com_audittrail_bncontent $com_audittrail_bncontent)
    {
        //
    }

    public function edit(com_audittrail_bncontent $com_audittrail_bncontent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\com_audittrail_bncontent  $com_audittrail_bncontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, com_audittrail_bncontent $com_audittrail_bncontent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\com_audittrail_bncontent  $com_audittrail_bncontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(com_audittrail_bncontent $com_audittrail_bncontent)
    {
        //
    }
}
