
@extends('layouts.master')
@section('title',$kategori->kategori_adi)
@section('content')
    <div class="row container ml-5">
         <div class="col-md-2 ml-5">
             <ol class="breadcrumb">
                 <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
                 <li><a href="#">Kategori</a></li>
                 <li class="active">
                     {{$kategori->kategori_adi}}
                 </li>
                 <div class="mt-5 panel panel-default">
                     <div class="panel-heading">{{$kategori->kategori_adi}}</div>
                     <div class="panel-body">
                         <h3>Alt Kategoriler</h3>
                         <div class="list-group categories">

                             @foreach($alt_kategoriler as $alt_kategori)

                                 <a href="{{route('kategori',$alt_kategori->slug) }}"
                                    class="list-group-item">

                                     <i class="fa fa-arrow-circle-right"></i>

                                     {{$alt_kategori->kategori_adi}}
                                 </a>
                             @endforeach

                         </div>

                     </div>
                 </div>
             </ol>
         </div>
        <div class="row col-md-9">
            <div class="col-md-3">
                <div hidden class="panel panel-default">
                    <div class="panel-heading">{{$kategori->kategori_adi}}</div>
                    <div class="panel-body">
                        <h3>Alt Kategoriler</h3>
                        <div hidden class="list-group categories">

                            @foreach($alt_kategoriler as $alt_kategori)

                            <a href="{{route('kategori',$alt_kategori->slug) }}"
                               class="list-group-item">

                                <i class="fa fa-arrow-circle-right"></i>

                                {{$alt_kategori->kategori_adi}}
                            </a>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="products bg-content">
                    Sırala
                    <a href="#" class="btn btn-default">Çok Satanlar</a>
                    <a href="#" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

