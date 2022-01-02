<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class SepetController extends Controller
{
    public function index(){
        return view('sepet');
    }
    public function ekle(){
        $urun=Product::find(request('id'));
        Cart::add($urun->slug,$urun->title,1,$urun->price,['slug'=>$urun->slug],['image'=>$urun->image]);
       // Cart::add(['id' => $urun->id, 'name' => $urun->title, 'qty' => 1, 'price' => $urun->price,'slug_degeri' => $urun->slug,'image' => $urun->image]);
        return redirect()->route('sepet')->with('mesaj','Ürün sepete eklendi.');
    }
    public function kaldir($rowid){
        Cart::remove($rowid);
        return redirect()->route('sepet')->with('mesaj','Ürün sepetten kaldırıldı.');
    }
    public function bosalt(){
        Cart::destroy();
        return redirect()->route('sepet')->with('mesaj','Sepetiniz boşaltıldı.');
    }
    public function guncelle($rowid){
        Cart::update($rowid,request('adet'));
        return response()->json(['success'=>true]);
    }
}
