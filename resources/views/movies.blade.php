@extends('layout/layout')
@section('content')


 {{-- <video class="w-full" autoplay loop muted src="../img/thedig.mp4"></video> --}}


{{-- top rated movies --}}
 <x-img-carousel data="1" :movies="$movies"/> 


{{-- featured movies --}}
{{-- <x-img-carousel data="3" :movies="$movies"/> --}}




    @include('choosegenre')


  
@endsection