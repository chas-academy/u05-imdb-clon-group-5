@extends('layout/layout') 

@section('content')



            <h4 class="text-center mt-20 text-white font-inter text-5xl">Register - Custom</h4>
            <form class="text-white m-auto h-96" action="{{ route('save') }}" method="post">

            @if (Session::get('success'))
                <div class="alert alert-success">
                {{ Session::get('success') }}

            @endif

            @if (Session::get('fail'))
                <div class="alert alert-success">
                {{ Session::get('fail') }}

            @endif

            @csrf
                <div class="text-center">
                    <h1 class="text-2xl mb-1">Name</h1>
                    <input type="text" class="w-96 h-9 p-2 rounded-lg text-black" name="name" value="{{ old('name') }}" placeholder="Your Name">
                </div>
                <span class="text-center">@error('name'){{ $message }} @enderror</span>
                <div class="text-center">
                    <h1 class="text-2xl mb-1">Email</h1>
                    <input type="text" class="w-96 h-9 p-2 rounded-lg text-black" name="email" value="{{ old('email') }}" placeholder="Your Email">
                </div>
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                <div class="text-center">
                    <h1 class="text-2xl mb-1">Password</h1>
                    <input type="password" class="w-96 h-9 p-2 rounded-lg text-black" name="password" placeholder="******">
                </div>
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                <div class="text-center mt-4">
                    <button type="submit" class="w-32 h-10 mt-4 bg-green-700 rounded-lg">Sign Up</button>
                </div>
                
                <div class="text-center mt-4">
                    <a href="{{ route('login') }}">Log In</a>
                </div>
              
            </form>

@endsection