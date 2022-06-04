<?php

namespace App\Http\Controllers;

use App\com_author;
use Illuminate\Http\Request;

class ComAuthorController extends Controller
{
    
    public function index()
    {
        $authors= com_author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'author_name'=>'',
            'author_name_bn'=>'',
            'author_name_slug'=>'',
            'author_initial'=>'',
            'designation'=>'',
            'designation_en'=>'',
            'author_bio'=>'',
            'author_bio_bn'=>'',
            'facebook_url'=>'',
            'twitter_url'=>'',
            'linkedin_url'=>'',
            'image_path'=>'',
            'noindex'=>'',
            'show_byline'=>'',
        ]);

        // Com_Categorie::create($request->all());

        $authors = new com_author;
        $authors->author_type = $request->input('author_type');
        $authors->author_name = $request->input('author_name');
        $authors->author_name_bn = $request->input('author_name_bn');
        $authors->author_name_slug = $request->input('author_name_slug');
        $authors->author_initial = $request->input('author_initial');
        $authors->designation = $request->input('designation');
        $authors->designation_en = $request->input('designation_en');
        $authors->author_bio = $request->input('author_bio');
        $authors->author_bio_bn = $request->input('author_bio_bn');

        $authors->facebook_url = $request->input('facebook_url');
        $authors->twitter_url = $request->input('twitter_url');
        $authors->linkedin_url = $request->input('linkedin_url');
        $authors->noindex = $request->input('noindex');
        $authors->show_byline = $request->input('show_byline');
        // $authors->noindex = $request->input('noindex') == TRUE?'0':'1';
        // $authors->show_byline = $request->input('show_byline') == TRUE?'0':'1';
        $authors->save();

        session()->flash('msg', 'Category created successfully!');
        return redirect('author');
        
    }

    public function show(com_author $com_author)
    {
        //
    }

    
    public function edit(com_author $com_author, $author_id)
    {
        $author = com_author::find($author_id);
        // $cats= Com_Categorie::get();
        // dd($comCategories);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, com_author $com_author, $author_id)
    {
        $com_author=com_author::where('author_id','=',$author_id)->first();
        $com_author->update($request->all());
        session()->flash('msg', 'Author updated successfully!');
        return redirect('author');
    }

    // Show_byline
    public function showbyline(com_author $com_author)
    {
        // dd($com_Categorie->status==1);

        if($com_author->show_byline == 1)
        {
            $com_author->update(['show_byline'=>0]);
        }
        
        else
        {
            $com_author->update(['show_byline'=>1]);
        }

        return redirect()->back()->with('Show by line updated');
    }

    // Noindex
    public function noindex(com_author $com_author)
    {
        // dd($com_Categorie->status==1);
        
        if($com_author->noindex == 1)
        {
            $com_author->update(['noindex'=>0]);
        }
        
        else
        {
            $com_author->update(['noindex'=>1]);
        }

        return redirect()->back()->with('Noindex updated');
    }

    public function destroy(com_author $com_author)
    {
        //
    }
}
