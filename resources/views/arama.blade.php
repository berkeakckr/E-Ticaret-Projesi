@extends('layouts.master')
@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa') }}">Anasayfa</a></li>
        </ol>

        <div class="products bg-content">
            <div class="row">
              @foreach($urunler as $urun)
                  <div class="col-md-3 product">
                     @if(count($urunler)==0)
                         <div class="col-md-12 text-center">
                             Bir ürün bulunamadı.
                         </div>
                         @endif
                      <a href="{{route('urun',$urun->slug)}}">
                          <img src="http://via.placeholder.com/640x400?text=UrunResmi">
                      </a>
               @endforeach
            </div>

