<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <![endif]-->

</head>


<!-- HEADER -->
<header>

    <!-- /TOP HEADER -->
    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{route('anasayfa')}}" class="logo">
                            <img src="{{asset('front/img/BAKAL.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>

                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn" >

                        <!-- Cart -->
                        <div class="dropdown">
                            <div class="dropdown" style="display:flex">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-bag ">
                                        {{Cart::count()}}
                                    </i>
                                    <a href="{{route('sepet')}}"> Sepet</a>


                                </a>
                                <a class="dropdown-toggle"  data-toggle="dropdown" aria-expanded="true">
                                    <i class="bi bi-person-circle"></i>
                                    <a href="{{route('dashboard')}}"> Profil</a>
                                    @auth
                                        <a class="dropdown-toggle"  data-toggle="dropdown" aria-expanded="true">
                                            <i class="bi bi-person-circle"></i>
                                            <a href="{{route('anasayfa')}}"> Siparişlerim</a>

                                            <a class="dropdown-toggle"  data-toggle="dropdown" aria-expanded="true">
                                                <i class="bi bi-person-circle"></i>
                                                <a href="{{route('dashboard')}}"> Çıkış Yap</a>
                                        @endauth
                            @guest
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-bag "></i>
                                    <a href="{{route('login')}}"> Oturum Aç</a>

                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-bag "></i>
                                    <a href="{{route('register')}}"> Kaydol</a>

                                </a>
                                @endguest
                            </div>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{asset('front/img/product01.png')}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product02.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

