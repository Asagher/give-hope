@extends('layouts.app')

@section('content')
<main class="container-fluid  sm:mt-10">
    <div class="relative overlay-a  ">
        <ul  class="list-none ">
            @foreach ($user1 as $user)

            <li class="vh50-a relative slide">

                <div class="h-full bg1-a ">
                </div>
                 <div class="absolute top-0 left-0 h-full w-full flex z-20 ">
                    <div class="w-full  flex flex-col self-center">

                     <h2 class="text-4xl font-bold text-white  w-full text-center">{{$user->title}}</h2>
                    <p class="text-lg mt-8 text-white  text-center" >{{$user->description}}</p>

                    </div>
                 </div>

            </li>
            @endforeach
           
            
        </ul>
        <div >

        </div>
        <div class="absolute z-40 items-end  justify-center  top-0 left-1/4 flex w-1/2 h-full ">
            <div class="flex items-center justify-center text-center">
                <a class=" mb-32 pt-3  border-none outline-none w-24 h-12 bg-green-400 rounded-xl text-white " href="{{route('campaigns.index')}}">تبرع الان</a>
            </div>
        </div>
        <div class="absolute z-20 h-full top-0 left-0 w-full">
            
           
          <div class=" h-full w-full  flex justify-between  ">
            <div class="h-full w-full items-center  flex justify-between">
            <span class=" bg-green-400 bg-opacity-50 py-6 px-0.5 rounded-3xl" onclick="moveSlide(-1)">
                <ion-icon class="text-3xl text-white" name="chevron-back"></ion-icon>
            </span>
            <span class=" bg-green-400 bg-opacity-50 py-6 px-0.5 rounded-3xl" onclick="moveSlide(1)">
                <ion-icon class="text-3xl text-white"  name="chevron-forward"></ion-icon>
            </span>
        </div>
          </div>
        </div>
    </div>
    <div class="counter0">
        <div class="counter container">
            <div class="container-a">
                <i class="fa fa-calendar-plus"></i>
                <span class="num" data-val="400">0</span>
                <span class="text">Meals</span>
            </div>
            <div class="container-a">
                <i class="fas fa-heartbeat"></i>
                <span class="num" data-val="350">0</span>
                <span class="text">Meals</span>
            </div>
            <div class="container-a">
                <i class="fas fa-handshake"></i>
                <span class="num" data-val="300">0</span>
                <span class="text">Meals</span>
            </div>
            <div class="container-a">
                <i class="fas fa-users"></i>
                <span class="num" data-val="299">0</span>
                <span class="text">Meals</span>
            </div>
        </div>
    </div>
    <div class="new-a">
        <h1 class="main-title-a">اخر الأخبار</h1>
        <div class="news container grid lg:grid-cols-2 sm:grid-cols-1 sm:h-full text-right h-96">
            <div class="flex mb-5 mr-5 shadow-xl rounded-tl-lg rounded-bl-lg">
                <div class="news-info p-2">
                    <div class="px-6">
                    <span class="text-gray-400">يناير 18 ,2020</span>
                    <h2 class="text-xl font-semibold my-4">بناء مدرسة</h2>
                    <p class="leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quos impedit, commodi dignissimos ipsum eius alias obcaecati consequuntur quibusdam facere.</p>
                    </div>
                    <div class=" py-6 px-6 w-full text-right relative " >
                        <a class="text-gray-500 w-full pr-16 hover:text-green-500 font-medium  before-a" href="">عرض التفاصيل </a>
                    </div>
                </div>
                <div class="news-imge">
                    <img class="h-full w-full object-cover rounded-br-lg rounded-tr-lg" src="{{url('img/1.png')}}" alt="">
                </div>
            </div>
            <div class="flex mb-5 shadow-xl rounded-tl-lg rounded-bl-lg">
                <div class="news-info p-2">
                    <div class="px-6">
                    <span class="text-gray-400">يناير 18 ,2020</span>
                    <h2 class="text-xl font-semibold my-4">بناء مدرسة</h2>
                    <p class="leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quos impedit, commodi dignissimos ipsum eius alias obcaecati consequuntur quibusdam facere.</p>
                    </div>
                    <div class=" py-6 px-6 w-full text-right relative " >
                        <a class="text-gray-500 w-full pr-16 hover:text-green-500 font-medium  before-a" href="">عرض التفاصيل </a>
                    </div>
                </div>
                <div class="news-imge">
                    <img class="h-full w-full object-cover rounded-br-lg rounded-tr-lg" src="{{url('img/1.png')}}" alt="">
                </div>
            </div>
            </div>
        </div>
    <section class="faqs">
        <h2 class="main-title-a">الأسئلة الشائعة</h2>
        <div class="container faqs-container">
            <article class="faq">
                <div class="faq-icon"><i class="fa fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How do i know right courses for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias vitae iure voluptatum maxime enim obcaecati? Consequatur vel libero iste magnam, dignissimos accusamus aliquid, illum sit eius quae, corporis atque!</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq-icon"><i class="fa fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How do i know right courses for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias vitae iure voluptatum maxime enim obcaecati? Consequatur vel libero iste magnam, dignissimos accusamus aliquid, illum sit eius quae, corporis atque!</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq-icon"><i class="fa fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How do i know right courses for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias vitae iure voluptatum maxime enim obcaecati? Consequatur vel libero iste magnam, dignissimos accusamus aliquid, illum sit eius quae, corporis atque!</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq-icon"><i class="fa fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How do i know right courses for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias vitae iure voluptatum maxime enim obcaecati? Consequatur vel libero iste magnam, dignissimos accusamus aliquid, illum sit eius quae, corporis atque!</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq-icon"><i class="fa fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How do i know right courses for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias vitae iure voluptatum maxime enim obcaecati? Consequatur vel libero iste magnam, dignissimos accusamus aliquid, illum sit eius quae, corporis atque!</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq-icon"><i class="fa fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How do i know right courses for me?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias vitae iure voluptatum maxime enim obcaecati? Consequatur vel libero iste magnam, dignissimos accusamus aliquid, illum sit eius quae, corporis atque!</p>
                </div>
            </article>
        </div>
    </section>
</main>
@endsection
