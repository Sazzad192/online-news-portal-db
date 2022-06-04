<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com_District extends Model
{
    protected $fillable = [
        'district_id','division_id','district_name','district_name_bn','district_slug','district_title','img_path','position','deletable'
    ];

    public function divisions()
    {
        return $this->belongsTo(Com_Division::class, 'division_id');
    }
}
