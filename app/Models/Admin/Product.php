<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function get_altCategory(){
        return $this->hasOne('App\Models\Admin\AltCategory','id','alt_category_id');
    }
    use HasFactory;

}
