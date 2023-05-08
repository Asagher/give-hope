@extends('layouts.app')

@section('content')
<main class="container-fluid  sm:mt-10">
    
    
            

    <div class="relative  ">
        <ul id="slide" class="list-none">
            <li class="vh50-a relative ss">
                
                <img class="object-cover  h-full" src="{{url("img/1.png")}}" alt="">
                 <div class="absolute top-0 left-0 h-full w-full flex ">
                     <h2 class="text-4xl font-bold text-white my-auto w-full text-center">fghjkl <br> 
                        <p class="text-lg mt-8" >g hgh</p></h2>
                 </div>
            </li>
            <li class="vh50-a relative hidden ss">
                <img class="object-coverw h-full" src="{{url("img/2.png")}}" alt="">
                 <div class="absolute top-0 left-0 h-full w-full flex ">
                     <h2 class="text-4xl font-bold text-white my-auto w-full text-center">fghjkl <br> 
                        <p class="text-lg mt-8" >g hgh</p></h2>
                 </div>
            </li>
            <li class="vh50-a relative hidden">
                <img class="object-cover h-full" src="{{url("img/3.png")}}" alt="">
                 <div class="absolute top-0 left-0 h-full w-full flex ">
                     <h2 class="text-4xl font-bold text-white my-auto w-full text-center">fghjkl <br> 
                        <p class="text-lg mt-8" >g hgh</p></h2>
                 </div>
            </li>
        </ul>
        <div >

        </div>
        <div class="absolute  center top-a flex">

             <button class="  bg-red-900 ">vf</button>

        </div>
        <div class="absolute h-full top-0 left-0 w-full">
            
           
          <div class=" h-full w-full flex justify-between  ">
            <button onclick="prev()">
                <ion-icon class="text-3xl text-gray-200" name="arrow-back-outline"></ion-icon>
            </button>
            <button onclick="next()">
                <ion-icon class="text-3xl text-gray-200"  name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
    </div>
</main>
@endsection
