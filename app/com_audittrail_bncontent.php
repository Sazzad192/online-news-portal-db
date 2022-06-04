<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class com_audittrail_bncontent extends Model
{
    protected $fillable = [
        'audittrail_id','name','ip','action_type','action_datetime','path_name','query_details'
    ];
}
