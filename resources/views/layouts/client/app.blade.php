<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Jangan Lupa Sesuaikan Title dengan nama page yang dibuat -->
        <title>@yield('title')</title>

        <!-- Scripts -->
        {{-- @vite('resources/css/app.css') --}}
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />

        <!-- Icons -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('client/images/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('client/images/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('client/images/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('client/images/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('client/images/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <script src="https://unpkg.com/feather-icons"></script>

        <style type="text/tailwindcss">
            .gradient-1 {
                @apply bg-gradient-to-tr from-main-300 to-pink;
            }

            .gradient-2 {
                @apply bg-gradient-to-r from-main-300 to-purple;
            }

            .gradient-3 {
                @apply bg-gradient-to-t from-black-2 via-transparent to-transparent;
            }

            .gradient-4 {
                @apply bg-gradient-to-b from-[#FFEEDE] to-[#FFEEDE00];
            }

            .hamburger-active > span:nth-child(1) {
                @apply rotate-45;
            }

            .hamburger-active > span:nth-child(2) {
                @apply scale-0;
            }

            .hamburger-active > span:nth-child(3) {
                @apply scale-0;
            }

            .hamburger-active > span:nth-child(4) {
                @apply -rotate-45;
            }
        </style>
    </head>
    <body>
        <header
            class="max-w-[1400px] mx-auto md:drop-shadow-header-shadow md:flex md:bg-white md:justify-between md:px-6 xl:rounded-full xl:mt-10"
        >
            <div
                class="flex justify-between items-center px-6 py-4 bg-white border-main-100 drop-shadow-header-shadow md:drop-shadow-none md:inline-block md:px-0"
                id="header"
            >
                <a
                    href=""
                    class="box-border border-[2px] border-main-100 border-solid rounded-full inline-block px-[14px] py-2"
                >
                    <img
                        src="{{ asset('assets/images/Logo-PEMIRA2023.png') }}"
                        alt="logo-pemira-2023"
                        class="inline-block rounded-full mr-[11px] w-6 md:w-9 xl:w-[50px]"
                    />
                    <h1
                        class="inline-block font-montserrat text-main-300 font-extrabold text-base md:text-lg xl:text-2xl align-middle"
                    >
                        PEMIRA ITERA
                    </h1>
                </a>
                <button
                    id="hamburger"
                    name="hamburger"
                    type="button"
                    class="block p-2 absolute right-4 md:hidden"
                >
                    <span
                        class="block w-[35px] border-2 border-black rounded-full mb-[5px] mx-auto origin-top-left transition duration-300 ease-in-out"
                    ></span>
                    <span
                        class="block w-[35px] border-2 border-black rounded-full mb-[5px] mx-auto transition duration-300 ease-in-out"
                    ></span>
                    <span
                        class="block w-[35px] border-2 border-black rounded-full mb-[5px] mx-auto transition duration-300 ease-in-out"
                    ></span>
                    <span
                        class="block w-[35px] border-2 border-black rounded-full mx-auto origin-bottom-left transition duration-300 ease-in-out"
                    ></span>
                </button>
            </div>
            <nav
                class="font-inter md:font-poppins hidden md:flex md:justify-between md:items-center md:gap-8 md:p-2"
                id="nav-menu"
            >
                <a
                    href="/"
                    class="w-full flex items-center justify-between px-6 py-[18px] bg-white text-blue-grey text-base xl:text-xl group active:bg-main-200/20 md:active:bg-white transition md:px-0 md:py-0 md:inline-block md:w-auto md:text-[#050200]"
                >
                    <!-- Tambahkan md:font-bold ketika dalam halaman tersebut -->
                    <p
                        class="group-active:text-main-200 group-active:font-bold md:group-active:font-normal md:group-active:text-[#050200] transition {{ Request::routeIs('beranda') ? 'md:font-bold' : '' }}"
                    >
                        Beranda
                    </p>
                    <div class="md:hidden">
                        <i
                            class="fa-solid fa-arrow-right fa-xl pr-2 text-blue-grey group-active:text-main-200"
                        ></i>
                    </div>
                </a>
                <a
                    href="{{ Request::routeIs('capresma') ? '#' : '/capresma/view' }}"
                    class="w-full flex items-center justify-between px-6 py-[18px] bg-white text-blue-grey text-base xl:text-xl group active:bg-main-200/20 md:active:bg-white transition md:px-0 md:py-0 md:inline-block md:w-auto md:text-[#050200]"
                >
                    <!-- Tambahkan font-bold ketika dalam halaman tersebut -->
                    <p
                        class="group-active:text-main-200 group-active:font-bold md:group-active:font-normal md:group-active:text-[#050200] transition {{ Request::routeIs('capresma.') ? 'md:font-bold' : '' }}"
                    >
                        Capresma
                    </p>
                    <div class="md:hidden">
                        <i
                            class="fa-solid fa-arrow-right fa-xl pr-2 text-blue-grey group-active:text-main-200 transition"
                        ></i>
                    </div>
                </a>
                <a
                    href="{{ Request::routeIs('dokumentasi') ? '#' : '/dokumentasi/' }}"
                    class="w-full flex items-center justify-between px-6 py-[18px] bg-white text-blue-grey text-base xl:text-xl group active:bg-main-200/20 md:active:bg-white transition md:px-0 md:py-0 md:inline-block md:w-auto md:text-[#050200]"
                >
                    <!-- Tambahkan font-bold ketika dalam halaman tersebut -->
                    <p
                        class="group-active:text-main-200 group-active:font-bold md:group-active:font-normal md:group-active:text-[#050200] transition {{ Request::routeIs('dokumentasi.') ? 'md:font-bold' : '' }}"
                    >
                        Dokumentasi
                    </p>
                    <div class="md:hidden">
                        <i
                            class="fa-solid fa-arrow-right fa-xl pr-2 text-blue-grey group-active:text-main-200 transition"
                        ></i>
                    </div>
                </a>
                <a
                    href="{{ Request::routeIs('lokasi') ? '#' : '/lokasi-pemilihan/' }}"
                    class="w-full flex items-center justify-between px-6 py-[18px] bg-white text-blue-grey text-base xl:text-xl group active:bg-main-200/20 md:active:bg-white transition md:px-0 md:py-0 md:inline-block md:w-auto md:text-[#050200]"
                >
                    <!-- Tambahkan font-bold ketika dalam halaman tersebut -->
                    <p
                        class="group-active:text-main-200 group-active:font-bold md:group-active:font-normal md:group-active:text-[#050200] transition {{ Request::routeIs('lokasi-pemilihan.') ? 'md:font-bold' : '' }}"
                    >
                        Lokasi Pemilihan
                    </p>
                    <div class="md:hidden">
                        <i
                            class="fa-solid fa-arrow-right fa-xl pr-2 text-blue-grey group-active:text-main-200 transition"
                        ></i>
                    </div>
                </a>
            </nav>
        </header>
        <main>
            <!-- buat content seluruhnya -->
            @yield('content')
        </main>
        <footer
            class="w-full py-[10px] md:py-[25px] xl:py-[52px] gradient-2 flex items-center justify-between px-6 box-border xl:justify-around"
        >
            <div
                class="border-[#ffffff] border-2 rounded-full flex items-center py-[6.5px] md:py-[13px] px-3 pr-4 gap-3 w-fit"
            >
                <div
                    class="bg-[#ffffff] rounded-full w-[27px] h-[27px] md:w-[48px] md:h-[48px] xl:w-[75px] xl:h-[75px] flex justify-center items-center"
                >
                    <img
                        src="{{ asset('assets/images/Logo-PEMIRA2023.png') }}"
                        alt=""
                        class="w-[21.62px] md:w-[38.44px] xl:w-[60px]"
                    />
                </div>
                <div
                    class="flex flex-col justify-center font-montserrat text-[#ffffff]"
                >
                    <p class="text-[8px] md:text-xs xl:text-xl">PEMIRA KM</p>
                    <p class="text-xs md:text-2xl xl:text-3xl">ITERA</p>
                </div>
            </div>
            <p
                class="font-montserrat text-[8px] md:text-base text-[#ffffff] xl:font-semibold xl:text-xl"
            >
                &#169; 2023 Tim IT PEMIRA ITERA
            </p>
        </footer>

        <script src="{{ asset('client/js/accordion.js') }}"></script>
        <script src="{{ asset('client/js/hamburger-button.js') }}"></script>
        <script src="{{ asset('client/js/modal.js') }}"></script>

    </body>
</html>
