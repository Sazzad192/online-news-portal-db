<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class com_author extends Model
{
    protected $primaryKey='author_id';
    
    protected $fillable = [
        'author_type','author_name','author_name_bn','author_name_slug','author_initial','designation','designation_en','author_bio','author_bio_bn','facebook_url','twitter_url','linkedin_url','image_path','noindex','show_byline','deletable'
    ];
}