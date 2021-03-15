@extends('layout/layout')
@section('choosegenre')



<div class="bg-midnight-500 h-screen py-20">

    <div class="font-poppins text-white text-center">

        <p class="text-5xl sm:text-6xl">Choose a genre that suits your palate</p>

        <p class="text-4xl sm:text-5xl">Search among your favorites</p>

        <a href="/genre.blade.php" class="text-2xl sm:text-4xl bg-mojo-500 px-4 rounded-full btn btn-primary btn-lg active" role="button">Choose your genre<img class="inline object-contain md:object-scale-down" src="../img/choosegenreplay.png" alt="playbutton"></a>
    </div> 

</div>

@endsection