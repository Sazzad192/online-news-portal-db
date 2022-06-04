<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bn_Content_Position extends Model
{
    protected $fillable = [
        'position_id','position_name','position_slug','cat_id','subcat_id','teg','content_ids'
    ];

    public function categorys()
    {
        return $this->belongsTo(Com_Categorie::class, 'cat_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Com_Subcategorie::class,'subcat_id', 'subcat_id');
    }
}
