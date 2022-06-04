<?php

namespace App\Http\Controllers;

use App\Com_Subcategorie;
use App\Com_Categorie;
use Illuminate\Http\Request;

class ComSubcategorieController extends Controller
{

    public function index()
    {
        $subcategory= Com_Subcategorie::all();
        return view('admin.sub_category.index', compact('subcategory'));
    }

    
    public function create()
    {
        $category=Com_Categorie::all();
        return view('admin.sub_category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'subcat_name' => ' ',
            'subcat_name_bn' => '',
            'subcat_slug' => 'min:4',
            'subcat_title' => '',
            'subcat_meta_keyword' => '',
            'subcat_meta_description' => '',
            'img_icon_path' => '',
            'img_menu_path' => '',
            'img_cover_home_path' => '',
            'img_cover_inner_path' => ''
        ]);

        // Com_Categorie::create($request->all());

        $subcategorys = new Com_Subcategorie;
        $subcategorys->subcat_name = $request->input('subcat_name');
        $subcategorys->subcat_name_bn = $request->input('subcat_name_bn');
        $subcategorys->cat_id= $request->input('cat_id');
        $subcategorys->subcat_slug = $request->input('subcat_slug');
        $subcategorys->subcat_title = $request->input('subcat_title');
        $subcategorys->subcat_meta_keyword = $request->input('subcat_meta_keyword');
        $subcategorys->subcat_meta_description = $request->input('subcat_meta_description');
        // $subcategorys->status = $request->input('status') == TRUE?'0':'1';
        $subcategorys->save();

        session()->flash('msg', 'Category created successfully!');
        return redirect('subcat');
    }

    public function show(Com_Subcategorie $com_Subcategorie)
    {
        //
    }

    public function edit(Com_Subcategorie $com_Subcategorie, $subcat_id)
    {
        $subcategory = Com_Subcategorie::find($subcat_id);
        $cats= Com_Categorie::get();
        // dd($comCategories);
        return view('admin.sub_category.edit', compact('subcategory','cats'));
    }
    

    public function update(Request $request, Com_Subcategorie $com_Subcategorie, $subcat_id)
    {
        $subcategory=Com_Subcategorie::where('subcat_id','=',$subcat_id)->first();
        $subcategory->update($request->all());
        session()->flash('msg', 'Sub-categorie updated successfully!');
        return redirect('subcat');
    }

    //Status function
    public function status(Com_Subcategorie $com_Subcategorie)
    {
        // dd($com_Categorie->status==1);
        if($com_Subcategorie->status == 1)
        {
            $com_Subcategorie->update(['status'=>0]);
        }
        
        else
        {
            $com_Subcategorie->update(['status'=>1]);
        }

        return redirect()->back()->with('status updated');
    }

    public function destroy(Com_Subcategorie $com_Subcategorie)
    {
        //
    }
}