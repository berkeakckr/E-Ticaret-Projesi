<?php

namespace App\Http\Controllers;
use App\Models\Admin\AltCategory;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Urun;
class KategoriController extends Controller
{
    public function index($slug_kategoriadi){
       $kategori =  Category::where('slug',$slug_kategoriadi)->firstOrFail(); //Kayıt bulunamazsa 404 hatası vermeye yarar
        $alt_kategoriler =  AltCategory::where('ust_id',$kategori->id)->get();
       // $alt_kategoriler = $alt_category->get_ustCategory->title;
        $products=Product::where('category_id',$kategori->id)->get();


       // $urunler=$kategori->get_products;
        return view('kategori',compact('kategori','alt_kategoriler','products'));
    }
}
