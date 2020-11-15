<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-fixed-top navbar-expand-md navbar-light bg-custom shadow-sm">
            <div class="container">
                <a class="navbar-brand" onclick="openNav()" href="/">
                    JAKARTA LAPTOP RENT
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <div id="mySidenav" class="sidenav navbar-expand-md navbar-light bg-white shadow-sm">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="#">About</a>
                                <a href="#">Services</a>
                                <a href="#">Clients</a>
                                <a href="#">Contact</a>
                            </div>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        <main class="py-0">
        <img class="img-responsive"src="https://i.imgur.com/sKZ95EQ.jpg" alt="header image" style="width:100%;background-color:#3a4664"/>
            <div class="jumbotron" style="background-color:#3a4664">
                <div class="header" style="background-color:#3a4664">
                    <h1 style="color:whitesmoke">Jakarta Laptop Rent</h1>
                    <p style="color:whitesmoke">Jakarta laptop rental is a company that provides laptop rentals for the Jakarta area, especially North Jakarta, East Jakarta, West Jakarta, South Jakarta, and Central Jakarta</p>
                    <p class="lead">
                    <a class="btn btn-custom btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>

<div class="jumbotron" style="background-color:whitesmoke">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> <a href="#"> <img class="pic-1" src="{{ asset('img/product/macbook.jpg') }}"> <img class="pic-2" src="{{ asset('img/product/macbook2.jpg') }}"> </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Macbook Pro 13 2020</a></a></a></h3> <span class="price">10th Gen Intel®Core™ i7</span><br><span class="price">13" 2560 x 1600 Retina Display</span><br><span class="price">32GB LPDDR3</span><br><span class="price">512GB PCIe SSD</span><br><span class="price">Up to 18.3 hours* 51Whr battery</span><br><span class="price">IDR 150 K / Day </span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> <a href="#"> <img class="pic-1" src="{{ asset('img/product/surface.jpg') }}"> <img class="pic-2" src="{{ asset('img/product/surface2.jpg') }}"> </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Microsoft Surface Pro 7</a></a></a></h3> <span class="price">10th Gen Intel®Core™ i7</span><br><span class="price">12" PixelSense™ Display</span><br><span class="price">16GB LPDDR4 RAM</span><br><span class="price">1TB PCIe SSD</span><br><span class="price">Up to 18.3 hours* 51Whr battery</span><br><span class="price">IDR 100 K / Day </span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> <a href="#"> <img class="pic-1" src="{{ asset('img/product/thinkpad.jpg') }}"> <img class="pic-2" src="{{ asset('img/product/thinkpad2.jpg') }}"> </a>

                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Thinkpad X1 Carbon Gen 7</a></a></a></h3> <span class="price">10th Gen Intel®Core™ i7</span><br><span class="price">14" 4K IPS Display</span><br><span class="price">16GB LPDDR3</span><br><span class="price">2TB PCIe SSD</span><br><span class="price">Up to 18.3 hours* 51Whr battery</span><br><span class="price">IDR 135K  / Day </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</main>        
</body>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "25vh";
  document.getElementById("main").style.marginLeft = "25vh";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</html>
