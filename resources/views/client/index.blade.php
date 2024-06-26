@extends('layouts.client.app')


@section('title', 'Pemira 2023')

@section('content')
    <div class="flex flex-col items-center text-center m-4 mt-20 xl:mt-40 h-[25vh] gap-6 lg:gap-10">
    <h1 class="text-2xl font-extrabold lg:text-4xl lg:w-2/4 text-main-400 font-montserrat" id="title">Pemira adalah <span class="text-orange-500">saksi</span> dari <br class="hidden md:block font-montserrat">perubahan, harapan, dan aspirasi</h1>
    <p class="text-[12px] text-main-400 lg:text-sm lg:w-4/12 w-11/12 font-medium font-poppins">Saatnya untuk menentukan, untuk memilih, dan untuk merubah masa depan Institut Teknologi Sumatera bersama-sama.</p>
    <a href="http://pemira.km.itera.ac.id/"><button class="w-full rounded-full bg-main-300 hover:ring-orange-200 hover:ring-2 p-4 lg:w-[244px] md:w-[244px] font-medium text-white shadow-xl shadow-orange-200 flex flex-row justify-center gap-3 font-montserrat">Ayo Voting!<i class="block lg:hidden" data-feather="arrow-right"></i></button></a>
    </div>

    <div id="timeline" class="mt-[15em] mb-[10em] flex flex-col items-center justify-center text-center">
    <h1 class="text-2xl font-semibold mb-5 font-poppins">Jadwal</h1>
        <div class="w-full lg:w-8/12 lg:h-50 md:h-auto md:w-auto md:rounded-sm md:shadow-lg h-[13em] rounded-md lg:rounded-full bg-[#F9EFE1] overflow-x-auto overflow-y-hidden gap-5 p-2 flex flex-col items-center">
        <img src="{{ asset('assets/images/timeline_update.svg') }}" class="lg:scale-[1] lg:translate-x-0 lg:translate-y-0 scale-[2.5] translate-x-[13em] translate-y-[3em] md:hidden lg:block">
        <img src="{{ asset('assets/images/timeline-tablet_update.svg') }}" class="hidden lg:hidden md:block">
        </div>
    </div>

    <div id="slogan" class="hidden lg:block md:block">
    <div class="flex flex-col items-center">
        <img src="{{ asset('assets/images/Slogan.svg') }}">
    </div>
    </div>

    <div id="about" class="m-4 mt-[0em] mb-10 flex flex-col gap-5 items-center">
    <img src="{{ asset('assets/images/triangle.svg') }}" class="relative left-[-280px] translate-y-[7em] hidden lg:block scale-100"/>
    <h1 class="text-center text-2xl font-bold border-b-2 border-b-orange-300 pb-3 lg:text-3xl font-montserrat">APA ITU PEMIRA? 🤔</h1>
    <p class="text-center text-sm lg:w-2/3 w-11/12 lg:w-7/12 lg:mt-11 mb-11 font-poppins">Negara Indonesia yang dimana pemimpin terpilih secara demokrasi melalui kegiatan PEMILU atau Pemilihan Umum. Maka dari itu, ITERA menerapkan sistem yang sama yaitu dalam pelimilhan presiden mahasiswa dalam kegiatan PEMIRA. PEMIRA atau Pemilihan Umum Raya adalah pesta demokrasi terbesar yang ada di ITERA. Harapan terlaksananya kegiatan ini adalah untuk menentukan seseorang pemimpin kabinet yang tepat dalam satu tahun periode jabatan ke depan. Pemilihan umum tidak hanya mengingatkan kita tentang hak namun juga tanggung jawab kita sebagai warga negara dalamberdemokrasi. Nah kita sebagai mahasiswa ITERA memiliki hak dan tanggung jawab untuk menyumbangkan suara.</p>
    <iframe class="h-[200px] lg:w-[600px] lg:h-[380px]" src="https://www.youtube.com/embed/Edk9SFzablM?si=H3Bw42UTeOOIYSf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <img src="{{ asset('assets/images/triangle.svg') }}" class="hidden lg:block absolute translate-x-[30em] translate-y-[40em] rotate-[180deg] scale-75 triangle"/>
    </div>

    <div id="faq" class="flex flex-col gap-3 items-center bg-gradient-radial from-orange-100 mb-10">
    <h1 class="text-center text-2xl lg:text-3xl font-bold border-b-2 border-b-orange-300 pb-3 mt-10 text-main-400 font-montserrat">FAQ PEMIRA ITERA</h1>
    <div class="flex flex-col gap-3 ml-5 mr-5 lg:w-5/12">
        <button class="p-3 border-2 border-orange-600 bg-white text-orange-500 rounded-lg flex flex-row justify-between gap-3 font-bold btn-toggle transition ease-in font-montserrat">Bagaimana cara voting? <i data-feather="chevron-down"></i>
        </button>
        <span class="text-main-300 transition ease-out opacity-0 h-0">Pertama, teman-teman klik tombol Ayo Voting! pada halaman ini. Teman - teman akan diarahkan ke website pemilihan. Kemudian, klik mulai voting dan lakukan login akun SSO ITERA. Setelahnya, teman - teman dapat memilih calon yang diinginkan. Untuk lebih detilnya dapat dicek di Youtube PEMIRA KM ITERA.</span>
    </div>
    <div class="flex flex-col gap-3 ml-5 mr-5 lg:w-5/12">
    <button class="p-3 border-2 border-orange-600 bg-white text-orange-500 rounded-lg flex flex-row justify-between gap-3 font-bold btn-toggle transition ease-in font-montserrat">Siapa sajakah calon presiden mahasiswa kali ini? <i data-feather="chevron-down"></i>
    </button>
    <span class="text-main-300 transition ease-out opacity-0 h-0">Kali ini, kita ada 2 calon presidem mahasiswa KM ITERA. Untuk lebih lengkapnya dapat dicek di halaman Capresma di website ini ya.</span>
    </div>
    <div class="flex flex-col gap-3 ml-5 mr-5 lg:w-5/12">
    <button class="p-3 border-2 border-orange-600 bg-white text-orange-500 rounded-lg flex flex-row justify-between gap-3 font-bold btn-toggle transition ease-in font-montserrat">Dimanakah saya dapat melakukan pemilihan? <i data-feather="chevron-down"></i>
    </button>
    <span class="text-main-300 transition ease-out opacity-0 h-0">Pemilihan dapat dilkakukan di Gedung F maupun Gedung Kuliah Umum 1. Untuk lebih lengkapnya dapat dicek di halaman Lokasi Pemilihan di website ini ya. </span>
    </div>
    </div>
    </div>
@endsection
