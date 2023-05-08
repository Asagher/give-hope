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
            <div  class="xl:container rounded-md absolute z-10  left-4  right-4 bg-green-400 mx-auto sm:flex flex justify-between items-center sm:justify-between sm:items-center sm:py-9 py-4 px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <span class="text-3xl cursor-pointer sm:hidden  block">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </span>
                
                <nav id="main" class=" text-gray-600 text-md font-medium sm:text-base sm:flex sm:items-center absolute z-0 mt-4 sm:mt-0 py-3 sm:py-0 px-3 sm:px-0  bg-white sm:bg-green-400 sm:static width95-a sm:w-auto left-0  top-12 opacity-0 sm:opacity-100 ">
                    <li class="pl-2 list-none  pt-2 sm:pt-0 ">
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @guest
                           <li class="pl-2 list-none  pt-4 sm:pt-0 "> <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    <li class="pl-2 list-none  pt-4 sm:pt-0 ">
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                        @if (Route::has('register'))
                           <li class="pl-2 list-none  pt-4 sm:pt-0 "> <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
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
    </div>
   
</body>
</html>
