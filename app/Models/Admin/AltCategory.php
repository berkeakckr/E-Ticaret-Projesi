<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltCategory extends Model
{
    use HasFactory;
    function get_ustCategory(){
        return $this->hasOne('App\Models\Admin\Category','id','ust_id');
    }
}
