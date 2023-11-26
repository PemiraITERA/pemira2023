@extends('layouts.client.app')

@section('title', 'Pemira 2023 || Dokumentasi')

@section('content')
<main class="bg-white-50 md:px-11 xl:px-0">
    <!--Section content-->
    <div
        class="md:my-16 xl:my-32 p-2 bg-white md:bg-gradient-to-b from-[#ffeede] via-[#ffeede] to-transparent rounded-3xl xl:shadow-md max-w-[1400px] xl:mx-auto px-2"
    >
        <h1
            class="font-montserrat font-semibold text-[#3f3e3e] xl:text-4xl lg:text-2xl text-xl py-6 border-b-2 border-solid border-orange-300 my-14 text-center w-fit mx-auto"
        >
            DOKUMENTASI ACARA PEMIRA 2023
        </h1>
        <div
            class="grid grid-cols-5 max-[767px]:grid-cols-3 gap-1 md:px-14 xl:px-20 mb-20 gap-2"
        >
            @foreach($dokumentasi as $item)
                <div
                    class="bg-green-400 w-full h-56 max-sm:h-40 max-lg:h-44"
                >
                    <div class="">
                        <img src="{{ asset('storage/dokumentasi/'.$item->foto) }}" alt="dokumentasi" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
