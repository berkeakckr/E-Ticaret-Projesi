<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    use HasFactory;
    protected $table='sepet';
    protected $guarded=[];
    const CREATED_AT = "olusturulma_tarihi";
    const UPDATED_AT = "guncelleme_tarihi";
    const DELETED_AT = "silinme_tarihi";
}
