@extends('layouts.app')

@section('content')
<main class="container-fluid  sm:mt-10">
    <div class="relative overlay-a  ">
        <ul  class="list-none ">
            <li class="vh50-a relative slide">
                <div class="h-full bg1-a ">
                </div>
                 <div class="absolute top-0 left-0 h-full w-full flex z-20 ">
                    <div class="w-full  flex flex-col self-center">
                     <h2 class="text-4xl font-bold text-white  w-full text-center">fghjkl</h2>
                    <p class="text-lg mt-8 text-white  text-center" >gvcbbhgh</p>
                    </div>
                 </div>
            </li>
            <li class="vh50-a relative slide">
                <div class="h-full bg2-a">

                </div>
                 <div class="absolute top-0 left-0 h-full w-full flex z-20 ">
                    <div class="w-full  flex flex-col self-center">
                     <h2 class="text-4xl font-bold text-white  w-full text-center">mcmvmvmcmvvcmjnsdfv</h2>
                    <p class="text-lg mt-8 text-white  text-center" >fdghgfhgfhfgghgffbgf bfgbfgbf</p>
                    </div>
                 </div>
            </li>
            <li class="vh50-a relative slide">
                <div class="h-full bg3-a">

                </div>
                 <div class="absolute top-0 left-0 h-full w-full flex  z-20">
                    <div class="w-full  flex flex-col self-center">
                     <h2 class="text-4xl font-bold text-white  w-full text-center">uyruioir,if</h2>
                    <p class="text-lg mt-8 text-white  text-center" >uyi78u</p>
                    </div>
                 </div>
            </li>
        </ul>
        <div >

        </div>
        <div class="absolute z-40 items-end  justify-center  top-0 left-1/4 flex w-1/2 h-full ">

             <button class=" mb-32  border-none outline-none w-24 h-12 bg-green-400 rounded-xl text-white ">vf</button>

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
                <i class="fas fa-utensils"></i>
                <span class="num" data-val="400">0</span>
                <span class="text">Meals</span>
            </div>
            <div class="container-a">
                <i class="fas fa-utensils"></i>
                <span class="num" data-val="350">0</span>
                <span class="text">Meals</span>
            </div>
            <div class="container-a">
                <i class="fas fa-utensils"></i>
                <span class="num" data-val="300">0</span>
                <span class="text">Meals</span>
            </div>
            <div class="container-a">
                <i class="fas fa-utensils"></i>
                <span class="num" data-val="299">0</span>
                <span class="text">Meals</span>
            </div>
        </div>
    </div>
</main>
@endsection
