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

    <div class="overflow-x-hidden relative m-auto bg-midnight">
        <!-- Body -->
        <div class="movie-info border-b border-gray-800">
            <!-- First part -->
            <div class="container mx-auto px-1 py-1 flex">
                <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2021/03/931/524/justice-league-HBOmax.jpg?ve=1&tl=1" alt="Justice League" class="w-full">
            </div>

            <!-- Second part -->

            <div class="flex flex-wrap px-5 -mx-1 overflow-hidden bg-gray-800 sm:-mx-1 md:-mx-1 xl:-mx-1">
                <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                    <!-- Add some info here! -->
                    <div class="max-w-md mx-auto rounded-xl overflow-hidden md:max-w-2xl">
                        <div class="md:flex">
                        <div class="p-8">
                            <div class="col-span-2 m-auto">
                                <button class="py-3 px-20 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-yellow-700">
                                    Add to Watchlist
                                </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                    <!-- Add some info here! -->
                    <div class="max-w-md mx-auto lg:ml-44 rounded-xl overflow-hidden md:max-w-2xl">
                        <div class="md:flex">
                        <div class="p-8 mx-10 px-10">
                            <div class="flex ml-20 items-center text-right text-gray-400 text-sm">
                                <img src="http://teampereda.com/5-star.png" alt="stars" class="w-20">
                                <span class="ml-1">100%</span>
                            </div>
                            <div class="flex items-center text-right text-gray-400 py-3 text-sm w-80">
                                <span style="margin-left:-12px">Release date: Feb 20, 2020 I 04:25</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


        </div>

        <!-- Third part -->
        <div class="grid gap-4 py-5 flex">
            <div class="text-red-600 text-4xl mx-5 py-4">
                <h1>Description</h1>
            </div>

            <div class="text-justify normal-case mx-10 text-xl text-gray-100">
                    Zack Snyder's definitive director's cut of Justice League.
                    Determined to ensure Superman's ultimate sacrifice was not in vain,
                    Bruce Wayne aligns forces with Diana Prince with plans to recruit
                    a team of metahumans to protect the world from an approaching
                    threat of catastrophic proportions.
            </div>
            <div class="text-justify text-xl mx-10">
                <span class="text-red-600">Writer's: <span class="text-gray-100">Chris Territo, Zack Snyder, Will Beal, Jerry Siegel, Joe Shuster.</span></span>
            </div>
            <div class="text-justify text-xl mx-10">
                <span class="text-red-600">Director's: <span class="text-gray-100">Zack Snyder.</span></span>
            </div>
            <div class="text-justify text-xl mx-10">
                <span class="text-red-600">Genre: <span class="text-gray-100">Action.</span></span>
            </div>
        </div>

        <!-- Fourth part -->
        <div class="grid grap-4 flex text-red-600 text-4xl mx-5 py-4">
                <h1>Reviews</h1>
        </div>
        <div class="flex flex-wrap px-5 -mx-1 overflow-hidden sm:-mx-1 md:-mx-1 xl:-mx-1">
            <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                <!-- Add some info here! -->
                <div class="max-w-md mx-auto divide-y-4 divide-yellow-500 divide-double rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                    {{-- Remove the comment if a profil picture exists
                    <div class="md:flex-shrink-0">
                        <img class="h-60  my-5 w-full object-cover md:w-48" src="'.$SomeVariable[1].'" alt="Man looking at item at a store">
                    </div> --}}
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-yellow-500 font-semibold">Movie of the year!</div>
                        <img src="http://teampereda.com/5-star.png" alt="stars" class="w-20 my-2">
                        <p class="text-justify normal-case text-gray-100">Definitely, this is the best movie EVER!!</p>
                        <span class="text-yellow-500 italic">Reviewer: <a href=""><span class="text-justify normal-case text-gray-100 italic underline">Jorge Pereda</span></a></span>
                    </div>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                <!-- Add some info here! -->
                <div class="max-w-md mx-auto divide-y-4 divide-yellow-500 divide-double rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                    {{-- Remove the comment if a profil picture exists
                    <div class="md:flex-shrink-0">
                        <img class="h-60  my-5 w-full object-cover md:w-48" src="'.$SomeVariable[1].'" alt="Man looking at item at a store">
                    </div> --}}
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-yellow-500 font-semibold">Movie of the year!</div>
                        <img src="http://teampereda.com/5-star.png" alt="stars" class="w-20 my-2">
                        <p class="text-justify normal-case text-gray-100">Definitely, this is the best movie EVER!!</p>
                        <span class="text-yellow-500 italic">Reviewer: <a href=""><span class="text-justify normal-case text-gray-100 italic underline">Jorge Pereda</span></a></span>
                    </div>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                <!-- Add some info here! -->
                <div class="max-w-md mx-auto divide-y-4 divide-yellow-500 divide-double rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                    {{-- Remove the comment if a profil picture exists
                    <div class="md:flex-shrink-0">
                        <img class="h-60  my-5 w-full object-cover md:w-48" src="'.$SomeVariable[1].'" alt="Man looking at item at a store">
                    </div> --}}
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-yellow-500 font-semibold">Movie of the year!</div>
                        <img src="http://teampereda.com/5-star.png" alt="stars" class="w-20 my-2">
                        <p class="text-justify normal-case text-gray-100">Definitely, this is the best movie EVER!!</p>
                        <span class="text-yellow-500 italic">Reviewer: <a href=""><span class="text-justify normal-case text-gray-100 italic underline">Jorge Pereda</span></a></span>
                    </div>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-1/2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                <!-- Add some info here! -->
                <div class="max-w-md mx-auto divide-y-4 divide-yellow-500 divide-double rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                    {{-- Remove the comment if a profil picture exists
                    <div class="md:flex-shrink-0">
                        <img class="h-60  my-5 w-full object-cover md:w-48" src="'.$SomeVariable[1].'" alt="Man looking at item at a store">
                    </div> --}}
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-yellow-500 font-semibold">Movie of the year!</div>
                        <img src="http://teampereda.com/5-star.png" alt="stars" class="w-20 my-2">
                        <p class="text-justify normal-case text-gray-100">Definitely, this is the best movie EVER!!</p>
                        <span class="text-yellow-500 italic">Reviewer: <a href=""><span class="text-justify normal-case text-gray-100 italic underline">Jorge Pereda</span></a></span>
                    </div>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>

        <!-- Fifth part -->

        <div class="flex my-10">
            <div class="m-auto">
                <button class="py-5 px-20 sm:px-20 md:px-40 lg:px-60 font-semibold rounded-lg shadow-md text-white bg-red-500 hover:bg-yellow-700">
                Leave a Review
                </button>
            </div>
        </div>


    </div>

@endsection
