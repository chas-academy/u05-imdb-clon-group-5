@extends('layout/layout')
@section('content')
    

    <div class="bg-midnight">
    <section class="flex mt-12 justify-center">
        <div class="m-4">
        <h1 class="text-white font-inter text-center text-3xl sm:text-5xl lg:text-7xl">
        Express Your Movie
        </h1>
        <h1 class="text-white font-poppins text-center text-3xl sm:text-5xl lg:text-7xl">Habits</h1>
        
        <img class="lg:m-auto md:w-auto" src="../img/Couch.svg">
        
    </div>
    </section>
    

        <div class="flex justify-center">
        <a href="../admin/login" class="w-4/5 text-sm  text-center bg-blue-600 uppercase  text-white font-bold rounded-full border shadow-lg py-4 px-20 hover:bg-blue-800 transition ease-in-out duration-500 sm:w-6/12 lg:text-2xl lg:w-96">
            login
        </a>
    </div>

    
    <div class="mt-5 mb-7 flex items-center justify-center">
        <a href="../admin/register" class="text-xs w-4/5 text-center bg-white uppercase  text-gray-600 font-bold rounded-full border shadow-lg py-2 px-20 hover:bg-blue-100 transition ease-in-out duration-500 sm:w-6/12 lg:text-xl lg:w-96">
        sign up
        </a>
        </div>
    </div>



@endsection


