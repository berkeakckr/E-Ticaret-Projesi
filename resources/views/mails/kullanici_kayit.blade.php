<h1>{{config('app.name')}}</h1>
<p1> Merhaba {{$kullanici->adsoyad}},kaydınız başarılı bir şekilde tamamlandı.</p1>
<p>Kaydınızı aktifleştirmek için <a href="{{config('app.url')}}/kullanici/aktiflestir({{$kullanici->aktivasyon_anahtari
}}">tıklayın</a> veya aşağıdaki bağlantıyı tarayıcınızda açın.  </p>
