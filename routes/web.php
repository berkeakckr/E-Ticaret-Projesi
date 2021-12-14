<?php

use App\Models\Kullanici;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\KullaniciController;



//Route::get('/', 'App\Http\Controllers\AnasayfaController@index')->name('anasayfa');
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
Route::post('/admin',[AdminController::class,'createPost'])->name('admin.create.post');
Route::get('/', [AnasayfaController::class,'index'])->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', 'App\Http\Controllers\KategoriController@index')->name('kategori');
Route::get('/urun/{slug_urunadi}', 'App\Http\Controllers\UrunController@index')->name('urun');
Route::get('/sepet', 'App\Http\Controllers\SepetController@index')->name('sepet');
Route::get('/odeme', 'App\Http\Controllers\OdemeController@index')->name('odeme');
Route::get('/siparisler', 'App\Http\Controllers\SiparisController@index')->name('siparisler');
Route::get('/siparisler/{id}', 'App\Http\Controllers\SiparisController@detay')->name('siparis');

Route::group(['prefix'=>'kullanici'], function(){
Route::get('/oturumac', 'App\Http\Controllers\KullaniciController@giris_form')->name('kullanici.oturumac'); //adres satırında açtığımız andaki tanımlamasına get diyoruz
Route::get('/kaydol', 'App\Http\Controllers\KullaniciController@kaydol_form')->name('kullanici.kaydol');
Route::post('/kaydol', 'App\Http\Controllers\KullaniciController@kaydol')->name('kullanici.kaydol');//kaydolma işleminde sonra verileri gönderdiğimiz anda yapmasını istediğimiz kodların olduğu root tanımını ifade eder
    Route::get('/aktiflestir/{anahtar}', 'App\Http\Controllers\KullaniciController@aktiflestir')->name('aktiflestir');

});
Route::get('test/mail',function(){
    $kullanici=Kullanici::find(1);
     return new App\Mail\KullaniciKayitMail($kullanici);
});

//Route::view('/urun','urun' );
//Route::view('/sepet','sepet' );
/*
 Route::get('/merhaba', function () {
    return 'yarak';
});

Route::get('/api/v1/merhaba', function () {
    return (['mesaj'=>'merhaba']);
});


Route::get('/urun/{urunadi}/{id?}', function ($urunadi, $id=0) { //hata vermemesi için
    return "Ürün Adı: $urunadi $id";;
})->name('urun_detay');

Route::get('/kampanya', function () {
    return redirect()->route('urun_detay', ['urunadi'=>'elma','id'=>5]);
});

*/
