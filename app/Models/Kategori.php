<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="kategori";
    protected $guarded=[];
    //protected $fillable=['kategori_adi', 'slug'];
    const CREATED_AT = "olusturulma_tarihi";
    const UPDATED_AT = "guncelleme_tarihi";
    const DELETED_AT = "silinme_tarihi";
    public function urunler(){
        return $this->belongsToMany('App\Models\Urun','kategori_urun');
    }
}
//App\Models\Kategori::create(['kategori_adi'=>'Test 2' , 'slug'=>'test 2']) çalışmadı

