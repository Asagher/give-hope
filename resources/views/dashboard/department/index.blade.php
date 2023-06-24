@extends('dashboard.index')

@section('content')

@if(session()->has('message2'))
 <div class="bg-pink-600 text-center py-4 lg:px-4">
    <div class="p-2 bg-pink-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-pink-600 uppercase px-2 py-1 text-xs font-bold mr-3">new</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message2')}}
    </span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
 @endif
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
<div class="py-10 px-5  ">
        <h1 class="main-title-a">الأقسام</h1>
        <div class="mb-8 relative  shadow-md sm:rounded-lg overflow-x-auto overflow-y-hidden block">
            
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-x-auto ">
                <thead class="text-xs text-gray-700 uppercase bg-green-300 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="sticky">
                        <th scope="col" class="px-6 py-3">
                        Department
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Action
                          </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($departments as $department)
                              <tr class="sticky bg-white border-b-2 dark:bg-gray-900 dark:border-gray-700">
                                  <td class="px-6 py-4">
                                      {{$department->name_department}}
                                  </td>
                                  <td class="px-6 py-4 ">
                                    {{-- <a href="/dashboard/users/{{$user->id}}/edit" class="ml-5 font-semibold text-green-600 hover:underline">تعديل</a> --}}
                                    <form class="inline ml-5 py-8" action="{{ route('department.destroy', $department->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="font-semibold text-red-600  hover:underline " type="submit">حذف</button>
                                    </form>
                                </td>
                               </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a class="text-white bg-green-300 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" href="./department/create">إضافة قسم</a>
</div>


@endsection