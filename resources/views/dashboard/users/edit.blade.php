@extends('dashboard.index')

@section('content')


<div class="py-10 px-5">
        <h1 class="main-title-a">تعديل الموظف</h1>
        <form class="mx-7 text-right p-4 my-2 bg-white rounded-md shadow-lg"   action="{{ route('users.update', $userdata->id) }}" enctype="multipart/form-data" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">الاسم </label>
                <input type="text" id="name" name="name" value="{{$userdata->name}}" class=" text-right 
                form-input-a bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">البريد الالكتروني</label>
            <input type="email" id="email" name="email" value="{{$userdata->email}}" class="text-right 
            form-input-a bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6 flex justify-end items-center">
                <div>
                    <label for="a" class="text-gray-500 text-sm font-bold mr-2 sm:mb-4">
                        {{ ('تطوع') }}
                    </label>
                    <input id="a" type="radio" value="تطوع" class="mr-2 form-radio  @error('name_dep') @enderror" name="name_dep" autocomplete="gender">
                </div>
                <div>
                    <label for="b" class="text-gray-500 text-sm font-bold mr-2 sm:mb-4">
                        {{ ('إداري') }}
                    </label>
                    <input id="b" type="radio" value="إداري" class="mr-2 form-radio  @error('gender') @enderror" name="name_dep" autocomplete="gender">
                </div>
                
            </div> 
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">الراتب</label>
            <div class="flex justify-end">
                <input type="number" value="{{$employeedata->salary}}" id="total_salary" name="total_salary" class=" text-right
                form-input-a bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
        </div>
            
            <button type="submit" class="text-white bg-green-300 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
</div>

@endsection