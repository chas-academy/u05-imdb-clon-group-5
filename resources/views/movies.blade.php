@extends('layout/layout')
@section('content')

    <div class="mt-8">


        <video style="height: 500px" class="w-full" controls src=" ../img/thedig.mp4"></video>



        {{-- top rated movies --}}
        <div class="xl:ml-5 ml-3 mb-5">
            <h1 class="font-bold font-inter text-4xl text-red-500 mt-4 sm:text-5xl">Top rated</h1>
            <h1 class="text-white text-4xl font-inter sm:text-5xl">
                <span class="font-bold uppercase">movies</span>
            </h1>
        </div>
        <x-img-carousel data="1" :movies="$movies" />


        {{-- featured movies --}}
        <div class="xl:ml-5 ml-3 mb-5">
            <h1 class="font-bold font-inter text-4xl text-red-500 mt-4 sm:text-5xl">Recommended</h1>
        </div>
        <x-img-carousel data="3" :movies="$movies" />




        @include('choosegenre')

    </div>


@endsection
