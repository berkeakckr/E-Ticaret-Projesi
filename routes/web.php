<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AltCategoryController;
use Illuminate\Support\Facades\Route;

use App\Models\Kullanici;

//use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\KullaniciController;

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::group(['prefix'=>'yonetim'], function(){
//    Route::get('/',function(){
//      return 'Admin';
//    }); Route::get('/oturumac', 'App\Http\Controllers\Yonetim\KullaniciController@oturumac')->name('yonetim.oturumac');
//
//});
Route::get('/',[AnasayfaController::class,'index'])->name('anasayfa');
Route::get('/panel',[AdminController::class,'index'])->name('panel');
Route::get('/panel/giris',[AdminController::class,'index'])->name('panel.giris');
//PRODUCT
Route::get('/product/index',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create/post',[ProductController::class,'createPost'])->name('product.create.post');
Route::get('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::post('/product/update/{id}',[ProductController::class,'updatePost'])->name('product.update.post');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
//CATEGORY
Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create/post',[CategoryController::class,'createPost'])->name('category.create.post');
Route::get('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::post('/category/update/{id}',[CategoryController::class,'updatePost'])->name('category.update.post');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
//ALT_CATEGORY
Route::get('/altcategory/index',[AltCategoryController::class,'index'])->name('alt.category.index');
Route::get('/altcategory/create',[AltCategoryController::class,'create'])->name('alt.category.create');
Route::post('/altcategory/create/post',[AltCategoryController::class,'createPost'])->name('alt.category.create.post');
Route::get('/altcategory/update/{id}',[AltCategoryController::class,'update'])->name('alt.category.update');
Route::post('/altcategory/update/{id}',[AltCategoryController::class,'updatePost'])->name('alt.category.update.post');
Route::get('/altcategory/delete/{id}',[AltCategoryController::class,'delete'])->name('alt.category.delete');
//Route::get('/main',[AnasayfaController::class,'index2'])->name('anasayfa');
//Route::get('/main', [AnasayfaController::class,'index2']);


Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
Route::post('/admin',[AdminController::class,'createPost'])->name('admin.create.post');
//Route::get('/', [AnasayfaController::class,'index'])->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}', [KategoriController::class,'index'])->name('kategori');
Route::get('/urun/{slug_urunadi}', 'App\Http\Controllers\UrunController@index')->name('urun');

Route::post('/ara', 'App\Http\Controllers\UrunController@ara')->name('urun_ara');
Route::get('/ara', 'App\Http\Controllers\UrunController@ara')->name('urun_ara');
//SEPET
Route::group(['prefix'=>'sepet'], function(){
    Route::get('/',[SepetController::class,'index'])->name('sepet');
    Route::post('/ekle',[SepetController::class,'ekle'])->name('sepet.ekle');
    Route::delete('/kaldir/{rowId}',[SepetController::class,'kaldir'])->name('sepet.kaldir');
    Route::delete('/bosalt',[SepetController::class,'bosalt'])->name('sepet.bosalt');
    Route::patch('/guncelle/{rowId}',[SepetController::class,'guncelle'])->name('sepet.guncelle');
});
//Route::get('/sepet', 'App\Http\Controllers\SepetController@index')->name('sepet');
Route::get('/odeme', 'App\Http\Controllers\OdemeController@index')->name('odeme');
Route::get('/siparisler', 'App\Http\Controllers\SiparisController@index')->name('siparisler');
Route::get('/siparisler/{id}', 'App\Http\Controllers\SiparisController@detay')->name('siparis');


//Route::group(['prefix'=>'kullanici'], function(){
//    Route::get('/oturumac', 'App\Http\Controllers\KullaniciController@giris_form')->name('kullanici.oturumac'); //adres satırında açtığımız andaki tanımlamasına get diyoruz
//    Route::get('/kaydol', 'App\Http\Controllers\KullaniciController@kaydol_form')->name('kullanici.kaydol');
//    Route::post('/kaydol', 'App\Http\Controllers\KullaniciController@kaydol')->name('kullanici.kaydol');//kaydolma işleminde sonra verileri gönderdiğimiz anda yapmasını istediğimiz kodların olduğu root tanımını ifade eder
//    Route::get('/aktiflestir/{anahtar}', 'App\Http\Controllers\KullaniciController@aktiflestir')->name('aktiflestir');
//
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('/',[AnasayfaController::class,'index']);
//})->name('anasayfa');
