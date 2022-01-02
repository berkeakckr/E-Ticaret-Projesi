@extends('layouts.master')
@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Eticaret</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body id="commerce">
<div class="container">
    <div class="bg-content">
        <h2>Sepet</h2>
        @if(count(Cart::content())>0)
        <table class="table table-bordererd table-hover">
            <tr>
                <th>Resim</th>
                <th>Ürün</th>
                <th>Adet Fiyatı</th>
                <th>Adet</th>
                <th>Tutar</th>

            </tr>
            @foreach(Cart::content() as $UrunCartItem)

            <tr>
                <td> <img src="{{ asset('public/uploads/'. $UrunCartItem->image) }}"></td>
                <td>
{{--                    <a href="{{ route('urun',$UrunCartItem->slug)}}">--}}
                        {{($UrunCartItem->name)}}
{{--                    </a>--}}
                    <form action="{{route('sepet.kaldir',$UrunCartItem->rowId)}}" method="post">
                       {{@csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger btn-xs" value="Sepetten Kaldır">
                    </form>
                </td>

                <td>{{($UrunCartItem->price)}}₺</td>

                <td>
                    <a href="#" class="btn btn-xs btn-default urun-adet-azalt" data-id="{{$UrunCartItem->rowId}}"
                       data-adet="{{$UrunCartItem->qty-1}}">-</a>
                    <span style="padding: 10px 20px">{{($UrunCartItem->qty)}}</span>
                    <a href="#" class="btn btn-xs btn-default urun-adet-artir" data-id="{{$UrunCartItem->rowId}}"
                       data-adet="{{$UrunCartItem->qty+1}}">+</a>
                </td>

                <td class="text-right">
                    {{$UrunCartItem->subtotal}}₺
                </td>
            </tr>
            @endforeach
            <tr>
                <th></th>
                <th></th>
                <th colspan="4" class="text-right">Toplam</th>
                <th class="text-right">{{Cart::subtotal()}}₺</th>
                <th></th>
            </tr>
        </table>
            <div>

                <form action="{{route('sepet.bosalt')}}" method="post">
                    {{@csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-info pull-left" value="Sepeti Boşalt">
                </form>
                <a href="#" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
            </div>
        @else
            <p>Sepetinizde Ürün Bulunmamaktadır.</p>
        @endif

    </div>
</div>

{{--<div class="container">--}}
{{--    <div class="bg-content">--}}
{{--        <h2>Ödeme</h2>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-5">--}}
{{--                <h3>Ödeme Bilgileri</h3>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="kartno">Kredi Kartı Numarası</label>--}}
{{--                    <input type="text" class="form-control kredikarti" id="kartno" name="cardnumber" style="font-size:20px;" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="cardexpiredatemonth">Son Kullanma Tarihi</label>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            Ay--}}
{{--                            <select name="cardexpiredatemonth" id="cardexpiredatemonth" class="form-control" required>--}}
{{--                                <option>1</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            Yıl--}}
{{--                            <select name="cardexpiredateyear" class="form-control" required>--}}
{{--                                <option>2017</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="cardcvv2">CVV (Güvenlik Numarası)</label>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <input type="text" class="form-control kredikarti_cvv" name="cardcvv2" id="cardcvv2" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <form>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="checkbox">--}}
{{--                            <label><input type="checkbox" checked> Ön bilgilendirme formunu okudum ve kabul ediyorum.</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="checkbox">--}}
{{--                            <label><input type="checkbox" checked> Mesafeli satış sözleşmesini okudum ve kabul ediyorum.</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <button type="submit" class="btn btn-success btn-lg">Ödeme Yap</button>--}}
{{--            </div>--}}
{{--            <div class="col-md-7">--}}
{{--                <h4>Ödenecek Tutar</h4>--}}
{{--                <span class="price">18.92 <small>TL</small></span>--}}

{{--                <h4>Kargo</h4>--}}
{{--                <span class="price">0 <small>TL</small></span>--}}

{{--                <h4>Teslimat Bilgileri</h4>--}}
{{--                <p>Teslimat Adresi </p>--}}
{{--                <a href="#">Değiştir</a>--}}

{{--                <h4>Kargo</h4>--}}
{{--                <p>Ücretsiz--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

{{--<div class="container">--}}
{{--    <div class="bg-content">--}}
{{--        <h2>Siparişler</h2>--}}
{{--        <p>Henüz siparişiniz yok</p>--}}
{{--        <table class="table table-bordererd table-hover">--}}
{{--            <tr>--}}
{{--                <th>Sipariş Kodu</th>--}}
{{--                <th>Sipariş Tarihi</th>--}}
{{--                <th>KDV</th>--}}
{{--                <th>Kargo</th>--}}
{{--                <th>Toplam Tutar</th>--}}
{{--                <th>Durum</th>--}}
{{--                <th>İşlem</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>SP-00123</td>--}}
{{--                <td>25.09.2017</td>--}}
{{--                <td>2.99</td>--}}
{{--                <td>0</td>--}}
{{--                <td>18.99</td>--}}
{{--                <td>--}}
{{--                    Sipariş alındı, <br> Onaylandı, <br> Kargoya verildi, <br> Bir sorun var. İletişime geçin!--}}
{{--                </td>--}}
{{--                <td><a href="#" class="btn btn-sm btn-success">Detay</a></td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="container">--}}
{{--    <div class="bg-content">--}}
{{--        <h2>Sipariş (SP-00123)</h2>--}}
{{--        <table class="table table-bordererd table-hover">--}}
{{--            <tr>--}}
{{--                <th colspan="2">Ürün</th>--}}
{{--                <th>Adet Fiyatı</th>--}}
{{--                <th>Adet</th>--}}
{{--                <th>Tutar</th>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <td> <img src="http://lorempixel.com/120/100/food/2"> Ürün adı</td>--}}
{{--                <td>18.99</td>--}}
{{--                <td>1</td>--}}
{{--                <td>18.99</td>--}}
{{--                <td>--}}
{{--                    Sipariş alındı, <br> Onaylandı, <br> Kargoya verildi, <br> Bir sorun var. İletişime geçin!--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th></th>--}}
{{--                <th></th>--}}
{{--                <th>Toplam Tutar (KDV Dahil)</th>--}}
{{--                <th>18.99</th>--}}
{{--                <th></th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th></th>--}}
{{--                <th></th>--}}
{{--                <th>Kargo</th>--}}
{{--                <th>Ücretsiz</th>--}}
{{--                <th></th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th></th>--}}
{{--                <th></th>--}}
{{--                <th>Sipariş Toplamı</th>--}}
{{--                <th>18.99</th>--}}
{{--                <th></th>--}}
{{--            </tr>--}}

{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
<script src="{{asset('resources/js/app.js')}}"></script>
<script>
    $('.kredikarti').mask('0000-0000-0000-0000', { placeholder: "____-____-____-____" });
    $('.kredikarti_cvv').mask('000', { placeholder: "___" });
    $('.telefon').mask('(000) 000-00-00', { placeholder: "(___) ___-__-__" });
</script>
</body>

</html>
    @endsection
