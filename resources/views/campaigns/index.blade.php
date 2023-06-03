@extends('layouts.app')
@section('content')
    <div class="py-32">
        <h1 class="main-title-a">الحملات
        </h1>
        
        @if(count($campaigns)>0)
        <div class="all container lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  gap-4 ">
            @foreach ($campaigns as $campaign)

            <div class=" rounded-2xl h-full w-full    shadow-xl mb-7 ">
                <div class="object-cover h-60   lg:60 md:h-72 w-full  " >
                    <img class=" rounded-t-2xl object-cover w-full h-60 lg:60 md:h-72  " src="{{$campaign->imgurl}}" alt="photo">
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
                <div class="w-full text-right">
                    <h1 class="text-2xl font-semibold py-2 px-6  " >{{$campaign->title}}</h1>
                    <p class="text-right py-2 px-6 leading-6">{{$campaign->description}}</p>
    
                    <div class="flex justify-between text-gray-400 py-2 px-6 font-semibold" >
                   
                    <span>
                        {{$campaign->startdate}} الانتهاء
                    </span>  
                    <span>
                       {{$campaign->enddate}} البدء
                    </span>
                    </div>
                   
                </div>
                <div class=" py-6 px-6 w-full text-right relative " >
                    <a class="text-gray-500 w-full pr-16 hover:text-green-500 font-medium  before-a" href="{{route('campaigns.show',['campaign' => $campaign['id']])}}">عرض التفاصيل </a>
                </div>
    
            </div>
        
            @endforeach
        </div>
        @else
            <p class="text-center text-2xl mt-72 font-medium">لا يوجد حملات حاليا</p>
        @endif
        {{-- <div class="all container lg:flex lg:flex-row lg:flex-no-wrap gap-4 ">
        <div class=" rounded-2xl h-full w-full    shadow-xl mb-7 ">
            <div class="object-cover h-60   lg:60 md:h-72 w-full  " >
                <img class=" rounded-t-2xl object-cover w-full h-60 lg:60 md:h-72  " src="https://picsum.photos/id/13/300/300" alt="photo">
            </div>
            <div class="py-2 px-6 text-right">
                <span class="text-green-600 ">
                    نشط
                </span>
                
            </div>
            <div class="w-full  py-2 px-6">
                <hr>
          </div>
            <div class="flex justify-between py-2 px-6 font-semibold">
                <span >
                 الهدف: $20000   
                </span>
                <span>
                 المبلغ: $20000 
                </span>
                
            </div>
             <div class="w-full mt-2 py-2 px-6">
                  <hr>
            </div>
            <div class="w-full text-right">
                <h1 class="text-2xl font-semibold py-2 px-6  " >الحملة الاولى</h1>
                <p class="text-right py-2 px-6 leading-6">الااللالالاا لالاسيخه ارياريىبر ئكئختطحخ ئترتهطه بتهلثهلهطي طرمئهتط تهيكت لاهيتلاه لينلا هتلبيه تثحخصحضثني</p>

                <div class="flex justify-between text-gray-400 py-2 px-6 font-semibold" >
               
                <span>
                    24-06-01 الانتهاء
                </span>  
                <span>
                    22-06-01 البدء
                </span>
                </div>
               
            </div>
            <div class=" py-6 px-6 w-full text-right relative " >
                <a class="text-gray-500 w-full pr-16 hover:text-green-500 font-medium  before-a" href="">عرض التفاصيل </a>
            </div>

        </div>
        <div class=" rounded-2xl h-full w-full  shadow-xl mb-7 ">
            <div class="object-cover h-60 w-full  lg:60 md:h-72 " >
                <img class=" rounded-t-2xl object-cover w-full h-60  lg:60 md:h-72  " src="https://picsum.photos/id/13/300/300" alt="photo">
            </div>
            <div class="py-2 px-6 text-right">
                <span class="text-green-600 ">
                    نشط
                </span>
                
            </div>
            <div class="w-full  py-2 px-6">
                <hr>
          </div>
            <div class="flex justify-between py-2 px-6 font-semibold">
                <span >
                 الهدف: $20000   
                </span>
                <span>
                 المبلغ: $20000 
                </span>
                
            </div>
             <div class="w-full mt-2 py-2 px-6">
                  <hr>
            </div>
            <div class="w-full text-right">
                <h1 class="text-2xl font-semibold py-2 px-6  " >الحملة الاولى</h1>
                <p class="text-right py-2 px-6 leading-6">الااللالالاا لالاسيخه ارياريىبر ئكئختطحخ ئترتهطه بتهلثهلهطي طرمئهتط تهيكت لاهيتلاه لينلا هتلبيه تثحخصحضثني</p>

                <div class="flex justify-between text-gray-400 py-2 px-6 font-semibold" >
               
                <span>
                    24-06-01 الانتهاء
                </span>  
                <span>
                    22-06-01 البدء
                </span>
                </div>
               
            </div>
            <div class=" py-6 px-6 w-full text-right relative " >
                <a class="text-gray-500 w-full pr-16 hover:text-green-500 font-medium  before-a" href="">عرض التفاصيل </a>
            </div>

        </div>
        <div class=" rounded-2xl h-full w-full  shadow-xl mb-7 ">
            <div class="object-cover h-60 w-full  lg:60 md:h-72 " >
                <img class=" rounded-t-2xl object-cover w-full h-60  lg:60 md:h-72 " src="https://picsum.photos/id/13/300/300" alt="photo">
            </div>
            <div class="py-2 px-6 text-right">
                <span class="text-green-600 ">
                    نشط
                </span>
                
            </div>
            <div class="w-full  py-2 px-6">
                <hr>
          </div>
            <div class="flex justify-between py-2 px-6 font-semibold">
                <span >
                 الهدف: $20000   
                </span>
                <span>
                 المبلغ: $20000 
                </span>
                
            </div>
             <div class="w-full mt-2 py-2 px-6">
                  <hr>
            </div>
            <div class="w-full text-right">
                <h1 class="text-2xl font-semibold py-2 px-6  " >الحملة الاولى</h1>
                <p class="text-right py-2 px-6 leading-6">الااللالالاا لالاسيخه ارياريىبر ئكئختطحخ ئترتهطه بتهلثهلهطي طرمئهتط تهيكت لاهيتلاه لينلا هتلبيه تثحخصحضثني</p>

                <div class="flex justify-between text-gray-400 py-2 px-6 font-semibold" >
               
                <span>
                    24-06-01 الانتهاء
                </span>  
                <span>
                    22-06-01 البدء
                </span>
                </div>
               
            </div>
            <div class=" py-6 px-6 w-full text-right relative " >
                <a class="text-gray-500 w-full pr-16 hover:text-green-500 font-medium  before-a" href="">عرض التفاصيل </a>
            </div>

        </div>
       </div> --}}



    </div>
@endsection