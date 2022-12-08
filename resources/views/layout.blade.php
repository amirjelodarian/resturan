<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>جستوجو گر رستوران</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
      <!-- Bootstrap core CSS-->
      <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{ asset('/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{ asset('/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
      <!-- Select2 CSS-->
      <link href="{{ asset('/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="{{ asset('/css/osahan.css') }}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{ asset('/vendor/owl-carousel/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('/vendor/owl-carousel/owl.theme.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet"/>

      @yield('head')

   </head>



    <body>
	<!-- Start header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
        <div class="container">
           <a class="navbar-brand" href="index.html"><img alt="logo" src="{{ asset('/img/logo.png') }}"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">
                    <a class="nav-link" href="index.html">صفحه اصلی <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="offers.html"><i class="icofont-sale-discount"></i> رستوران ها <span class="badge badge-danger">جدید</span></a>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    درباره ما
                    </a>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    گالری
                    </a>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="Generic placeholder image" src="{{ asset('/img/user/accountlogo.png') }}" class="nav-osahan-pic rounded-pill"> حساب من
                    </a>
                        @unless(auth()->check())
                                    <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                                        <a class="dropdown-item" href="{{ route('login') }}"><i class="icofont-login"></i>ورود</a>
                                        <a class="dropdown-item" href="{{ route('register') }}"><i class="icofont-register"></i>ثبت نام</a>
                                    </div>
                        @endunless

                        @auth
                                    <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                                        <a class="dropdown-item" href="orders.html#orders"><i class="icofont-food-cart"></i> رزرو های من</a>
                                        <a class="dropdown-item" href="orders.html#addresses"><i class="icofont-location-pin"></i> اطلاعات من</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="icofont-heart"></i> خروج</a>
                                    </div>
                        @endauth
                 </li>
              </ul>
           </div>
        </div>
     </nav>
	<!-- End header -->
        @yield('content')
    <!-- Start Footer -->

        <footer class="pt-4 pb-4 text-center">
            <div class="container">
            <p class="mt-0 mb-0">حق کپی رایت محفوظ می باشد</p>
            <small class="mt-0 mb-0"> ساخته شده  <i class="fas fa-heart heart-icon text-danger"></i> توسط
            <a class="text-danger" target="_blank" href="https://www.instagram.com/iamgurdeeposahan/">امیر جلوداریان</a> - <a class="text-primary" target="_blank" href="https://askbootstrap.com/">محمد مهدی عبداللهی</a>
            </small>
            </div>
        </footer>
	<!-- End Footer -->




      <!-- jQuery -->
      <script src="{{ asset('/vendor/jquery/jquery-3.3.1.slim.min.js') }}"></script>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- Select2 JavaScript-->
      <script src="{{ asset('/js/select2.min.js') }}"></script>
      <!-- Owl Carousel -->
      <script src="{{ asset('/vendor/owl-carousel/owl.carousel.js') }}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{ asset('/js/custom.js') }}"></script>

        @yield('footer')

    </body>
</html>
