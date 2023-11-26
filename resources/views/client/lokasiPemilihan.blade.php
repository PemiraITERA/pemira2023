@extends('layouts.client.app')

@section('title', 'Pemira 2023 || Lokasi Pemilihan')

@section('content')

<section
class="md:px-10 md:pt-16 md:pb-[77px] md:bg-white overflow-hidden"
>
<div
    class="gradient-1 py-16 md:py-20 px-6 md:px-11 xl:px-[88px] flex flex-col gap-10 md:rounded-2xl max-w-[1400px] mx-auto relative"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="100"
        height="100"
        viewBox="0 0 100 100"
        fill="none"
        class="hidden xl:block w-[100px] h-[100px] absolute top-11 -right-20"
    >
        <circle
            cx="11.7647"
            cy="11.7647"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="50.0001"
            cy="11.7647"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="88.2354"
            cy="11.7647"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="11.7647"
            cy="50"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="50.0001"
            cy="50"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="88.2354"
            cy="50"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="11.7647"
            cy="88.2353"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="50.0001"
            cy="88.2353"
            r="11.7647"
            fill="#FFACF7"
        />
        <circle
            cx="88.2354"
            cy="88.2353"
            r="11.7647"
            fill="#FFACF7"
        />
    </svg>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="156"
        height="164"
        viewBox="0 0 156 164"
        fill="none"
        class="hidden xl:block absolute top-0 -left-[85px]"
    >
        <path
            d="M74.067 4.21634C74.8755 -0.144882 81.1245 -0.144876 81.933 4.21635L88.3427 38.7931C88.921 41.9128 92.7274 43.1496 95.029 40.9656L120.538 16.7599C123.756 13.7068 128.811 17.3799 126.902 21.3835L111.764 53.1241C110.398 55.988 112.75 59.2259 115.896 58.8119L150.761 54.223C155.159 53.6442 157.09 59.5874 153.192 61.704L122.288 78.4848C119.5 79.9989 119.5 84.0011 122.288 85.5152L153.192 102.296C157.09 104.413 155.159 110.356 150.761 109.777L115.896 105.188C112.75 104.774 110.398 108.012 111.764 110.876L126.902 142.617C128.811 146.62 123.756 150.293 120.538 147.24L95.029 123.034C92.7274 120.85 88.921 122.087 88.3427 125.207L81.933 159.784C81.1245 164.145 74.8755 164.145 74.067 159.784L67.6573 125.207C67.079 122.087 63.2726 120.85 60.971 123.034L35.4618 147.24C32.2442 150.293 27.1887 146.62 29.0981 142.617L44.2362 110.876C45.6021 108.012 43.2496 104.774 40.1038 105.188L5.23871 109.777C0.841108 110.356 -1.08995 104.413 2.80799 102.296L33.7117 85.5152C36.5 84.0011 36.5 79.9989 33.7117 78.4848L2.80799 61.704C-1.08996 59.5874 0.841112 53.6442 5.23871 54.223L40.1038 58.8119C43.2496 59.2259 45.6021 55.988 44.2362 53.1241L29.0981 21.3835C27.1887 17.3799 32.2442 13.7068 35.4618 16.7599L60.971 40.9656C63.2726 43.1496 67.079 41.9128 67.6573 38.7931L74.067 4.21634Z"
            fill="#F8D312"
        />
    </svg>
    <h1
        class="font-montserrat text-lg md:text-2xl xl:text-[40px] md:mb-4 text-[#ffffff] font-semibold text-center pb-2 px-[13.5px] box-border border-[#ffffff] border-b-2 md:w-fit md:mx-auto"
    >
        LOKASI PEMILIHAN<span class="hidden md:inline">
            OFFLINE</span
        >
    </h1>
    <div class="flex flex-col gap-10 xl:flex-row">
        @foreach ($gedung as $data )
        <div class="rounded-2xl overflow-hidden flex-1">
            <div class="relative">
                <img
                    src="{{ asset("storage/gedung/".$data->foto) }}"
                    alt=""
                    class="bg-[url('{{ asset("storage/gedung/".$data->foto) }}')] aspect-[314/277] md:aspect-[600/277] object-cover"
                />
                <h2
                    class="absolute bottom-9 md:bottom-8 left-8 text-[#ffffff] font-montserrat font-semibold text-lg md:text-2xl"
                >
                    {{ $data->gedung }}
                </h2>
            </div>
            <div
                class="bg-[#FFF9F5] px-6 md:px-8 py-10 flex flex-col gap-6"
            >
                <h2
                    class="font-montserrat font-semibold text-lg md:text-2xl"
                >
                    {{ $data->tgl }} Pukul {{ $data->jam }}
                </h2>
                @foreach ($prodi as $item)
                    @if ($data->gedung == $item->gedung_pemilihan)
                        <p
                            class="font-poppins text-xs md:text-lg md:font-semibold text-main-200 box-border border-b-[1px] border-main-200 p-6 align-middle"
                        >
                            {{ $item->nama_prodi }}
                            <span
                                class="inline-block w-5 bg-main-200 h-[1px] align-middle mx-6"
                            ></span>
                            {{ $item->waktu_pemilihan }}
                        </p>
                    @endif

                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
@endsection
