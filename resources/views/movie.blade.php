@extends('layout/layout')
@section('content')

    <div class="overflow-x-hidden m-auto bg-midnight lg:mt-16 max-w-screen-xl">
        <img style="max-height: 500px; min-width: 100%" class="sm:hidden" src="{{ $page->img }}">

        <!-- movie information -->

        <!-- add to Watchlist -->
        <div class=" pb-8 md:pb-0 bg-gray-800 flex justify-around items-center lg:justify-start">
            <img class="w-64 h-96 hidden sm:block" src="{{ $page->img }}">
            <div>
                <div class="text-red-600 text-4xl py-4 mx-8">
                    <h1 class="text-6xl">{{ $page->title }}</h1>
                </div>
                <div class="xl:text-justify normal-case mx-8 text-xl text-gray-100 mb-4">
                    {{ $page->description }}
                </div>
                <div class="text-xl mx-8">
                    <span class="text-red-600">Director's: <span class="text-gray-100">{{ $page->director }}</span></span>
                </div>
                <div class="text-xl mx-8">
                    <span class="text-red-600">Writer's: <span class="text-gray-100">{{ $page->writer }}</span></span>
                </div>
                <div class="text-xl mx-8 flex">
                    <h1 class="text-red-600">Genre: </h1>
                    @foreach ($genres as $genre)
                        <span class="text-gray-100 mx-1">{{ $genre->genre }}</span>
                    @endforeach
                </div>

                {{-- mobil view --}}
                <div class="text-xl mx-8">
                    <h2 class="mr-2  md:hidden text-red-600">Release date: <span
                            class="text-white">{{ $page->release_date }}</span></h2>
                </div>
                <div class="text-xl mx-8">
                    <h2 class=" md:hidden text-red-600">Time: <span class="text-white"> {{ $page->runtime }}h</span></h2>
                </div>
                <div class="text-xl mx-8 md:hidden">
                    <h4 class="text-gray-100"><span class="text-yellow-400">&#9733;</span> {{ $page->rating }}/10</h4>
                </div>
                {{-- mobil view --}}

            </div>
        </div>

        <section class="flex text-white justify-between font-poppins text-1xl bg-green-600 h-20 items-center sm:text2">
            <div class="ml-2 mr-0 sm:mr-5 sm:ml-5">
                <form action="/watchlist/{{ $page->id }}" method="POST">
                    @csrf
                    <input
                        class="font-semibold font-poppins rounded-lg p-2 shadow-md text-white bg-red-500 hover:bg-yellow-700 lg:p-4 lg:text-lg cursor-pointer"
                        type="submit" value="Add to Watchlist">
                </form>
            </div>

            {{-- Movie information rating and Release date --}}
            <div>
                <h2 class="mr-2 hidden md:block">Release date: {{ $page->release_date }}</h2>
            </div>
            <div>
                <h2 class="hidden md:block">Time: {{ $page->runtime }}h</h2>
            </div>
            <div class="text-white mr-4 sm:mr-15 hidden md:block">
                <h4><span class="text-yellow-400 ">&#9733;</span> {{ $page->rating }}/10</h4>
            </div>
            @auth
                @isset($userRating)
                    <div class="text-white text-sm mr-4 sm:mr-15">
                        <h4>Your rating:</h4>
                        <h4><span class="text-yellow-400"> &#9733;</span> {{ $userRating }}/10</h4>
                    </div>
                @endisset

            @endauth

            <div class="text-sm mr-1 sm:mr-3 text-black">
                <form action="/{{ $page->id }}/rating" method="POST">
                    @csrf
                    <select name="rating" class="">
                        <option value='1'>1 &#9733;</option>
                        <option value='2'>2 &#9733;</option>
                        <option value='3'>3 &#9733;</option>
                        <option value='4'>4 &#9733;</option>
                        <option value='5'>5 &#9733;</option>
                        <option value='6'>6 &#9733;</option>
                        <option value='7'>7 &#9733;</option>
                        <option value='8'>8 &#9733;</option>
                        <option value='9'>9 &#9733;</option>
                        <option value='10'>10 &#9733;</option>
                    </select>
                    <input
                        class="font-semibold font-poppins rounded-lg p-2 shadow-md text-white bg-red-500 hover:bg-yellow-700 lg:text-lg cursor-pointer"
                        type="submit" value="Rate">
                </form>
            </div>

        </section>
        <!-- Review -->
        <div class="text-red-600 text-6xl mx-10 py-4">
            <h1 class="text-6xl">Reviews</h1>
        </div>
        <div class="flex flex-wrap justify-center">
            @foreach ($reviews as $review)
                <div class="w-96 m-10">
                    <h1 class="uppercase tracking-wide text-sm text-yellow-500 font-semibold">{{ $review->reviewTitle }}
                    </h1>
                    @foreach ($review_users as $review_user)
                        @if ($review_user->id == $review->user_id)
                            <p class="text-white">By: <span>{{ $review_user->name }}</span></p>
                        @endif
                    @endforeach

                    <p class="normal-case text-gray-100">{{ $review->reviewText }}</p>

                    @foreach ($ratings as $rating)
                        @isset($rating)
                            @if ($rating->user_id == $review->user_id)
                            @endisset
                            <span class="text-yellow-500 italic">Rating:<span
                                    class="text-justify normal-case text-gray-100 font-poppins">
                                    {{ $rating->rating }}/10</span></span>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>

        <!-- Leave a review -->
        <div class="flex my-10">
            <div class="m-auto">
                <button id="reviewbtn"
                    class=" modal-open py-5 px-20 sm:px-20 md:px-40 lg:px-60 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-yellow-700">
                    Leave a Review
                </button>
            </div>
        </div>
    </div>







    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">




            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Movie Review 🎥</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!--Body-->
                <h2 class="text-lg font-semibold text-gray-700 dark:text-white">Review of {{ $page->title }}</h2>
                <form method="post" action="{{ url('review/' . $page->id . '') }}">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="title">Title</label>
                            <input name="title" required id="title" type="text"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="text">Description</label>
                            <textarea name="text" required id="text" type="text"
                                class="block h-10 w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                        </div>
                    </div>

                    <div class="flex justify-end pt-2 m-2">
                        <button
                            class="px-6 mr-2 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>

                </form>

                <a
                    class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400 cursor-pointer">Close</a>

            </div>
            <!--Footer-->


        </div>
    </div>
    </div>







@endsection
