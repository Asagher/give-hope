@extends('layouts.app')



@section('content')
    <div class="pt-32">
        @if(session()->has('message'))
 <div class="bg-green-500 text-center py-4 lg:px-4">
    <div class="p-2 bg-green-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">new</span>
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

        {{-- <form method="POST" action="{{ route('campaigns.store') }}" enctype="multipart/form-data" class="bg-gray-400 p-7">
            @csrf
            <!-- Other input fields for campaign details -->
            <div class="form-group">
                <label for="donation">Donation</label>
                <input id="donation" type="number" class="form-control @error('donation') is-invalid @enderror" name="donation" required>
                @error('donation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button class="bg-white py-3 px-4" type="submit">send</button>
            <!-- Submit button -->
        </form> --}}
        <form method="POST" action="{{ route('admin.storeDonation', $campaign->slug) }}">
            @csrf
            @method('PUT')
        
            <div class="bg-red-500 p-5">
                <label for="donation">التبرع الجديد</label>
                <input type="number" class="form-control" name="donation" value="{{ old('donation') }}">
            </div>
        
            <button type="submit" class="px-4 py-2 bg-gray-600">تحديث التبرع</button>
        </form>
    </div>
@endsection