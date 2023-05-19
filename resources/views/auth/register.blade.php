@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 pt-32 mb-16">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ ('Register') }}
                </header>

                <form class="w-full px-6 sm:px-10" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap mt-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ ('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input form-input-a w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mt-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ ('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input form-input-a w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label for="gender" class="block text-gray-700 text-sm font-bold mt-2 sm:mb-4">
                            {{ ('Gender') }}:
                        </label>
                        <div class="flex mt-6">
                        <label for="male" class="block text-gray-700 text-sm font-bold mr-2 sm:mb-4">
                            {{ ('male') }}:
                        </label>
                        <input id="male" type="radio" value="male"
                            class="form-radio  @error('gender') border-red-500 @enderror" name="gender"
                            required autocomplete="gender">
                            
                            <label for="famale" class="block text-gray-700 text-sm font-bold mx-2 sm:mb-4">
                                {{ ('famale') }}:
                            </label>
                            <input id="famale" type="radio" value="famale"
                            class="form-radio @error('gender') border-red-500 @enderror" name="gender"
                            required autocomplete="gender">
                        </div>   
                        @error('gender')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

<div class="flex flex-wrap mt-3">
    <label for="birthday" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ ('Birthday') }}:
    </label>

    <input id="birthday" type="date" value="{{old('birthday')}}"
        class="form-input form-input-a w-full @error('birthday') border-red-500 @enderror" name="birthday"
        required autocomplete="birthday">

    @error('birthday')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>
<div class="flex flex-wrap mt-4">
    <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ ('Password') }}:
    </label>

    <input id="password" type="password"
        class="form-input form-input-a w-full @error('password') border-red-500 @enderror" name="password"
        required autocomplete="new-password">

    @error('password')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>

<div class="flex flex-wrap mt-4">
    <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ ('Confirm Password') }}:
    </label>

    <input id="password-confirm" type="password" class="form-input form-input-a w-full"
        name="password_confirmation" required autocomplete="new-password">
</div>

<div class="flex flex-wrap mt-4">
    <button type="submit"
        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-green-300 hover:bg-green-600 sm:py-4">
        {{ ('Register') }}
    </button>

    <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
        {{ ('Already have an account?') }}
        <a class="text-green-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
            {{ ('Login') }}
        </a>
    </p>
</div>
</form>

</section>
</div>
</div>
</main>
@endsection