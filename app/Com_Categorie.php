<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com_Categorie extends Model
{
    protected $primaryKey = 'cat_id';

    protected $fillable = [
        'cat_id','cat_name','cat_name_bn','cat_slug','cat_title','cat_meta_keyword','cat_meta_description','cat_position','img_icon_path','img_menu_path','img_cover_home_path','img_cover_inner_path','status','show_at_apps','show_tags','deletables'];
}