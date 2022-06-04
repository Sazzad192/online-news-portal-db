<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com_Subcategories extends Model
{
  
    protected $fillable = [
        'subcat_id','cat_id','subcat_name','subcat_name_bn','subcat_title','subcat_slug','subcat_meta_keyword','subcat_meta_description','img_icon_path','img_menu_path','img_cover_home_path','img_cover_inner_path','status','deletable'
    ];

    public function category()
    {
        return $this->belongsTo(Com_Categorie::class, 'cat_id');
    }
}