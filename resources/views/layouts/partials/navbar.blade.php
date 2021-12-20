
<nav class="navbar navbar-default">
    <div class="container" display="flex" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('anasayfa')}}">
                <img src="/img/BAKAL.jpg" width="210" height="210">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" action="{{route('urun_ara')}}" method="post">
                {{csrf_field() }} <!-- post metodunun çalışması için kullanılır-->
                <div class="input-group">
                    <input type="text" name="aranan" id="navbar-search" class="form-control" placeholder="Ara">
                    <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>

            </form>
            <ul class="nav navbar-nav navbar-right col-md-4" >
                <li><a href="#"><i class="fa fa-shopping-cart"></i> Sepet <span class="badge badge-theme">5</span></a></li>
               @guest <!-- oturum açmayan kullanıcıların görmesini istedğimiz alanlar için kullanılır -->
                <li><a href="">Oturum Aç</a></li>
                <li><a href="{{route('kullanici.kaydol')}}">Kaydol</a></li>
               @endguest


                   @auth
                 <!-- oturum açmış kullanıcıların görmesini istedğimiz alanlar için kullanılır -->
                <li class="dropdown">

                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Profil <span class="caret"></span></a>-->
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Profil </a>

                     <ul class="dropdown-menu">
                         <li><a href="#">Siparişlerim</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a href="#">Çıkış</a></li>
                     </ul>
                 </li>
                 @endauth

             </ul>
         </div>
     </div>
 </nav>
