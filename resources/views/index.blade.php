@extends('layouts.app')

@section('content')
<main class="container-fluid  sm:mt-10">
    <div class="relative overlay-a  ">
        <ul id="slide" class="list-none">
            <li class="vh50-a relative ss">
                <div class="h-full bg1-a">

                </div>
                 <div class="absolute top-0 left-0 h-full w-full flex z-20 ">
                    <div class="w-full  flex flex-col self-center">
                     <h2 class="text-4xl font-bold text-white  w-full text-center">fghjkl</h2>
                    <p class="text-lg mt-8 text-white  text-center" >gvcbbhgh</p>
                    </div>
                 </div>
            </li>
            <li class="vh50-a relative hidden ss">
                <div class="h-full bg2-a">

                </div>
                 <div class="absolute top-0 left-0 h-full w-full flex z-20 ">
                    <div class="w-full  flex flex-col self-center">
                     <h2 class="text-4xl font-bold text-white  w-full text-center">fghjkl</h2>
                    <p class="text-lg mt-8 text-white  text-center" >gvcbbhgh</p>
                    </div>
                 </div>
            </li>
            <li class="vh50-a relative hidden">
                <div class="h-full bg3-a">

                </div>
                 <div class="absolute top-0 left-0 h-full w-full flex  z-20">
                    <div class="w-full  flex flex-col self-center">
                     <h2 class="text-4xl font-bold text-white  w-full text-center">fghjkl</h2>
                    <p class="text-lg mt-8 text-white  text-center" >gvcbbhgh</p>
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
            <span class=" bg-green-400 bg-opacity-50 py-6 px-0.5 rounded-3xl" onclick="prev()">
                <ion-icon class="text-3xl text-white" name="chevron-back"></ion-icon>
            </span>
            <span class=" bg-green-400 bg-opacity-50 py-6 px-0.5 rounded-3xl" onclick="next()">
                <ion-icon class="text-3xl text-white"  name="chevron-forward"></ion-icon>
            </span>
        </div>
          </div>
        </div>
    </div>
</main>
@endsection
