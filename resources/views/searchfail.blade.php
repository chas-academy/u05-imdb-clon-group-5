@extends('layout/layout')
@section('content')
<style>
    .gradient {
        background-image: linear-gradient(135deg, #684ca0 35%, #1c4ca0 100%);
    }
</style>

<div class="gradient text-white min-h-screen flex items-center">
    <div class="container mx-auto p-4 flex flex-wrap items-center">

        <div class="w-full md:w-7/12 md:text-left p-4">
            <div class="post-list">
                {{$search}}
            </div>
            <div class="text-xl md:text-3xl font-medium mb-4">
                <h2>No search has been found</h2>
            </div>
            <div class="text-lg mb-8">
                You may have mistyped somthing please try again!
                Tip! you can search for your favorite movie 'title'.
            </div>
            <a href="/" class="border border-white rounded p-4">Go Home</a>
            <div class="w-full md:w-5/12 text-center p-4">
                <img src="https://themichailov.com/img/not-found.svg" alt="Not Found" />
            </div>
        </div>
    </div>
</div>

@endsection