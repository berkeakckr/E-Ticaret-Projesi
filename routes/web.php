<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnasayfaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'App\Http\Controllers\AnasayfaController@index')->name('anasayfa');
Route::get('/', [AnasayfaController::class,'index'])->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');
Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');
Route::view('/kategori','kategori' );
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
