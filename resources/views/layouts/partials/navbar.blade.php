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
<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <nav class="menu">
            <ul class="main-nav nav navbar-nav ">

                <li> <a  href="{{route('anasayfa')}}">Anasayfa</a></li>
                @if(!empty($categories))
                         @foreach($categories as $category)
                    <li>

                        <a   id="sub_category_name" class="ml-4" href= {{route('kategori', $category->slug)}}>
                            <option  value="{{ $category->id }}">

                            {{$category->title}}
                        </a>
                    </li>
                        @endforeach
                        @endif



            </ul>


            </nav>        <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->

</nav>
<!-- /NAVIGATION -->

