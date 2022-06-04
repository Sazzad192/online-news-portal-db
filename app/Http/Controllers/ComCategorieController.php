<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Com_Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\PseudoTypes\True_;
use PhpParser\Node\Stmt\Return_;

class ComCategorieController extends Controller
{
    
    
    public function index()
    {
        // dd();
        $category= Com_Categorie::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        
        // $category= Com_Categorie::all();
        return view('admin.category.create');
        
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'cat_name' => ' ',
            'cat_name_bn' => '',
            'cat_slug' => 'min:4',
            'cat_title' => '',
            'cat_meta_keyword' => '',
            'cat_meta_description' => '',
            'img_icon_path' => 'image|mimes:jpg|',
            'img_menu_path' => '',
            'img_cover_home_path' => '',
            'img_cover_inner_path' => ''
        ]);

        // Com_Categorie::create($request->all());

        $categorys = new Com_Categorie;
        $categorys->cat_name = $request->input('cat_name');
        $categorys->cat_name_bn = $request->input('cat_name_bn');
        $categorys->cat_slug = $request->input('cat_slug');
        $categorys->cat_title = $request->input('cat_title');
        $categorys->cat_meta_keyword = $request->input('cat_meta_keyword');
        $categorys->cat_meta_description = $request->input('cat_meta_description');

        $folder_year= Carbon::now()->format('Y');
        $folder_name= Carbon::now()->format('F');
        // $uploadPath = public_path().$folder_year. '/' .$folder_name;
        Storage::makeDirectory($folder_year. '/' .$folder_name, 0755);

        //img_icon_path
        if($request->file('img_icon_path'))
        {   
            $file= $request->file('img_icon_path');
            // dd($file);
            // $name_gen=hexdec(uniqid());
            $local_file_name= str_replace(' ','_', $file->getClientOriginalName());
            // $extentsion= $file->getClientOriginalExtension();
            // $filename = $local_file_name. '.' .$extentsion;
            // $up_location = 'images/categories/icon/';
            // $uploadPath = $folder_year. '/' .$folder_name.;
            $final_name = $folder_year. '/' .$folder_name. '/' .$local_file_name;
            $file->move(public_path('.$folder_year. '/' .$folder_name.'), $final_name);

            // $file->move( $folder_year, $folder_name, $local_file_name);
            $categorys->img_icon_path= $final_name;
        }
        
        // img_menu_path
        // if($request->file('img_menu_path'))
        // {   
        //     $file= $request->file('img_menu_path');
        //     $extentsion= $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extentsion;
        //     $up_location = 'images/categories/menu/';
        //     $final_name = $up_location . $filename;
        //     $file->move( $up_location, $filename);
        //     $categorys->img_menu_path= $final_name;
        // }

        // Cover_home
        if($request->file('img_cover_home_path'))
        {   
            $file= $request->file('img_cover_home_path');
            $extentsion= $file->getClientOriginalExtension();
            $filename = time().'.'.$extentsion;
            $up_location = 'images/categories/cover_home/';
            $final_name = $up_location . $filename;
            $file->move( $up_location, $filename);
            $categorys->img_cover_home_path= $final_name;
        }

        // Cover_inner
        if($request->file('img_cover_inner_path'))
        {   
            $file= $request->file('img_cover_inner_path');
            $extentsion= $file->getClientOriginalExtension();
            $filename = time().'.'.$extentsion;
            $up_location = 'images/categories/cover_inner/';
            $final_name = $up_location . $filename;
            $file->move( $up_location, $filename);
            $categorys->img_cover_inner_path= $final_name;
        }
        
        $categorys->show_at_apps = $request->input('show_at_apps');
        $categorys->show_tags = $request->input('show_tags');
        $categorys->status = $request->input('status');
        // $categorys->show_at_apps = $request->input('show_at_apps') == TRUE?'0':'1';
        // $categorys->show_tags = $request->input('show_tags') == TRUE?'0':'1';
        // $categorys->status = $request->input('status') == TRUE?'0':'1';
        $categorys->save();
        session()->flash('msg', 'Category created successfully!');
        return redirect('category');
    }

    public function edit(Com_Categorie $com_Categorie, $cat_id)
    {
        $comCategories = Com_Categorie::find($cat_id);
        // dd($comCategories);
        return view('admin.category.edit', compact('comCategories'));
    }

    public function update(Request $request, Com_Categorie $com_Categorie, $cat_id)
    {
        // dd('hello');
        // $request->validate([
        //     'cat_name' => '',
        //     'cat_name_bn' => '',
        //     'cat_slug' => 'min:4'
        // ]);

        
        // $comCategories->update($request->all());
        // session()->flash('msg', 'Categorie updated successfully!');
        // return redirect('ctegory');

        $com_Categorie=Com_Categorie::where('cat_id','=',$cat_id)->first();
        $com_Categorie->update([

            'cat_name' => $request->cat_name,
            'cat_name_bn' => $request->cat_name_bn,
            'cat_slug' => $request->cat_slug,
            'cat_title' => $request->cat_title,
            'cat_meta_keyword' => $request->cat_meta_keyword,
            'cat_meta_description' => $request->cat_meta_description,

            'img_icon_path' => $request->file('img_icon_path')->store('images/categories/icon/'),

            'img_menu_path' => $request -> file('img_menu_path')->store('images/categories/menu/'),

            // 'img_cover_home_path' => $request -> file('img_cover_home_path')->store('images/categories/cover_home/'),

            // 'img_cover_inner_path' => $request ->file('img_cover_inner_path')->store('images/categories/cover_inner/'),
        ]);  
        return redirect('category');
    }

    //Status function
    public function status(Com_Categorie $com_Categorie)
    {
        // dd($com_Categorie->status==1);
        if($com_Categorie->status==1)
        {
            $com_Categorie->update(['status'=>0]);
        }
        
        else
        {
            $com_Categorie->update(['status'=>1]);
        }

        return redirect()->back()->with('status updated');
    }

    //Show at apps function
    public function apps(Com_Categorie $com_Categorie)
    {
        //Show at apps
        // dd($com_Categorie->show_at_apps==1);
        if($com_Categorie->show_at_apps==1)
        {
            $com_Categorie->update(['show_at_apps'=>0]);
        }
        
        else
        {
            $com_Categorie->update(['show_at_apps'=>1]);
        }

        return redirect()->back()->with('show at apps updated');
    }

    //Show tags functions
    public function tags(Com_Categorie $com_Categorie)
    {
        dd('bangla');
        //Show Tags
        if($com_Categorie->show_tags==1)
        {
            $com_Categorie->update(['show_tags'=>0]);
        }
        
        else
        {
            $com_Categorie->update(['show_tags'=>1]);
        }

        return redirect()->back()->with('Tag show updated');
    }
    

    // public static function logs(Com_Categorie $com_Categorie)
    // {
    //     $file = Com_Categorie::get(path('storage') . '/logs/' . $logfile . '.log');
    //     $array = array_reverse(explode("\n", $file));
    //     unset($array[0]);
    //     return $array;
    // }

    // public static function write($type, $message)
    // {
    //     File::append(file('storage') . 'logs/' . date('Y-m-d') . '.log', $message);
    // }

    // public function append(Request $request)
    // {
    //     $path = $request->file('avatar')->store('avatars');
        
    //     return $path;
    // }

    public function destroy(Com_Categorie $com_Categorie)
    {
        //
    }
}
