<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Com_Categorie;
use App\Fontend;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    
    public function index()
    {
        $categorys = Com_Categorie::all();
        $podcasts= Podcast::all();
        return view('fontend.podcast.archive', compact('categorys','podcasts'));
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function show(Fontend $fontend)
    {
        
    }

    public function details($podcast_id){
        $categorys = Com_Categorie::all();
        $podcasts= Podcast::findorFail($podcast_id);
        return view('fontend.podcast.detail', compact('categorys','podcasts',));
    }

    public function cat_news($cat_id){
        $categorys = Com_Categorie::all();
        $podcasts= Podcast::where('cat_id',$cat_id)->get();
        return view('fontend.podcast.news_by_cat', compact('categorys','podcasts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function edit(Fontend $fontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fontend $fontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fontend  $fontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fontend $fontend)
    {
        //
    }
}
