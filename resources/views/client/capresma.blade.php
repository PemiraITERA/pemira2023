@extends('layouts.client.app')


@section('title', 'Pemira 2023 || Capresma')

@section('content')
<main
    class="flex justify-center overflow-hidden flex-col md:gap-16 md:mt-[49px] md:mb[76px] xl:mt-[91px] xl:mb-[186px]"
>
    <!-- Daftar Calon -->
    <section
        class="gradient-1 mx-auto w-full xl:w-[1400px] md:w-[680px] relative flex flex-col gap-10 xl:gap-16 justify-center py-16 md:py-20 xl:py-[80px] md:rounded-3xl"
    >
        <div class="xl:flex absolute hidden -right-[68px] top-[30px]">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="100"
                height="100"
                viewBox="0 0 100 100"
                fill="none"
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
        </div>

        <div class="hidden xl:flex absolute -left-[55px] top-[5px]">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="140"
                height="150"
                viewBox="0 0 156 164"
                fill="none"
            >
                <path
                    d="M74.067 4.21634C74.8755 -0.144882 81.1245 -0.144876 81.933 4.21635L88.3427 38.7931C88.921 41.9128 92.7274 43.1496 95.029 40.9656L120.538 16.7599C123.756 13.7068 128.811 17.3799 126.902 21.3835L111.764 53.1241C110.398 55.988 112.75 59.2259 115.896 58.8119L150.761 54.223C155.159 53.6442 157.09 59.5874 153.192 61.704L122.288 78.4848C119.5 79.9989 119.5 84.0011 122.288 85.5152L153.192 102.296C157.09 104.413 155.159 110.356 150.761 109.777L115.896 105.188C112.75 104.774 110.398 108.012 111.764 110.876L126.902 142.617C128.811 146.62 123.756 150.293 120.538 147.24L95.029 123.034C92.7274 120.85 88.921 122.087 88.3427 125.207L81.933 159.784C81.1245 164.145 74.8755 164.145 74.067 159.784L67.6573 125.207C67.079 122.087 63.2726 120.85 60.971 123.034L35.4618 147.24C32.2442 150.293 27.1887 146.62 29.0981 142.617L44.2362 110.876C45.6021 108.012 43.2496 104.774 40.1038 105.188L5.23871 109.777C0.841108 110.356 -1.08995 104.413 2.80799 102.296L33.7117 85.5152C36.5 84.0011 36.5 79.9989 33.7117 78.4848L2.80799 61.704C-1.08996 59.5874 0.841112 53.6442 5.23871 54.223L40.1038 58.8119C43.2496 59.2259 45.6021 55.988 44.2362 53.1241L29.0981 21.3835C27.1887 17.3799 32.2442 13.7068 35.4618 16.7599L60.971 40.9656C63.2726 43.1496 67.079 41.9128 67.6573 38.7931L74.067 4.21634Z"
                    fill="#F8D312"
                />
            </svg>
        </div>

        <div class="flex justify-center">
            <h1
                class="content-center overflow-hidden w-[311px] md:w-[75%] xl:w-[60%] border-b-2 border-white text-white mb-1 text-lg md:text-2xl xl:text-[40px] text-center font-montserrat font-semibold"
            >
                DAFTAR CALON PRESIDEN MAHASISWA
                <span class="md:hidden">ITERA 2023</span>
            </h1>
        </div>

        <div class="flex justify-center">
            <div class="w-10/12 md:w-11/12 xl:w-[86%]">
                <div
                    class="grid justify-center md:flex md:gap-7 xl:grid xl:grid-cols-3 md:flex-wrap md:justify-center md:content-center gap-y-10"
                >
                @foreach ($capres as $data)
                    <!-- Capresma 1 -->
                    <div
                        class="rounded-2xl overflow-hidden bg-white w-[311px] md:w-[294px] xl:w-full"
                    >
                        <!-- photo -->
                        <div class="relative">
                            <img
                                class="w-full px-10 pt-5"
                                src="{{ asset('storage/capres/'.$data->foto_capres) }}"
                                alt=""
                            />
                            <div
                                class="gradient-3 absolute h-72 -mt-72 w-full flex justify-center"
                            >
                                <p
                                    class="text-white font-montserrat text-center w-40 md:w-36 xl:w-48 self-end mb-5 xl:mb-7 text-lg xl:text-[24px] font-medium"
                                >
                                    {{ $data->nama_capres }}
                                </p>
                            </div>
                        </div>
                        <!-- infophoto -->
                        <div class="bg-white p-6 flex justify-center">
                            <a
                             href="{{ Request::routeIs('capresma') ? '#' : '/capresma/view/'.$data->nama_capres }}"
                             >
                            <button
                                class="inline-flex gap-x-3 item-center overflow-hidden border-[1px] md:border-[1.5px] rounded-full border-main-300 px-6 md:px-7 py-[18px] md:py-4 md:font-semibold shadow-custom text-main-300 font-poppins text-[14px] md:text-[12px] xl:text-[18px]"
                            >
                                Lihat Detail Presma
                                <svg
                                    class="self-center"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="13"
                                    height="14"
                                    viewBox="0 0 13 14"
                                    fill="none"
                                >
                                    <path
                                        d="M2.94531 7.01102H10.3269"
                                        stroke="#F88312"
                                        stroke-width="1.58176"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M6.63574 3.32022L10.3265 7.011L6.63574 10.7018"
                                        stroke="#F88312"
                                        stroke-width="1.58176"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </button>

                            </a>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Daftar Partai -->
    <section
        class="gradient-4 mx-auto w-full xl:w-[1400px] md:w-[680px] inline-flex flex-col justify-center py-16 md:py-20 xl:py-[80px] gap-16 md:rounded-3xl"
    >
        <!-- Tema-->
        <div class="flex justify-center">
            <div class="border-b-2 border-main-200 mx-[30px]">
                <h1
                    class="overflow-hidden text-[rgb(63,62,62)] mb-1 text-lg md:text-2xl xl:text-[40px] text-center font-montserrat font-semibold"
                >
                    DAFTAR KOALISI MAHASISWA
                </h1>
            </div>
        </div>

        <!-- Profil Partai -->
        <div
            class="grid grid-cols-3 mx-auto gap-5 md:grid-cols-5 xl:grid-cols-6 md:gap-y-10"
        >
        @foreach ($koalisi as $data)
            <div
                class="flex flex-col gap-6 justify-center items-center"
            >
                {{-- <svg
                    class=""
                    xmlns="http://www.w3.org/2000/svg"
                    width="80"
                    height="80"
                    viewBox="0 0 100 100"
                    fill="none"
                >
                    <circle cx="50" cy="50" r="50" fill="#0B1742" />
                </svg> --}}
                <img src="{{ asset('storage/ormawa/'.$data->foto) }}" alt="" class="md:w-[100px] md:h-[100px] xl:w-[183px] xl:h-[183px]">
                <label
                    class="text-lg md:text-2xl xl:text-[28px] font-montserrat font-semibold"
                    >{{ $data->nama_ormawa }}</label
                >
            </div>
        @endforeach
        </div>
    </section>
</main>
@endsection
