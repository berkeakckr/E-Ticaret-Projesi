<?php

namespace App\Http\Controllers;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Kategori;
use App\Models\UrunDetay;
use App\Models\Urun;
use Illuminate\Http\Request;

class AnasayfaController extends Controller{
 public function index() {
     //$kategoriler=Kategori::all();
     $kategoriler=Kategori::whereRaw('ust_id is null')->get();
     $products=Product::orderBy('created_at','DESC')->get();

     $alt_kategoriler =  Kategori::whereRaw('ust_id is not null')->get();



     $categories=Category::all();






//     $urunler_slider = Urun::select('urun.*')// urun tablosundaki tum kolonları çekmeye yarar *
//     ->join('urun_detay','urun_detay.urun_id','urun.id')
//         ->where('urun_detay.goster_slider',1)
//         ->orderBy('guncelleme_tarihi','desc')
//         ->take(4)->get();  //with urun detaya ait urunleride çekmeye yarar.
//
//     $urun_gunun_firsati=Urun::select('urun.*')// urun tablosundaki tum kolonları çekmeye yarar *
//     ->join('urun_detay','urun_detay.urun_id','urun.id')
//     ->where('urun_detay.goster_gunun_firsati',1)
//     ->orderBy('guncelleme_tarihi','desc')
//     ->first();//join bir modeli başka bir modele bağlayarak verilerin çekilmesini sağlar.
//
//     $urunler_one_cikan=Urun::select('urun.*')// urun tablosundaki tum kolonları çekmeye yarar *
//     ->join('urun_detay','urun_detay.urun_id','urun.id')
//         ->where('urun_detay.goster_one_cikan',1)
//         ->orderBy('guncelleme_tarihi','desc')
//         ->take(4)->get();
//
//     $urunler_cok_satan=Urun::select('urun.*')// urun tablosundaki tum kolonları çekmeye yarar *
//     ->join('urun_detay','urun_detay.urun_id','urun.id')
//         ->where('urun_detay.goster_cok_satan',1)
//         ->orderBy('guncelleme_tarihi','desc')
//         ->take(4)->get();
//
//     $urunler_indirimli=Urun::select('urun.*')// urun tablosundaki tum kolonları çekmeye yarar *
//     ->join('urun_detay','urun_detay.urun_id','urun.id')
//         ->where('urun_detay.goster_indirimli',1)
//         ->orderBy('guncelleme_tarihi','desc')
//         ->take(4)->get();


     return view('anasayfa',compact('kategoriler', 'categories','products'));
}

}

