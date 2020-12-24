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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>



    <div id="app">
        <span class="position-absolute trigger">
            <!-- hidden trigger to apply 'stuck' styles -->
        </span>
        <nav class="navbar navbar-expand-sm sticky-top navbar-light bg-custom ">
            <div class="container">
                <a class="navbar-brand" style="color:#3A4664;" href="#" onclick="myFunction()">Jakarta Laptop</a>
                @include('flash-message')
                <a id="navbar-brand-mobile" class="navbar-brand" style="display:none" href="#">JLR</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="#product">Product</a>
                        </li>
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
                        <li class="nav-item">
                            <a class="nav-link" href="#order">Order</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            <img class="img-responsive" src="{{ asset('img/cover3.jpg') }}" alt="header image" style="width:100%;background-color:#3a4664" />
            <div class="jumbotron" style="background-color:#3a4664;padding-bottom:5%">
                <div class="header" style="background-color:#3a4664" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="color:whitesmoke">Jakarta Laptop Rent</h1>
                    <p style="color:whitesmoke">Jakarta laptop rental is a company that provides laptop rentals for the Jakarta area, especially North Jakarta, East Jakarta, West Jakarta, South Jakarta, and Central Jakarta</p>
                        @guest
                        @if (Route::has('login'))
                        <a class="btn btn-grad btn-lg" href="#product" role="button">Learn More</a>
                        @endif
                        @else
                        <a class="btn btn-grad btn-lg" href="#order" role="button">Order Now</a>
                        @endguest
                </div>
            </div>
            <div class="jumbotron" style="background-color:white;margin-bottom:2%;padding-top:7%;padding-bottom:7%" id="product">
                <h1 style="text-align:center;" data-aos="fade-up" data-aos-duration="1000">Our Product</h1>
                <p style="text-align:center;padding-bottom:2rem" data-aos="fade-up" data-aos-duration="1000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima fugiat libero ipsum veniam sit, magni cumque expedita voluptate porro, ad, labore sapiente. Quos animi unde adipisci! Numquam aspernatur facere distinctio?</p>
                <div class="row">
                    <div class="col-md-4 col-sm-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="700" data-aos-offset="0">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="#"> <img class="pic-1" src="{{ asset('img/product/macbook.jpg') }}"> <img class="pic-2" src="{{ asset('img/product/macbook2.jpg') }}"> </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Macbook Pro 13 2020</a></a></a></h3> <span class="price">10th Gen Intel®Core™ i7</span><br><span class="price">13" 2560 x 1600 Retina Display</span><br><span class="price">32GB LPDDR3</span><br><span class="price">512GB PCIe SSD</span><br><span class="price">Up to 18.3 hours* 51Whr battery</span><br><span class="price">IDR 150 K / Day </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="700" data-aos-offset="0">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="#"> <img class="pic-1" src="{{ asset('img/product/surface.jpg') }}"> <img class="pic-2" src="{{ asset('img/product/surface2.jpg') }}"> </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Microsoft Surface Pro 7</a></a></a></h3> <span class="price">10th Gen Intel®Core™ i7</span><br><span class="price">12" PixelSense™ Display</span><br><span class="price">16GB LPDDR4 RAM</span><br><span class="price">1TB PCIe SSD</span><br><span class="price">Up to 18.3 hours* 51Whr battery</span><br><span class="price">IDR 100 K / Day </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="700" data-aos-offset="0">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="#"> <img class="pic-1" src="{{ asset('img/product/thinkpad.jpg') }}"> <img class="pic-2" src="{{ asset('img/product/thinkpad2.jpg') }}"> </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Thinkpad X1 Carbon Gen 7</a></a></a></h3> <span class="price">10th Gen Intel®Core™ i7</span><br><span class="price">14" 4K IPS Display</span><br><span class="price">16GB LPDDR3</span><br><span class="price">2TB PCIe SSD</span><br><span class="price">Up to 18.3 hours* 51Whr battery</span><br><span class="price">IDR 135K / Day </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @guest
            @if (Route::has('login'))

            <div class="d-flex justify-content-center" style="padding-top:4rem;padding-bottom:4rem">
                <div class="jumbotron" style="background-color:white;max-width:800px;border-radius:25px" data-aos="fade-up" data-aos-duration="2500">
                    <h1 style="text-align:center">Got a Question?</h1>
                    <form method="POST" action="/question" id="question">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Name</label>
                                <input name="name" type="text" class="form-control" id="inputCity" value="">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Email</label>
                                <input name="email" type="email" class="form-control" id="inputState" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Phone Number</label>
                                <input name="phone" type="text" class="form-control" id="inputZip" value="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Subject</label>
                                <textarea name="subject" type="text" class="form-control" id="inputSubject" style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-grad btn-lg">Ask Us</button>
                        </div>
                </div>
            </div>
            </form>

            @endif
            @else
            <div class="d-flex justify-content-center" style="padding-top:4rem;padding-bottom:4rem">
                <div class="jumbotron" style="background-color:white;max-width:800px;border-radius:25px" data-aos="fade-up" data-aos-duration="2500">
                    <h1 style="text-align:center">Order Now</h1>
                    <form method="POST" action="/order" id="order">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Name</label>
                                <input name="name" type="text" class="form-control" id="inputCity" value="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Email</label>
                                <input name="email" type="email" class="form-control" id="inputState" value="{{ Auth::user()->email }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Phone Number</label>
                                <input name="phone" type="text" class="form-control" id="inputZip" value="{{ Auth::user()->phone }}" readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputState">City</label>
                                <select name="city" id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Central Jakarta</option>
                                    <option>East Jakarta</option>
                                    <option>North Jakarta</option>
                                    <option>South Jakarta</option>
                                    <option>West Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Zip Code</label>
                                <input name="zip" type="text" class="form-control" id="inputZip">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Full Address</label>
                                <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputState">Laptop</label>
                                <select id="laptop" name="laptop" onclick="calculate()" class="form-control">

                                    @foreach ($laptop->unique('name') as $laptops)
                                    @if ($laptops->status == "Not Ready")
                                    @continue
                                    @endif
                                    <option nama="{{$laptops->name}}" value="{{$laptops->price}}">{{$laptops->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="harga">Price For 1 Day</label>
                                <div style="display:none" id="greet"></div>
                                <input style="display:none" type="text" name="laptopname" id="namalaptop" value=""></input>
                                <input type="text" class="form-control" name="dayprice" id="harga" readonly="readonly" value=""></input>
                            </div>

                            <script>
                            function notEmpty() {
                                var e = document.getElementById("laptop");
                                var strUser = e.options[e.selectedIndex].value;
                                var strLaptop = e.options[e.selectedIndex].getAttribute('nama');
                                document.getElementById('greet').innerHTML = strUser;
                                document.getElementById('harga').value = strUser;
                                document.getElementById('namalaptop').value = strLaptop;
                            }
                            notEmpty()
                            document.getElementById("laptop").onchange = notEmpty;
                            </script>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="durasi">Duration (1.. 2.. 3..) Day</label>
                                <input name="duration" type="number" class="form-control" id="durasi" onkeyup="calculate()" placeholder="Duration..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="totprice">Total Price</label>
                                <input name="totprice" type="text" class="form-control" id="totprice" readonly>
                            </div>
                        </div>

                        <script type="text/javascript">
                        function calculate(price) {
                            var price = document.getElementById("harga").value;
                            var duration = document.getElementById("durasi").value;
                            var result = parseInt(price * duration);
                            document.getElementById("totprice").value = result;
                        }
                        </script>
                        <div class="form-group row">
                            <div class="form-group col-md-12">
                                <label for="example-date-input">Pickup Date</label>
                                <input name="pickupdate" class="form-control" type="date" value="" id="example-datetime-local-input">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-grad btn-lg">Order Now</button>
                </div>
            </div>
            </form>

            @endguest
            <div class="jumbotron" style="background-color:white;padding-top:4rem;padding-bottom:4rem" id="location">
                <h1 style="text-align:center;margin-bottom:2%;" data-aos="fade-up" data-aos-duration="2000">Find Us On Google Maps</h1>
                <div class="container-fluid" data-aos="fade-up" data-aos-duration="2000">
                    <div class="map-responsive">
                        <iframe width="600" height="450" frameborder="0" style="border-radius:20px" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJMVL-yvj1aS4R_r10UGTZU5w&key=AIzaSyBNX0f53ALAO7cT8zb3PiBrRtorxRGSsu0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>


            <div data-aos="fade-up" data-aos-duration="2000" class="jumbotron" style="text-align:center;padding-top:8rem;" id="contact">
                <h1>Contact Us!</h1>
                <p style="text-align:center">Swing by for a cup of coffee, or leave us a message</p>
                <a href="mailto:aryadotid21@gmail.com" class="fa fa-envelope"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="https://wa.me/+62895613367705" class="fa fa-whatsapp"></a>
            </div>

            <img class="img-responsive" src="{{ asset('img/footer.png') }}" alt="header image" style="width:100%;" />
            <div class="jumbotron" style="background-color:#3a4664;text-align:center;" id="contact">
                <h6 style="color:rgb(223, 223, 223);">&#169; M Arya Dyas & Zakiyyah N Oktaviani</h6>
                <h4 style="color:rgb(158, 158, 158)">SMKN 1 Cibinong</h4>
                <a href="#" class="fa fa-angle-up" style="margin-bottom: -20%;color:rgb(223, 223, 223);"></a>
                <a href="#" onclick="window.scrollTo(0, 0);" style="text-decoration:none;">
                    <h4 style="color:rgb(158, 158, 158)">Back To Top</h4>
                </a>
            </div>
        </main>
</body>

<script>
(new IntersectionObserver(function(e, o) {
    if (e[0].intersectionRatio > 0) {
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class', 'stuck');
    };
})).observe(document.querySelector('.trigger'));

AOS.init();
</script>

</html>