<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>Сайт хлебабулачных вырабаў</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/reset.css')}}">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="canonical" href="https://getbootstrap.su/docs/5.2/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body>



    <div class="blockcontent">
        <div class="head">
            <div class='blockmenu'>
                <div class="dollyhouse">
                    <div class="icon" target="_blank">
                        <a href="/title">
                            <i class="icon home"></i>
                        </a>
                    </div>
                </div>




                <div class="menushachka">
                    <ul class='navbar navbar-expand-md'>
                        <ul class="nav justify-content-left ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{asset('title')}}">Дамашняя</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{asset('gallery')}}">Галерэя</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{asset('college')}}">Пякарская школа</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{asset('clients')}}">Супрацоўніцтва</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link text-white' href="{{asset('home')}}">Рэдагаванне</a>
                            </li>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->


                                @guest
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
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
                            </div>
                        </ul>
                    </ul>


                </div>
            </div>

            <div class="phone">
                <div>Тэл.: 8029-xxx-xx-xx</div>
                <div>E-mail: hlebdoma@gmail.com</div>
            </div>
        </div>

        @yield('content') 

    </div>


    
        <div class="overfooter">
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-secondary">© 2022 Хлебны дом<br>Тэл.: 8029-xxx-xx-xx<br>E-mail: hlebdoma@gmail.com<br>РБ, ХХХХХХ, ХХХХХХХ вобл.,
        г. ХХХХХ, ул. ХХХХХХХХХ, Х</p>
                    <ul class="nav col-md-5 justify-content-end">
                        <li class="nav-item" id="theend"><a href="/title" class="nav-link px-2 text-secondary">Дамашняя</a></li>
                        <li class="nav-item" id="theend"><a href="/gallery" class="nav-link px-2 text-secondary">Галерэя</a></li>
                        <li class="nav-item" id="theend"><a href="/college" class="nav-link px-2 text-secondary">Пякарская школа</a></li>
                        <li class="nav-item" id="theend"><a href="/clients" class="nav-link px-2 text-secondary">Супрацоўніцтва</a></li>
                    </ul>
                </footer>
            </div>
        </div>    




</body>

</html>