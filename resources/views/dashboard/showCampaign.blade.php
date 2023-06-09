@extends('dashboard.index')

@section('content')
  <!-- delete -->
  <a href=""></a>
 @if(session()->has('message'))
 <div class="bg-red-700 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-red-700 uppercase px-2 py-1 text-xs font-bold mr-3">new</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}
    </span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
 @endif
 {{-- update  --}}
 @if(session()->has('message1'))
 <div class="bg-green-500 text-center py-4 lg:px-4">
    <div class="p-2 bg-green-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">new</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message1')}}
    </span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
 @endif
      <div class="py-10 px-5">
          <h1 class="main-title-a">الحملات
          </h1>
         
          
          @if(count($campaigns)>0)
          <div>
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
                       المبلغ: ${{$campaign->donation}} 
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
                        <div class=" py-6 px-6 w-full text-right flex items-center justify-between" >                        
                        <form action="{{ route('campaigns.destroy', $campaign->slug) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="px-5 py-4 font-semibold hover:text-red-400" type="submit">حذف الحملة </button>
                        </form>
                        <a class="px-5 py-4 font-semibold hover:text-green-400" href="/dashboard/edit/{{$campaign->slug}}">التعديل على الحملة</a>

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