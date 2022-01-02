<?php

namespace App\Http\Controllers;
use App\Models\Admin\Product;
use App\Models\Urun;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\UrunDetay;



class UrunController extends Controller
{
    public function index($slug_urunadi){
        $urun = Product::where('slug',$slug_urunadi)->firstOrFail();
        $alt_kategori = $urun->get_altCategory;
        $kategori=$alt_kategori->get_ustCategory;
        return view('urun',compact('urun','alt_kategori','kategori'));
    }
    public function ara(){
        $aranan = request()->input('aranan');
        $urunler = Product::where('urun_adi', 'like' , "%$aranan%")
            ->orWhere('aciklama','like',"%$aranan%")
            ->get();
        return view('arama',compact('urunler'));
    }
}

