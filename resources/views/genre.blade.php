@extends('layout/layout')
@section('content')

<h1 class="text-white font-poppins font-bold text-6xl text-center mt-10">{{$genreInformation}}</h1>
<section class="flex justify-center flex-wrap w-full mt-10 pb-36">

@foreach ($moviesgenres as $genre)
       <a href="/movie/{{$genre->id}}"> <img class="w-36 h-48 m-2" src="{{$genre->img}}" alt="{{$genre->title}}"></a>
@endforeach

</section>



@endsection

