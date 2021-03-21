@extends('layout/layout')
@section('content')


<video class="w-full" autoplay loop muted src="../img/thedig.mp4"></video>



{{--   <x-img-carousel data="1" :movies="$movies"/>

  <x-img-carousel data="2" :movies="$movies"/> --}}

    @include('choosegenre')


  
@endsection