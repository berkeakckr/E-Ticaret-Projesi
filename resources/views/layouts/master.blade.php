@include('layouts.partials.head')
@include('layouts.partials.navbar')
@yield('content')
@include('layouts.partials.footer')

<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/slick.min.js')}}"></script>
<script src="{{asset('front/js/nouislider.min.js')}}"></script>
<script src="{{asset('front/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
