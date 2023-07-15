@extends('dashboard.index')

@section('content')


<div class="py-10 px-5  ">
 
        <h1 class="main-title-a">الواردات
        </h1>
        <a class="text-white bg-green-300 mt-5 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" href="{{ route('dashboard/paymentExport') }}">تحميل الملف</a>
        
        <div class="relative  shadow-md sm:rounded-lg overflow-x-auto overflow-y-hidden block mt-8">
            
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-x-auto ">
                <thead class="text-xs text-gray-700 uppercase bg-green-300 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="sticky">
                        <th scope="col" class="px-6 py-3">
                        Campagin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Amount
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pay as $user)
                  {{$pay}}
                          <tr class="sticky bg-white border-b-2 dark:bg-gray-900 dark:border-gray-700">
                            
                              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              {{$user->campaign->title}}
                              </th>
                          
                              
                              <td class="px-6 py-4">
                                  {{$user->amount}}

                              </td>
                              <td class="px-6 py-4">
                                  
                                        {{$user->status}}
                                  
                              </td>
                              
                          </tr>
              
                @endforeach
                </tbody>
            </table>
        </div>
        
</div>


@endsection