<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AnasayfaController extends Controller{
 public function index() {
     $isim = 'Berke';
     $soyisim = 'Akçakır';
     $isimler = ['Berke','Sidar','Emrah','Mustafa'];
     $kullanicilar = [
         ['id'=>1 , 'kullanici_adi'=>'Berke'],
         ['id'=>2 , 'kullanici_adi'=>'Sidar'],
         ['id'=>3 , 'kullanici_adi'=>'Emrah'],
         ['id'=>4 , 'kullanici_adi'=>'Mustafa'],
     ];

    // return view('anasayfa',['isim'=>'Berke']);
     return view('anasayfa',compact('isim','soyisim','isimler','kullanicilar'));
     //return view('anasayfa')->with('isim','Berke');
     //return view('anasayfa')
         //->with(['isim'=>$isim,'soyisim'=>
             //$soyisim]);
}
}

