<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com_Country extends Model
{
    protected $primaryKey = 'country_id';
    protected $fillable = [
        'country_name', 'country_name_bn', 'country_slug'];
}
