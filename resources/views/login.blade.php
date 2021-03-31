
@extends('layout/layout')
@section('content')
<section style="height: 60vh;">
    <div class="flex mt-20 max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
        <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image:url('https://images.unsplash.com/photo-1606660265514-358ebbadc80d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1575&q=80')"></div>

        <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-center text-gray-700 dark:text-white">IMDB-clone</h2>
            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

                <h1 class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">Login</h1>
                <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
            </div>

            <form action="{{ route('check') }}" method="post">
                <div class="results">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::get('fail'))
                        <div class="alert alert-success">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>

                @csrf

                <div class="mt-4">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Email</label>
                    <input type="text" class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="email" value="{{ old('email') }}" placeholder="Your Email">
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-red-500 dark:text-red-400"><p class="text-sm text-gray-600 dark:text-gray-200">@error('email') {{ $message }} @enderror</p></span>
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" >Password</label>
                    <input type="password" class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="password" placeholder="******">
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-red-500 dark:text-red-400"><p class="text-sm text-gray-600 dark:text-gray-200">@error('password') {{ $message }} @enderror</p></span>
                    </div>
                </div>

                <div class="mt-8">
                    <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Sign In</button>
                </div>
            </form>

            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
                <a href="/register" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">or sign up</a>
                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
            </div>
        </div>
    </div>
</section>
@endsection

