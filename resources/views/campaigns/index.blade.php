@extends('layouts.app')
@section('content')
    <div class="py-32">
        <h1 class="main-title-a">الحملات
        </h1>
        
        @if(count($campaigns)>0)
        <div class="all container lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  gap-4 ">
            @foreach ($campaigns as $campaign)

           
            <div class=" rounded-2xl h-full w-full flex flex-col justify-between  shadow-xl mb-7 ">
                <div class="object-cover h-60   lg:60 md:h-72 w-full  " >
                    <img class=" rounded-t-2xl object-cover w-full h-60 lg:60 md:h-72  " src="/img/{{$campaign->imgurl}}" alt="photo">
                </div>
                <div class="py-2 px-6 text-right">
                    <span class="text-green-600 ">
                        {{$campaign->status}}
                    </span>
                    
                </div>
                      <div class="w-full  py-2 px-6">
                          <hr>
                      </div>
                <div class="flex justify-between py-2 px-6 font-semibold">
                    <span >
                     الهدف: ${{$campaign->goalAmount}}   
                    </span>
                    <span>
                     المبلغ: ${{20000}} 
                    </span>
                    
                </div>
                 <div class="w-full mt-2 py-2 px-6">
                      <hr>
                </div>
                <div class="w-full text-right ">
                    <h1 class="text-2xl font-semibold py-2 px-6  " >{{$campaign->title}}</h1>        
                </div>
                <div class="w-full text-right h-24 ">
                  <p class="text-right py-2 px-6 leading-6">{{$campaign->description}}</p>
                </div>
                <div class="flex justify-end flex-col">
                  <div class="flex justify-between text-gray-400 py-2 px-6 font-semibold" >          
                      <span>
                          {{$campaign->startdate}} الانتهاء
                      </span>  
                      <span>
                         {{$campaign->enddate}} البدء
                      </span>
                      </div>
                      <div class=" py-6 px-6 w-full  text-right content-end relative" >
                       <a class="text-gray-500 w-full  hover:text-green-500 font-medium before-a pr-16 " href="/campaigns/{{$campaign->slug}}">عرض التفاصيل </a>
                      </div>
                </div>
                
            </div>
        
            @endforeach
        </div>
        @else
            <p class="text-center text-2xl mt-72 font-medium">لا يوجد حملات حاليا</p>
        @endif
       



    </div>
   
@endsection