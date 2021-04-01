
@extends('layout/layout')
@section('content')

<div class="overflow-x-hidden m-auto bg-midnight lg:mt-16">
    <img style="max-height: 500px; min-width: 100%" class="sm:hidden" src="{{ $page->img }}">

        <!-- movie information -->
    
             <!-- add to Watchlist -->
             <div class="bg-gray-800 flex justify-around items-center  lg:justify-start">
                    <img class="w-64 h-96 hidden sm:block" src="{{ $page->img }}">
             <div>
            <div class="text-red-600 text-4xl py-4 mx-10">
                <h1 class="text-6xl">{{ $page->title }}</h1>
            </div>
            <div class="xl:text-justify normal-case mx-10 text-xl text-gray-100 mb-4">
                {{ $page->description }}
            </div>
            <div class="text-xl mx-10">
                <span class="text-red-600">Director's: <span class="text-gray-100">{{ $page->director }}</span></span>
            </div>
            <div class="text-xl mx-10">
                <span class="text-red-600">Writer's: <span class="text-gray-100">{{ $page->writer }}</span></span>
            </div>
            <div class="text-xl mx-10 flex">
                <h1 class="text-red-600">Genre: </h1>
            @foreach ($genres as $genre)
            <span class="text-gray-100 mx-1">{{$genre->genre}}</span>
            @endforeach 
            </div>
        </div>
    </div>

    <section class="flex text-white justify-between font-poppins text-1xl bg-green-600 h-20 items-center sm:text2">
       <div class="ml-5 mr-5">
            <form action="/watchlist/{{ $page->id }}" method="POST">
                @csrf      
                <input class="font-semibold font-poppins rounded-lg p-2 shadow-md text-white bg-red-500 hover:bg-yellow-700 lg:p-4 lg:text-lg cursor-pointer" type="submit" value="Add to Watchlist">
            </form>
        </div>
       
                 {{-- Movie information rating and Release date --}}
            
                    <div>
                        <h2 class="mr-2">Release date: {{$page->release_date}}</h2>
                    </div>
                    <div>
                        <h2>Time: {{$page->runtime}}h</h2>
                    </div>  
                    <div class="text-white mr-4 sm:mr-20">
                        <h4><span class="text-yellow-400">&#9733;</span> {{$page->rating}}/10</h4>
                    </div>
                
    </section>
        <!-- Review -->
        <div class="text-red-600 text-6xl mx-10 py-4">
            <h1 class="text-6xl">Reviews</h1>
        </div>
        <div class="flex flex-wrap justify-center">
            @foreach($reviews as $review)
                <div class="w-96 m-10">
                    <h1 class="uppercase tracking-wide text-sm text-yellow-500 font-semibold">{{$review->reviewTitle}}</h1>
                    <p class="normal-case text-gray-100">{{$review->reviewText}}</p>
          
                @foreach ($ratings as $rating)
                @isset($rating)
                    @if ($rating->user_id == $review->user_id)
                    @endisset
                       <span class="text-yellow-500 italic">Rating:<span class="text-justify normal-case text-gray-100 font-poppins"> {{$rating->rating}}/10</span></span>
                    @endif 
                @endforeach 
                </div>
            @endforeach
        </div>
     
    <!-- Leave a review -->
    <div class="flex my-10">
        <div class="m-auto">
            <button id="reviewbtn" class="py-5 px-20 sm:px-20 md:px-40 lg:px-60 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-yellow-700">
                Leave a Review
            </button>
        </div>
    </div>
</div>


<section id="writeReview" class="hidden max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 dark:text-white">Review of {{ $page->title }}</h2>
    <form method="post" action="{{url('movie/'.$page->id.'')}}">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label  class="text-gray-700 dark:text-gray-200" for="title">Title</label>
                <input name="title" required id="title" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="title">Rating</label>
                <input placeholder="rate 0-10" min="0" max="10" name="title" required id="title" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="text">Description</label>
                <textarea name="text" required id="text" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>



@endsection