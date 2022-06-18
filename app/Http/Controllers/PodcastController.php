<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Com_Categorie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Embed\Embed;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        // return view('podcast.podcast');
        $podcasts= Podcast::all();
        return view('podcast.index', compact('podcasts'));
    }

    public function create()
    {
        $categorys = Com_Categorie::all();
        return view('podcast.create', compact('categorys'));
    }

    public function store(Request $request)
    {
        $podcasts = new Podcast;
        $podcasts-> cat_id= $request->input('cat_id');
        $podcasts-> cloud_url = $request->input('cloud_url');
        $podcasts-> news_body =$request->input('news_body');
        $podcasts-> heading =$request->input('heading');
        $podcasts-> cloud_id=$request->input('cloud_id');
        $podcasts-> news_header= $request->input('news_header');

        if($request->file('news_img_path')){
            $podcasts-> news_img_path= $request->file('news_img_path');
        }

        // $folder_year= Carbon::now()->format('Y');
        // $folder_name= Carbon::now()->format('F');
        // // $uploadPath = public_path().$folder_year. '/' .$folder_name;
        // Storage::makeDirectory($folder_year. '/' .$folder_name, 0755);

        // //news_img_path
        // if($request->file('news_img_path'))
        // {
        //     $file= $request->file('news_img_path');
        //     $local_file_name= str_replace(' ','_', $file->getClientOriginalName());
        //     $final_name = $folder_year. '/' .$folder_name. '/' .$local_file_name;
        //     $file->move(public_path('$folder_year/$folder_name'), $final_name);
        //     $podcasts->news_img_path= $final_name;
        // }

        $podcasts->save();
        return redirect('podcast');
    }

    public function show(Podcast $podcast)
    {
        //
    }

    public function edit(Podcast $podcast)
    {
        //
    }

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
