
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
                        @if (count($alt_kategoriler)>0)

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
                        @else
                        Bu kategoride başka alt kategori bulunmamaktadır.
                            @endif

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="products bg-content">

                    <div class="row">
                        @if (count($urunler)>0)
                            Sırala
                            <a href="#" class="btn btn-default">Çok Satanlar</a>
                            <a href="#" class="btn btn-default">Yeni Ürünler</a>
                            <hr>
                        @endif
                        @if (count($urunler)==0)
                            <div class="col-md-12">Bu kategoride henüz ürün bulunmamaktadır.</div>
                            @endif
                        @foreach($urunler as $urun )
                        <div class="col-md-3 product">
                            <a href="{{route('urun',$urun->slug)}}"><img src="http://via.placeholder.com/400x200?text=UrunResmi"></a>
                            <p><a href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a></p>
                            <p class="price">{{$urun->fiyati}} ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

