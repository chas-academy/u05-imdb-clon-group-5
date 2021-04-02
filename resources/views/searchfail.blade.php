@extends('layout/layout')
@section('content')


    <div style="height: 70vh" class="text-white flex justify-center items-center">
        <div>

            <div class="w-full text-center p-4">
                <div class="post-list text-mojo text-lg">
                    "{{ $search }}"
                </div>
                <div class="text-xl md:text-3xl font-medium mb-4">
                    <h2>No search has been found</h2>
                </div>
                <div class="text-lg mb-8">
                    You may have mistyped somthing please try again!
                    Tip! you can search for your favorite movie 'title'.
                </div>
                <a href="/" class="border border-white rounded p-4 hover:bg-mojo">Go Home</a>

            </div>
        </div>
    </div>

@endsection
