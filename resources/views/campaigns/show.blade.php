@extends('layouts.app')



@section('content')
    <div class="pt-32">
        <h2 class="main-title-a ">{{$campaign->title}}</h2>
       

        <div class="all container  gap-4 ">
            <p class="text-right py-2 px-6 leading-6">{{$campaign->description}}</p>

            <div class="object-cover img-50va-a w-full mb-20  " >
              <img class="  object-cover img-50va-a w-full  " src="/img/{{$campaign->imgurl}}" alt="photo">
            </div>
            <div class=" rounded-2xl h-full w-full     mb-7 ">
                
                <div class="py-2 px-6 text-right">
                    <span class="text-green-600 ">
                        {{$campaign->status}}
                    </span>
                    
                </div>
                <div class="w-full  py-2 px-6">
                    <hr>
              </div>
                <div class="flex justify-between py-2 px-6 font-semibold md:text-xl">
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
                <div class="w-full ">
                    <h1 class="text-2xl font-semibold py-8 px-6 text-center " >{{$campaign->title}}</h1>
    
                    <div class="flex justify-between text-right text-gray-400 py-2 px-6 font-semibold" >
                   
                    <span>
                        {{$campaign->startdate}} الانتهاء
                    </span>  
                    <span>
                       {{$campaign->enddate}} البدء
                    </span>
                    </div>
                   
                </div>
                
    
            </div>
        
         
        </div>
    </div>
@endsection