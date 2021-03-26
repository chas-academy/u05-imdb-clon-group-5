@extends('layout/layout')
@section('content')

{{-- <div class="bg-midnight-500 h-screen py-20">

    <ul class="font-Inter text-3xl sm:text-6xl text-white text-center">
        <li class="m-4">
            <a href="#">Action</a>
        </li>

        <li class="m-4">
            <a href="#">Animation</a>
        </li>

        <li class="m-4">
            <a href="#">Comedy</a>
        </li>

        <li class="m-4">
            <a href="#">Crime</a>
        </li>

        <li class="m-4">
            <a href="#">Drama</a>
        </li>

        <li class="m-4">
            <a href="#">Fantasy</a>
        </li>

        <li class="m-4">
            <a href="#">Horror</a>
        </li>

        <li class="m-4">
            <a href="#">Romance</a>
        </li>

        <li class="m-4">
            <a href="#">Science Fiction</a>
        </li>

        <li class="m-4">
            <a href="#">Thriller</a>
        </li>

    </ul>

</div> --}}
    <div class="bg-midnight-500 h-screen py-20">
        <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-1 md:-mx-1 lg:-mx-1 xl:-mx-1">
            @foreach ($genreList as $data)
                <div class="my-1 px-1 w-1/2 overflow-hidden sm:my-1 sm:px-1 md:my-1 md:px-1 md:w-1/3 lg:my-1 lg:px-1 lg:w-1/5 xl:my-1 xl:px-1 xl:w-1/5">
                    <!-- READ ME HERE!! -->
                    <!-- IF USING AMPPS/XAMPP/ETC -->
                    {{-- <a href="http://teampereda.com/u05/public/movie/{{ $data->id }}"><img src="{{ $data->img }}" alt="{{ $data->title }}" class="h-66 w-full"></a> --}}

                    <!-- IF USING VAGRANT/DOCKER/ETC -->
                    <a href="/movie/{{ $data->id }}"><img src="{{ $data->img }}" alt="{{ $data->title }}" class="h-66 w-full"></a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
