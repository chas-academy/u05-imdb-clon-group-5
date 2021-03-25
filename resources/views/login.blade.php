
@extends('layout/layout') 
@section('content')


<h4 class="text-center mt-20 text-white font-inter text-5xl">Login</h4>
<form class="text-white m-auto" action="{{ route('check') }}" method="post">
@if(Session::get('fail'))
    <div class="">
        {{ Session::get('fail') }}
@endif
@csrf
    <div class="text-center mt-20">
        <h1 class="text-2xl mb-1">Email</h1>
        <input type="text" class="w-96 h-9 p-2 rounded-lg text-black" name="email" value="{{ old('email') }}" placeholder="Your Email">
        
    </div>
    <div class="text-center text-red-500">
        <span>@error('email'){{ $message }} @enderror</span>
    </div>
    
    <div class="text-center mt-5">
        <h1 class="text-2xl mb-1">Password</h1>
        <input type="password" class="w-96 h-9 p-2 rounded-lg text-black" name="password" placeholder="********">
       
    </div>
    <div class="text-center text-red-500">
        <span>@error('password'){{ $message }} @enderror</span>
    </div>
   
    <div class="text-center mt-4">
        <button type="submit">Sign In</button>
    </div>
 

 
</form>
<div class="text-center mt-2">
<a class="text-white text-center" href="{{ route('register') }}">Create Account</a>
</div>


 @endsection