<!--
///////////////////////////////////////
//
// Jorge Pereda - 2021/03/10
//  * ...
//  * ...
//
///////////////////////////////////////
-->
@extends('layout/layout')
@section('content')





<!-- <a href="{{$page->video_url}}">
    Play
</a> -->

<div class="overflow-x-hidden relative m-auto bg-midnight">
    <div class="movie-info border-b border-gray-800">
        <div class="flex flex-wrap -mx-px overflow-hidden sm:-mx-1 md:-mx-1 lg:-mx-1 xl:-mx-1">
        </div>

        <!-- movie information -->
        <div class="bg-indigo-300">
            <img src="{{ $page->img }}" class="object-cover h-96 w-full">
        </div>
        <div class="grid gap-4 py-5">
            <div class="text-red-600 text-4xl mx-5 py-4">
                <h1>{{ $page->title }}</h1>
            </div>
            <div class="text-justify normal-case mx-10 text-xl text-gray-100">
                {{ $page->description }}
            </div>
            <div class="text-justify text-xl mx-10">
                <span class="text-red-600">Director's: <span class="text-gray-100">{{ $page->director }}</span></span>
            </div>
            <div class="text-justify text-xl mx-10">
                <span class="text-red-600">Director's: <span class="text-gray-100">{{ $page->writer }}</span></span>
            </div>
            <div class="text-justify text-xl mx-10">
                <span class="text-red-600">Genre: <span type="text/html" class="text-gray-100">{!! $page->genre !!}</span></span>
            </div>
        </div>

        <!-- add to Watchlist -->

        <div class="flex flex-wrap px-5 -mx-1 overflow-hidden bg-gray-800 sm:-mx-1 md:-mx-1 xl:-mx-1">
            <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                <!-- Add some info here! -->
                <div class="max-w-md mx-auto rounded-xl overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                        <div class="p-8">
                            <div class="col-span-2 m-auto">
                                @auth
                                <a href="/add" class="py-3 px-20 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-yellow-700">Add to Watchlist</a>
                                @endauth
                                @guest
                                <a href="/login" class="py-3 px-20 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-yellow-700">Add to Watchlist</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Movie information rating and Release date --}}
            <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                <div class="max-w-md mx-auto lg:ml-44 rounded-xl overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                        <div class="p-8 mx-10 px-10">
                            <div class="flex ml-20 items-center text-right text-gray-400 text-sm">
                                <span>&#9733;</span>
                                <span class="ml-1">{{$page->rating}}</span>
                            </div>
                            <div class="flex items-center text-right text-gray-400 py-3 text-sm w-80">
                                <span style="margin-left:-12px">Release date: {{$page->release_date}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <!-- Review -->
        <div class="text-red-600 text-6xl mx-5 py-4">
            <h1 class="text-6xl">Reviews</h1>
        </div>
        <div class=" flex flex-wrap justify-center">
            @foreach($reviews as $review)

            <div class="w-96 m-10">
                <h1 class="uppercase tracking-wide text-sm text-yellow-500 font-semibold">{{$review->reviewTitle}}</h1>
                <p class="text-justify normal-case text-gray-100">{{$review->reviewText}}</p>
                <span class="text-yellow-500 italic">Reviewer:<span class="text-justify normal-case text-gray-100 italic underline"> {{$review->user_id}}</span></span>
            </div>

            @endforeach
        </div>




    </div>
    <!-- Leave a review -->
    <div class="flex my-10">
        <div class="m-auto">
            <button class="py-5 px-20 sm:px-20 md:px-40 lg:px-60 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-yellow-700">
                Leave a Review
            </button>
        </div>
    </div>
</div>

@endsection