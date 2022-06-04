<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com_Upazila extends Model
{
    protected $fillable = [
        'upazila_id','division_id','district_id','upazila_name','upazila_name_bn','upazila_slug','upazila_title','meta_description','position'
    ];

    public function divisions()
    {
        return $this->belongsTo(Com_Division::class, 'division_id');
    }
    public function districts()
    {
        return $this->belongsTo(Com_District::class, 'district_id', 'district_id');
    }
}
