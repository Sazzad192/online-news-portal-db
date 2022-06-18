<?php

namespace App\Http\Controllers;

use App\Bn_Content;
use App\Com_Categorie;
use App\Com_Country;
use App\Com_District;
use App\Com_Division;
use App\Com_Subcategorie;
use App\Com_Upazila;
use Illuminate\Http\Request;

class BnContentController extends Controller
{
    
    public function index()
    {
        $contents= Bn_Content::all();
        return view('content.index', compact('contents'));
    }

    public function create()
    {
        $categorys = Com_Categorie::all();
        $subcategorys = Com_Subcategorie::all();
        $country = Com_Country::all();
        $divisions = Com_Division::all();
        $districts = Com_District::all();
        $upazilas = Com_Upazila::all();
        // dd($upazilas);

        return view('content.create', compact('categorys','subcategorys','divisions','districts','upazilas','country'));
    }

    public function store(Request $request)
    {
        Bn_Content::create($request->all());
        session()->flash('msg', 'Content created successfully!');
        return redirect('content');
    }


    public function show(Bn_Content $bn_Content)
    {
        //
    }

    
    public function edit(Bn_Content $bn_Content, $content_id)
    {
        $contents= Bn_Content::find($content_id);
        $cats= Com_Categorie::get();
        $subcats= Com_Subcategorie::get();
        $countries= Com_Country::get();
        $divisions= Com_Division::get();
        $districts= Com_District::get();
        $upazilas=Com_Upazila::get();
        // dd($contents);
        return view('content.edit', compact('contents','cats','subcats','countries','divisions', 'districts', 'upazilas'));
    }

    public function update(Request $request, Bn_Content $bn_Content, $content_id)
    {
        $contents=Bn_Content::where('content_id','=',$content_id)->first();
        $contents->update($request->all());
        session()->flash('msg', 'Contents updated successfully!');
        return redirect('content');
    }

    //Status function
    public function status(Bn_Content $bn_Content)
    {
        // dd($com_Categorie->status==1);
        if($bn_Content->status == 1)
        {
            $bn_Content->update(['status'=>0]);
        }
        
        else
        {
            $bn_Content->update(['status'=>1]);
        }

        return redirect()->back()->with('status updated');
    }

    //Status function
    public function standout(Bn_Content $bn_Content)
    {
        // dd($com_Categorie->status==1);
        if($bn_Content->standout_tag == 1)
        {
            $bn_Content->update(['standout_tag'=>0]);
        }
        
        else
        {
            $bn_Content->update(['standout_tag'=>1]);
        }

        return redirect()->back()->with('status updated');
    }

    //Recent-status function
    public function recentstatus(Bn_Content $bn_Content)
    {
        // dd($com_Categorie->status==1);
        if($bn_Content->recent_status == 1)
        {
            $bn_Content->update(['recent_status'=>0]);
        }
        
        else
        {
            $bn_Content->update(['recent_status'=>1]);
        }

        return redirect()->back()->with('Recent Status Updated');
    }

    //Instant artical function
    public function instantarticle(Bn_Content $bn_Content)
    {
        // dd($com_Categorie->status==1);
        if($bn_Content->instant_article == 1)
        {
            $bn_Content->update(['instant_article'=>0]);
        }
        
        else
        {
            $bn_Content->update(['instant_article'=>1]);
        }

        return redirect()->back()->with('Instant Article Status Updated');
    }

    //Is special function
    public function isspecial(Bn_Content $bn_Content)
    {
        // dd($com_Categorie->status==1);
        if($bn_Content->is_special == 1)
        {
            $bn_Content->update(['is_special'=>0]);
        }
        
        else
        {
            $bn_Content->update(['is_special'=>1]);
        }

        return redirect()->back()->with('Instant Article Status Updated');
    }

    //Show Image function
    public function showimage(Bn_Content $bn_Content)
    {
        // dd($com_Categorie->status==1);
        if($bn_Content->show_image == 1)
        {
            $bn_Content->update(['show_image'=>0]);
        }
        
        else
        {
            $bn_Content->update(['show_image'=>1]);
        }

        return redirect()->back()->with('Instant Article Status Updated');
    }

    //Is special function
    public function evergreen(Bn_Content $bn_Content)
    {
        // dd($com_Categorie->status==1);
        if($bn_Content->is_evergreen == 1)
        {
            $bn_Content->update(['is_evergreen'=>0]);
        }
        
        else
        {
            $bn_Content->update(['is_evergreen'=>1]);
        }

        return redirect()->back()->with('Instant Article Status Updated');
    }

    public function destroy(Bn_Content $bn_Content)
    {
        //
    }
}
