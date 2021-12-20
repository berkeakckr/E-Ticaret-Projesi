<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory; // Bir Silme işlemi gerçekleştiğinde veritabanında silmeyecek,silinme tarihi alanını güncelleyerek bu bilgiyi oluşturur

    protected $table = "urun";
    protected $guarded=[]; // guarded değerini boş ayarladığımızda tüm sutun değerlerini veritabanına ekleyebiliriz

    //protected $fillable=['kategori_adi', 'slug'];
    const CREATED_AT = "olusturulma_tarihi";
    const UPDATED_AT = "guncelleme_tarihi";
    const DELETED_AT = "silinme_tarihi";
    public function kategoriler(){
        return $this->belongsToMany('App\Models\Kategori','kategori_urun');
    }
    public function detay(){
        return $this->hasOne('App\Models\UrunDetay');
    }
}
