<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com_Division extends Model
{
    protected $primaryKey = 'division_id';
    protected $fillable=[
        'division_name','division_name_bn','division_slug','division_title','meta_description'
    ];
}
