@extends('layout/layout')
@section('content')



    <h1 class="text-white text-4xl mt-10 text-center font-poppins">You search for: <span
            class="text-mojo">{{ $search }}</span></h1>

    <section style="height: 55vh" class="flex justify-center flex-wrap w-full mt-10">

        @foreach ($findResults as $findResult)
            <a href="/movie/{{ $findResult->id }}"> <img class="w-36 h-48 m-2" src="{{ $findResult->img }}"
                    alt="{{ $findResult->title }}"></a>
        @endforeach

    </section>



@endsection
