@extends('layout/layout')
@section('content')

<div class="bg-midnight-500 py-10">

    <ul class="font-Inter text-3xl sm:text-6xl text-white text-center">
       @foreach ($genres as $genre)
           <li class="mt-2"><a class="hover:text-red-700" href="/genre/{{$genre->id}}">{{$genre->genre}}</a></li>

       @endforeach
    </ul>

</div>

<div class="mt-2">
    <a href="/">
        <img class="relative sm:left-1" src="../img/close_logo_x.svg" alt="close Logo" title="close Logo" style="left: 50%; margin-left: -1.5rem;">
    </a>
</div>


@endsection