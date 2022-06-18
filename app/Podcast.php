<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $primaryKey ='podcast_id';
    protected $fillable = [
        'cat_id','cloud_url', 'news_body', 'heading', 'cloud_id', 'news_header', 'news_img_path'
    ];

    public function categorys()
    {
        return $this->belongsTo(Com_Categorie::class, 'cat_id');
    }
}