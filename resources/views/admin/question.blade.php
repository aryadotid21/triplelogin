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
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div id="app">
        <span class="position-absolute trigger">
            <!-- hidden trigger to apply 'stuck' styles -->
        </span>
        <nav class="navbar navbar-expand-sm sticky-top navbar-light bg-custom ">
            <div class="container">
                <a class="navbar-brand" href="#" onclick="openNav()">Admin Panel</a>
                <a id="navbar-brand-mobile " class="navbar-brand" style="display:none" href="#">JLR</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

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
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-0" id="main">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a><img class="img-responsive" src="{{ asset('img/batman.png') }}" alt="Profile Image" style="width:60%;margin-left:7%;margin-top:7%" /></a>
                <hr style="border-top: 1px solid rgba(255, 255, 255, 0.5);">
                <a href="./dashboard"><i class="fa fa-fw fa-shopping-cart"></i> Order</a>
                <a href="./user"><i class="fa fa-fw fa-user"></i> User</a>
                <a href="./suggestion"><i class="fa fa-fw fa-coffee"></i> Suggestion</a>
            </div>
            <div class="container" onclick="closeNav()">
                <h1 style="text-align:center;padding-top:2%">Question List</h1>
                @include('flash-message')

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="text-align:center">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Date Time</th>
                            <th>Option</th>
                        </tr>
                        @foreach($user as $index => $data)
                        <tr>
                            <td style="text-align:center">{{$index +1}}</td>
                            <td>{{$data -> name}}</td>
                            <td>{{$data -> email}}</td>
                            <td>{{$data -> phone}}</td>
                            <td>{{$data -> subject}}</td>
                            <td>{{$data -> created_at}}</td>
                            <td>
                                <a href="./question/delete/{{$data -> id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </main>

</body>

</html>