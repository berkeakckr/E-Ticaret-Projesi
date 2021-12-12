<?php

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Kullanici extends Authenticatable
{

    use SoftDeletes;
    protected $table="kullanici"; //tablonun adını Kullanici olarak belirttik

    protected $fillable = [
        'adsoyad','email','sifre','aktivasyon_anahtari','aktif_mi'
    ];
//    protected $guarded=[]; // guarded değerini boş ayarladığımızda tüm sutun değerlerini veritabanına ekleyebiliriz
    protected $hidden = [
        'sifre','aktivasyon_anahtari',
    ];
    const CREATED_AT = "olusturulma_tarihi";
    const UPDATED_AT = "guncelleme_tarihi";
    const DELETED_AT = "silinme_tarihi";
}
