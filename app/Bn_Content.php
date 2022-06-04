<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bn_Content extends Model
{
    protected $primaryKey= 'content_id';
    protected $fillable = [
        'content_type','cat_id','subcat_id','country_id','division_id','district_id','upozila_id','photo_ids','content_heading','content_sub_heading','reporting_area','author_slugs','custom_byname','seo_url','seo_title','img_bg_path','img_bg_caption','img_sm_path','img_sm_caption','content_details','content_brief','custom_brief','prev_content_ids','quatation','news_meta_keywords','video_type','sound_cloud_id','tags','place_tags','people_tags','timeline_tags','meta_details','standout_tag','recent_status','instant_article','status','has_video','is_special','show_image','deletable','show_time','instant_article_id','is_evergreen'
    ];

    

    public function categorys()
    {
        // return $this->hasMany('App\Com_Categorie');
        return $this->belongsTo(Com_Categorie::class, 'cat_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Com_Subcategorie::class,'subcat_id', 'subcat_id');
    }

    public function country()
    {
        return $this->belongsTo(Com_Country::class,'country_id', 'country_id');
    }

    public function divisions()
    {
        return $this->belongsTo(Com_Division::class, 'division_id');
    }
    public function districts()
    {
        return $this->belongsTo(Com_District::class, 'district_id', 'district_id');
    }

    public function upazilas()
    {
        return $this->belongsTo(Com_Upazila::class, 'upazila_id', 'upazila_id');
    }
}