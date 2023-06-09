@extends('layouts.app')



@section('content')
    <div class="pt-32">
        @if(session()->has('message'))
 <div class="bg-green-500 text-center py-4 lg:px-4">
    <div class="p-2 bg-green-400 items-center text-indigo-100 leading-none lg:rounded-full  inline-flex" role="alert">
      <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">new</span>
      <span class="flex font-semibold text-xl uppercase px-2 py-1 mr-3">{{Auth::user()->name}}</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}
    </span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
 @endif
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
                        
                        {{-- {{$campaign->status}} --}}
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
                     المبلغ:${{$campaign->donation}} 
                    </span>
                    
                </div>
                 <div class="w-full mt-2 py-2 px-6">
                      <hr>
                </div>
                <div class="w-full ">
    
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

        <div class="h-screen flex items-center justify-center">
            <form method="POST" action="{{ route('admin.storeDonation', $campaign->slug) }}">
                @csrf
                @method('PUT')
                <h2 class="main-title-a ">تبرع الأن</h2>
                <h1 class="text-2xl font-semibold -mt-14 pb-5 px-6 text-center " >{{$campaign->title}}</h1>
    
                <div class="flex-col flex justify-center sm:flex-row container">
                            <input type="number" class="p-3 form-control h-14 border-2 border-green-400" placeholder="40$" name="donation" value="{{ old('donation') }}">
                            <div class="flex ml-6 p-3 items-center justify-center border-2 border-green-400 h-14 donation-a">
                                <div>
                                    <label for="a" class="text-gray-700 text-sm font-bold mr-2 sm:mb-4">
                                        {{ ('10') }}
                                    </label>
                                    <input id="a" type="radio" value="10"
                                        class="mr-3 form-radio  @error('gender') border-red-500 @enderror" name="donation"
                                        autocomplete="gender">
                                </div>
                                <div>
                                    <label for="b" class=" text-gray-700 text-sm font-bold mx-2 sm:mb-4">
                                        {{ ('30') }}
                                    </label>
                                    <input id="b" type="radio" value="30"
                                    class="mr-3 form-radio @error('gender') border-red-500 @enderror" name="donation"
                                    autocomplete="gender">
                                </div>   
                                <div>
                                    <label for="c" class=" text-gray-700 text-sm font-bold mx-2 sm:mb-4">
                                        {{ ('40') }}
                                    </label>
                                    <input id="c" type="radio" value="40"
                                    class="mr-3 form-radio @error('gender') border-red-500 @enderror" name="donation"
                                    autocomplete="gender">
                                </div>    
                                
                                    <h2>: اختر تبرع</h2>
                            </div>
                </div>
                <div class="flex justify-center my-5"> 
                    <button type="submit" class="px-5 py-3 rounded-md font-semibold text-white bg-green-400 hover:bg-green-600">تحديث التبرع</button>
                </div>
            </form>
        </div>
        
    </div>
@endsection