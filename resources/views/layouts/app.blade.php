<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Give Hope') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ url('js/our.js') }}" defer></script>

    {{-- icon --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/our.css') }}" rel="stylesheet">
</head>
<body class="bg-white h-screen antialiased leading-none font-sans">
    <div id="app">
        <header >
            <div class="">
                <div class="container mb-4  mx-auto flex justify-center sm:justify-between items-center px-2 ">
                  <div class="">
                    <ul class="sm:flex justify-center  sm:items-center ">
                        <li class="pr-6 sm:my-0 my-2  sm:mx-0 mx-auto"><a href="#"> <i class="fa fa-phone"></i> +1 (454) 556-5656</a></li>
                        <li class=" sm:mx-0 mx-auto"><a href="#"> <i class="fa fa-envelope"></i>Yourmail@gmail.com</a></li>
                    </ul>
                   </div>
                  <div class="flex justify-between items-center hidden sm:inline py-6 px-2">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="px-6">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="pl-6">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
                </div>
            </div>
            <div  class="xl:container rounded-md absolute z-index-a  left-4  right-4 bg-green-400 mx-auto sm:flex flex justify-between items-center sm:justify-between sm:items-center sm:py-9 py-4 px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-2xl font-a  text-white no-underline">
                       GiveHope
                    </a>
                </div>
                <span class="text-3xl cursor-pointer sm:hidden  block">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </span>
                
                <nav id="main" class=" sm:text-white text-gray-600 text-md font-medium sm:text-base sm:flex-row flex flex-col items-end  absolute z-0 mt-4 sm:mt-0 py-3 sm:py-0 px-3 sm:px-0  bg-white sm:bg-green-400 sm:static width95-a sm:w-auto left-0  top-12 opacity-0 sm:opacity-100 font-ya-a">
                    <li class=" pr-5 list-none   pt-4 sm:pt-0 ">
                    <a class="no-underline hover:underline" href="{{ route('campaigns.index') }}">{{ __('الحملات') }}</a>
                    </li>
                    <li class="pr-5 list-none  pt-5 sm:pt-0 ">
                        <a class="no-underline hover:underline" href="{{ route('about') }}">{{ __('حول') }}</a>
                    </li>
                    <li class="pr-5 list-none  pt-5 sm:pt-0 ">
                        <a class="no-underline hover:underline" href="{{ route('contact') }}">{{ __('تواصل معنا') }}</a>
                    </li>
                    @guest
                    <li class="pr-5 list-none  pt-5 sm:pt-0 ">
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>
                        @if (Route::has('register'))
                            <li class="pr-5 list-none  pt-5 sm:pb-0 pb-3 sm:pt-0 ">
                                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('إنشاء حساب') }}</a>
                            </li>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                        class=" no-underline hover:underline"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </div>
        </header>
        @yield('content')
        <footer>
            <div class="container">
                <div class="box">
                    <h3>
                        <a href="{{ url('/') }}" class="no-underline text-black">
                             GiveHope
                        </a>
                    </h3>
                    <ul class="social">
                        <li>
                            <a href="#" class="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quod aperiam repellat blanditiis atque quos ab quae magnam hic quasi? Libero tempora voluptas possimus minus. Maxime eaque doloribus magnam mollitia.</p>
                </div>
                <div class="box">
                    <h3>
                        <a href="{{ url('/') }}" class="no-underline text-black">
                             services
                        </a>
                    </h3>
                    <ul class="links">
                        <li><a href="#">Important Link 1</a></li>
                        <li><a href="#">Important Link 2</a></li>
                        <li><a href="#">Important Link 3</a></li>
                        <li><a href="#">Important Link 4</a></li>
                        <li><a href="#">Important Link 5</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h3>
                        <a href="{{ url('/') }}" class="no-underline text-black">
                              contact as
                        </a>
                    </h3>
                    <div class="line">
                        <i class="fas fa-map-marked-alt fa-fw"></i>
                        <div class="info">
                            Syria , Aleppo
                        </div>
                    </div>
                    <div class="line">
                        <i class="fas fa-clock fa-fw"></i>
                        <div class="info">
                            Business Hours : From 10:00 To 15:00
                        </div>
                    </div>
                    <div class="line">
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <div class="info">
                            <span>+123456789</span>
                            <span>+234567890</span>
                        </div>
                    </div>
                </div>
                <div class="box footer-gallery">
                    <h3>
                        <a href="{{ url('/') }}" class="no-underline text-black">
                             top news
                        </a>
                    </h3>
                    <div class="flex">
                    <div>
                        <img src="{{url('img/1.png')}}" alt="">
                        <img src="{{url('img/2.png')}}" alt="">
                        
                    </div>
                    <div>
                        <img src="{{url('img/3.png')}}" alt="">
                        <img src="{{url('img/4.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{url('img/5.png')}}" alt="">
                        <img src="{{url('img/6.png')}}" alt="">
                    </div></div>
                </div>
            </div>
            <p class="copyright">Made With &lt;3 By Wesal Husien</p>
        </footer>
    </div>
</body>
</html>
