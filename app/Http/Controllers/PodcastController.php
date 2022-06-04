<?php

namespace App\Http\Controllers;

use App\Podcast;
use Embed\Embed;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('podcast.podcast');
    }

    public function create()
    {
        return view('podcast.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'podcast_url' => 'required'
        // ],
        // [
        //     'podcast_url.unique' => 'This URL is exsist'
        // ]);

        $podcast = new Podcast;
        $podcast -> podcast_url = $request ->input('podcast_url');
        $podcast -> heading = $request -> input('heading');
        $podcast->save();

        return redirect('podcast');
    }

    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }
}
