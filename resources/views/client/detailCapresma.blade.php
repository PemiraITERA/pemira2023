@extends('layouts.client.app')


@section('title', 'Pemira 2023 || Detail Capresma')

@section('content')
    <section>
        <!-- section 1 - hero -->
        <div
            class="relative flex flex-col md:flex-row justify-center items-center gap-8 flex-shrink-0 w-[312px] md:w-[688px] xl:w-[1224px] h-auto px-6 py-8 xl:py-12 bg-main-50 mx-auto mt-[30px] md:mt-[150px] xl:mt-[194px] mb-[65px] md:mb-[84.16px] rounded-3xl xl:border-[2px] xl:border-main-100"
        >
            <!-- breadcrumb -->
            <div
                class="hidden md:absolute md:inline-flex md:items-center md:gap-6 md:-top-14 xl:-top-16 md:left-0"
                aria-label="Breadcrumb"
            >
                <ol
                    class="inline-flex items-center space-x-1 md:space-x-3"
                >
                    <li class="inline-flex items-center">
                        <a
                            href="#"
                            class="inline-flex items-center text-xl font-normal font-poppins text-main-200 hover:text-main-100"
                        >
                            Capresma
                        </a>
                    </li>
                    <div class="flex items-center">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                            <path
                                d="M9 18L15 12L9 6"
                                stroke="#FF7A17"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                    <li>
                        <a
                            href="#"
                            class="inline-flex items-center text-xl font-normal font-poppins text-main-200 hover:text-main-100"
                            >Detail Capresma</a
                        >
                    </li>
                </ol>
            </div>
            <img
                class="md:p-[30px] w-full max-w-[217px] md:max-w-[288px] object-cover aspect-auto"
                src="/public/client/images/union.svg"
                alt=""
            />
            <div
                class="flex flex-col items-start self-stretch md:self-auto xl:w-[835px] h-auto w-full gap-6"
            >
                <h1
                    class="font-montserrat text-lg md:text-2xl xl:text-[32px] font-semibold leading-[125%] text-[#0C102D]"
                >
                    {{ $capres->nama_capres }}
                </h1>
                <div
                    class="rounded-3xl md:rounded-[200px] gradient-1 p-4 flex items-start text-[#FFF] font-poppins text-sm md:text-base xl:text-2xl font-semibold leading-[124%]"
                >
                    {{ $capres->prodi }}
                </div>
                <p
                    class="self-stretch font-poppins text-xs md:text-sm xl:text-lg font-normal leading-[150%] text-[#0C102D]"
                >
                    {{ $capres->tentang }}
                </p>
                <div class="flex justify-center items-center gap-4">
                    <div class="flex justify-center items-center gap-2">
                        <div
                            class="w-8 h-8 rounded-full bg-[#FFD8C2]"
                        ></div>
                        <p
                            class="font-poppins text-xs md:text-base font-semibold leading-[124%] text-[#4D4D4D]"
                        >
                            Nama Partai 1
                        </p>
                    </div>
                    <div class="w-[1px] h-8 bg-main-300"></div>
                    <div
                        class="hidden xl:flex justify-center items-center gap-2"
                    >
                        <div
                            class="w-8 h-8 rounded-full bg-[#FFD8C2]"
                        ></div>
                        <p
                            class="font-poppins text-xs md:text-base font-semibold leading-[124%] text-[#4D4D4D]"
                        >
                            Nama Partai 2
                        </p>
                    </div>
                    <div
                        class="hidden xl:flex w-[1px] h-8 bg-main-300"
                    ></div>
                    <div
                        class="hidden xl:flex justify-center items-center gap-2"
                    >
                        <div
                            class="w-8 h-8 rounded-full bg-[#FFD8C2]"
                        ></div>
                        <p
                            class="font-poppins text-xs md:text-base font-semibold leading-[124%] text-[#4D4D4D]"
                        >
                            Nama Partai 3
                        </p>
                    </div>
                    <div
                        class="hidden xl:flex w-[1px] h-8 bg-main-300"
                    ></div>
                    <a
                        href="#partai"
                        class="flex-1 font-poppins text-[10px] md:text-base font-semibold leading-[124%] text-main-200"
                    >
                        Partai lainnya...
                    </a>
                </div>
            </div>
        </div>

        <!-- section 2 - visi misi -->
        <div
            class="relative flex justify-center items-center flex-col py-11 md:py-16 gap-10 w-full border-t-[2px] border-b-[2px] border-main-100 bg-main-50"
        >
            <div
                class="hidden xl:flex xl:absolute xl:-top-[74px] right-[348px]"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="136"
                    height="144"
                    viewBox="0 0 136 144"
                    fill="none"
                >
                    <path
                        d="M64.067 4.21636C64.8755 -0.144867 71.1245 -0.144882 71.933 4.21634L77.1623 32.4258C77.7407 35.5455 81.5471 36.7823 83.8486 34.5983L104.66 14.8501C107.878 11.797 112.934 15.4701 111.024 19.4736L98.6736 45.3693C97.3078 48.2331 99.6602 51.471 102.806 51.057L131.251 47.3132C135.648 46.7344 137.579 52.6776 133.681 54.7942L108.469 68.4848C105.68 69.9989 105.68 74.0011 108.469 75.5152L133.681 89.2058C137.579 91.3224 135.648 97.2656 131.251 96.6868L102.806 92.943C99.6603 92.529 97.3078 95.7669 98.6736 98.6307L111.024 124.526C112.934 128.53 107.878 132.203 104.66 129.15L83.8487 109.402C81.5471 107.218 77.7407 108.454 77.1623 111.574L71.933 139.784C71.1245 144.145 64.8755 144.145 64.067 139.784L58.8377 111.574C58.2593 108.454 54.4529 107.218 52.1514 109.402L31.3396 129.15C28.1221 132.203 23.0665 128.53 24.9759 124.526L37.3264 98.6307C38.6922 95.7669 36.3398 92.529 33.194 92.943L4.74929 96.6868C0.351692 97.2656 -1.57939 91.3224 2.31856 89.2058L27.5314 75.5152C30.3197 74.0011 30.3197 69.9989 27.5314 68.4848L2.31857 54.7942C-1.57937 52.6776 0.351679 46.7344 4.74928 47.3132L33.194 51.057C36.3397 51.471 38.6922 48.2331 37.3264 45.3693L24.9759 19.4736C23.0665 15.4701 28.1221 11.797 31.3396 14.8501L52.1513 34.5983C54.4529 36.7823 58.2593 35.5455 58.8377 32.4258L64.067 4.21636Z"
                        fill="#F88312"
                    />
                </svg>
            </div>
            <div
                class="h-auto w-[312px] md:w-[600px] flex flex-col justify-center items-center py-10 gap-8 rounded-3xl border-[2px] border-main-100 bg-[#FFF]"
            >
                <div
                    class="flex items-center pb-2 border-b-[2px] border-main-200"
                >
                    <h1
                        class="font-montserrat xl:font-poppins text-2xl xl:text-[44px] font-semibold leading[125%] xl:leading-normal text-[#050200]"
                    >
                        Visi
                    </h1>
                </div>
                <p
                    class="h-[114px] flex-1 text-[#0C102D] text-center font-poppins text-xs md:text-lg font-normal leading-[150%] px-6"
                >
                    {{ $detailcapres->visi }}
                </p>
            </div>
            <div
                class="flex flex-col justify-center items-center gap-3"
            >
                <div
                    class="w-3 h-3 rounded-full bg-main-200 opacity-[37%]"
                ></div>
                <div
                    class="w-3 h-3 rounded-full bg-main-200 opacity-[37%]"
                ></div>
                <div
                    class="w-3 h-3 rounded-full bg-main-200 opacity-[37%]"
                ></div>
            </div>
            <div
                class="h-auto w-[312px] md:w-[600px] flex flex-col justify-center items-center py-10 gap-8 rounded-3xl border-[2px] border-main-100 bg-[#FFF]"
            >
                <div
                    class="flex items-center pb-2 border-b-[2px] border-main-200"
                >
                    <h1
                        class="font-montserrat xl:font-poppins text-2xl xl:text-[44px] font-semibold leading[125%] xl:leading-normal text-[#050200]"
                    >
                        Misi
                    </h1>
                </div>
                @foreach ($misicapres as $data)
                <div
                    class="flex px-6 justify-center items-center gap-6 self-stretch"
                >
                    <div
                        class="w-10 md:w-11 h-10 md:h-11 flex-shrink-0 flex justify-center items-center bg-main-200 rounded-full text-[#FFF] font-montserrat text-lg md:text-2xl font-semibold leading-[125%]"
                    >
                        {{ $loop->iteration }}
                    </div>
                    <p
                        class="flex-1 font-poppins text-xs md:text-lg font-normal leading-[150%]"
                    >
                        {{ $data->misi }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- section 3 - video pendek -->
        <div
            class="my-16 md:my-[120px] xl:my-[174px] flex flex-col w-full justify-center items-center gap-8 rounded-3xl"
        >
            <div
                class="flex w-full md:w-[688px] py-11 md:py-14 flex-col justify-center items-center gap-8"
            >
                <div
                    class="flex items-center pb-2 border-b-[2px] border-main-200"
                >
                    <h1
                        class="font-montserrat xl:font-poppins text-2xl xl:text-[44px] font-semibold leading-[125%] xl:leading-normal"
                    >
                        Video Pendek
                    </h1>
                </div>
                <iframe
                    src="https://www.youtube.com/embed/ZF1ucSiAhW8?si=kl5BizE9JZ-5fqlZ"
                    frameborder="0"
                    class="flex w-[311px] md:w-[600px] h-[198px] md:h-[380px] items-center border-[2px] border-main-200 bg-[#0B1742]"
                ></iframe>
            </div>
        </div>

        <!-- section 4 - proker -->
        <div
            class="flex w-full px-10 py-16 flex-col justify-center items-center gap-10 flex-shrink-0 border-t-[2px] border-b-[2px] bg-main-50 border-main-100"
        >
            <div
                class="flex items-center pb-2 border-b-[2px] border-main-200"
            >
                <h1
                    class="font-montserrat xl:font-poppins text-2xl xl:text-[44px] font-semibold leading-[125%] xl:leading-normal text-[#050200]"
                >
                    Program Kerja
                </h1>
            </div>
            @foreach ($progjacapres as $data )
            <div
                class="flex pr-6 mx-auto justify-center items-center gap-6 self-center rounded-lg md:rounded-xl border-[2px] border-main-200"
            >
                <div
                    class="w-[60px] md:w-[100px] h-[60px] md:h-[100px] flex-shrink-0 flex justify-center items-center rounded-lg bg-main-200 text-[#FFF] font-montserrat text-2xl font-semibold leading-[125%] md:leading-normal md:text-[48px]"
                >
                    {{ $loop->iteration }}
                </div>
                <p
                    class="flex-1 w-[172px] md:w-[540px] xl:w-[760px] text-[#0C102D] font-poppins text-xs md:text-[18px] xl:text-2xl font-normal leading-[150%] xl:leading-normal"
                >
                    {{ $data->progja }}
                </p>
            </div>
            @endforeach
        </div>

        <!-- section 5 - cv & grand design -->
        <div
            class="my-6 flex justify-center items-center w-[312px] md:w-[450px] xl:w-[560px] gap-3 mx-auto md:gap-8"
        >
            <button
                id="btnCV"
                class="flex p-4 justify-center items-center gap-2 flex-1 rounded-[500px] hover:bg-slate-100 active:bg-main-200 active:shadow-lg active:shadow-[rgba(255, 168, 105, 0.38)] text-main-200 active:text-[#fff] font-poppins text-xs md:text-2xl font-semibold leading-[124%] border-[1px] border-main-200 transition-all duration-200"
            >
                CV
            </button>
            <button
                id="btnKampanye"
                class="flex p-4 justify-center items-center gap-2 flex-1 rounded-[500px] hover:bg-slate-100 active:bg-main-200 active:shadow-lg active:shadow-[rgba(255, 168, 105, 0.38)] text-main-200 active:text-[#fff] font-poppins text-xs md:text-2xl font-semibold leading-[124%] border-[1px] border-main-200 transition-all duration-200"
            >
                Grand Design
            </a>
        </div>

        <!-- section 6 - partai pendukung -->
        <div
            id="partai"
            class="flex w-full py-16 flex-col items-center gap-10 border-t-[2px] border-b-[2px] border-main-100 bg-main-50"
        >
            <div
                class="flex pb-2 items-center border-b-[2px] border-main-200"
            >
                <h1
                    class="text-[#050200] font-montserrat text-2xl xl:font-poppins xl:text-[44px] font-semibold leading-[125%] xl:leading-normal"
                >
                    Partai Pendukung
                </h1>
            </div>
            <div
                class="grid grid-cols-2 md:grid-cols-3 justify-center items-center gap-6"
            >
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-[80px] md:w-[100px] xl:w-[120px] h-[80px] md:h-[100px] xl:h-[120px] bg-[#0B1742] rounded-full"
                    ></div>
                    <h2
                        class="text-black font-montserrat text-lg md:text-2xl xl:text-[32px] xl:-tracing-[1.28px] font-semibold leading-[125%]"
                    >
                        HMIF
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-[80px] md:w-[100px] xl:w-[120px] h-[80px] md:h-[100px] xl:h-[120px] bg-[#0B1742] rounded-full"
                    ></div>
                    <h2
                        class="text-black font-montserrat text-lg md:text-2xl xl:text-[32px] xl:-tracing-[1.28px] font-semibold leading-[125%]"
                    >
                        HMIF
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-[80px] md:w-[100px] xl:w-[120px] h-[80px] md:h-[100px] xl:h-[120px] bg-[#0B1742] rounded-full"
                    ></div>
                    <h2
                        class="text-black font-montserrat text-lg md:text-2xl xl:text-[32px] xl:-tracing-[1.28px] font-semibold leading-[125%]"
                    >
                        HMIF
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-[80px] md:w-[100px] xl:w-[120px] h-[80px] md:h-[100px] xl:h-[120px] bg-[#0B1742] rounded-full"
                    ></div>
                    <h2
                        class="text-black font-montserrat text-lg md:text-2xl xl:text-[32px] xl:-tracing-[1.28px] font-semibold leading-[125%]"
                    >
                        HMIF
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-[80px] md:w-[100px] xl:w-[120px] h-[80px] md:h-[100px] xl:h-[120px] bg-[#0B1742] rounded-full"
                    ></div>
                    <h2
                        class="text-black font-montserrat text-lg md:text-2xl xl:text-[32px] xl:-tracing-[1.28px] font-semibold leading-[125%]"
                    >
                        HMIF
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-[80px] md:w-[100px] xl:w-[120px] h-[80px] md:h-[100px] xl:h-[120px] bg-[#0B1742] rounded-full"
                    ></div>
                    <h2
                        class="text-black font-montserrat text-lg md:text-2xl xl:text-[32px] xl:-tracing-[1.28px] font-semibold leading-[125%]"
                    >
                        HMIF
                    </h2>
                </div>
            </div>
        </div>

        <!-- Modal CV -->
        <div
            class="fixed hidden top-20 z-40 inset-x-3 pb-4 items-center justify-center"
            id="modalCV"
        >
            <div
                class="bg-white rounded-lg overflow-hidden shadow-lg shadow-[rgb(137, 148, 67)] transform transition-all w-max"
            >
                <div
                    class="flex bg-button-color px-4 pt-4 -mb-2 rounded-t-lg justify-between items-center font-montserrat"
                >
                    <button
                        class="close text-[#050200] font-bold py-2 px-4 rounded-lg hover:bg-main-200 hover:shadow-md hover:shadow-[rgb(137, 148, 67)] focus:outline-none focus:shadow-outline-blue active:bg-zinc-300 hover:text-red-600"
                    >
                        X
                    </button>
                    <h2 class="text-[#050200] text-lg font-semibold">
                        Curriculum Vitae
                    </h2>
                </div>
                <div class="px-4 py-4">
                    <div class="content-between items-center flex">
                        <iframe
                            src="{{ $detailcapres->cv }}"
                            width="640"
                            height="480"
                            allow="autoplay"
                        >
                        </iframe>
                    </div>
                </div>
            </div>
            <div
                id="Backdrop1"
                class="opacity-25 fixed inset-0 -z-10 bg-black"
            ></div>
        </div>

        <!-- Modal Kampanye -->
        <div
            class="fixed hidden top-20 z-40 inset-x-3 pb-4 items-center justify-center"
            id="modalKampanye"
        >
            <div
                class="bg-white rounded-lg overflow-hidden shadow-lg shadow-[rgb(137, 148, 67)] transform transition-all w-max"
            >
                <div
                    class="flex bg-button-color px-4 pt-4 rounded-t-lg justify-between items-center font-montserrat"
                >
                    <button
                        class="close text-[#050200] font-bold py-2 px-4 rounded-lg hover:bg-main-200 hover:shadow-md hover:shadow-[rgb(137, 148, 67)] focus:outline-none focus:shadow-outline-blue active:bg-zinc-300 hover:text-red-600"
                    >
                        X
                    </button>
                    <h2 class="text-[#050200] text-lg font-semibold">
                        Grand Design
                    </h2>
                </div>
                <div class="px-4 py-4">
                    <div class="content-between items-center flex">
                        <iframe
                            src="{{ $detailcapres->grand_design}}"
                            width="640"
                            height="480"
                            allow="autoplay"
                        >
                        </iframe>
                    </div>
                </div>
            </div>
            <div
                id="Backdrop2"
                class="opacity-25 fixed inset-0 -z-10 bg-black"
            ></div>
        </div>
    </section>
@endsection
