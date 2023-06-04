@extends('layouts.app')
@section('content')

<div class="py-32">
    
<div>
    <h2 class="main-title-a ">إضافة حملة جديدة </h2>
</div>


<div class=" h-full container bg-green-400 text-right flex justify-center rounded-xl ">


    <form class="w-3/4 py-10" action="/campaigns" enctype="multipart/form-data" method="POST" >
        @csrf

        <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
            <div class="sm:col-span-2">
                <label for="name" class="block mb-2 text-right font-medium text-gray-900 dark:text-white">عنوان الحملة</label>
                <input type="text" name="title" id="name" class="text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  placeholder="أدخل اسم الحملة" required="">
            </div>
            
            <div class="w-full sm:col-start-2">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">الهدف</label>
                <input type="number" name="goalamount" id="price" class="bg-gray-50 text-right border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  placeholder="$299" required="">
            </div>
          
            
            <div class="sm:col-span-2">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">وصف عن الحملة</label>
                <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 text-right rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="اكتب وصف للحملة "></textarea>
            </div>
            <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">موعد البدء</label>
                <input type="date" name="startdate" id="item-weight" class="bg-gray-50 text-right border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
            </div> 
            <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">موعد الإنتهاء</label>
                <input type="date" name="enddate" id="item-weight" class="bg-gray-50 text-right border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"   required="">
            </div> 
            <div class="sm:col-span-2">
                
<div class="flex items-center justify-center w-full">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" name="image" type="file" class="hidden" />
    </label>
</div> 

             </div>
        </div>
        <div class="flex items-end justify-end space-x-4 text-right pt-6">
            <button type="submit" class="text-black cursor-pointer bg-gray-50 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-4 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                اضافة الحملة
            </button>
            
        </div>
    </form>


</div>
</div>
@endsection