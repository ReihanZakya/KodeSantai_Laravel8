@extends('layouts.main')

@section('content')
    {{-- HERO SECTION --}}
    <section>
        <div>
            <div class="row w-100% d-flex" style="height: 90vh;">
                <div class="col-lg-6 mybg-white p-5">
                    <div class="container p-5">
                        <div class="myBorder-leftBlue p-2">
                            <div class="fs-1 fw-bold">
                                KodeSantai
                            </div>
                            <div class="fs-4 fw-bold">
                                Pembelajaran Dasar Programmer
                            </div>
                            <button class="myBtn-blue fw-bold"><a href="/categories"
                                    class="text-decoration-none text-white">Mulai Sekarang</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mybg-blue p-5 d-flex align-items-end">
                    <div class="container p-5">
                        <div class="myBorder-rightWhite p-2">
                            <div class="fs-1 fw-bold text-end w-100">
                                Pelajari materi dasar untuk menjadi pengembang yang hebat
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END HERO SECTION --}}

    {{-- KELEBIHAN --}}
    {{-- <section style="background-color: #D3E3FC;">
        <div class="w-full">
            <div class="p-3 row">
                <div class="col-lg-6 d-flex justify-content-center">
                    <button class="myBtn-white fw-bold">
                        <img src={{ 'images/archive.png' }} width="40" class="">
                        Ruang Belajar Terpadu
                    </button>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <button class="myBtn-white fw-bold">
                        <img src={{ 'images/study.png' }} width="40" class="">
                        Belajar Kapanpun
                    </button>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- END KELEBIHAN --}}

    {{-- APA ITU KODESANTAI --}}
    <div class="p-0 m-0">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="mybg-blue p-5" style="height: 100%">
                    <div class="container p-5">
                        <div class="myBorder-leftWhite p-2">
                            <h1 class="fw-bold">Apa Itu KodeSantai</h1>
                        </div>
                        <div class="mt-5">
                            <h2>KodeSantai</h2>
                            <p class="fs-4">adalah platform belajar daring yang dirancang khusus untuk membantu
                                pemula dalam
                                mempelajari pemrograman. Kami menyediakan berbagai materi dan sumber daya yang
                                dirancang secara khusus untuk memandu pengguna dari tingkat dasar hingga kemampuan
                                yang lebih tinggi dalam pemrograman.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="mybg-white p-5" style="height: 100%">
                    <div class="container p-5">
                        <img src={{ 'images/programmer.png' }} class="img-fluid rounded-top" width="80%"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- MULAI PEMBELAJARAN --}}
    <div class="" style="background-color: #F6F6F6;">
        <div class="container py-5">
            <div class="myBorder-leftBlue p-2 my-5">
                <h1 class="fw-bold" style="color: #77A6F7">Mulai Pembelajaran</h1>
            </div>
            <div class="d-flex row justify-content-center gap-5 my-5">
                @foreach ($categories as $category)
                    <div class="card mx-3 my-lg-5 shadow text-center pt-2" style="width: 18rem;">
                        {{-- <img src={{ 'images/ui-ux.png' }} class=" mx-auto m-3" alt="..." width="50%"> --}}
                        <div class="card-body f-lightblue">
                            <h5 class="card-title">{{ $category->name }} Developer</h5>
                            <p class="card-text">{{ $category->description }}</p>
                            <a href="/categories/{{ $category->slug }}" class="text-white text-decoration-none fw-bold">
                                <button class="myBtn-blue fw-bold">
                                    Mulai
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="card mx-3 my-lg-5 shadow" style="width: 18rem;">
                    <img src={{ 'images/ui-ux.png' }} class=" mx-auto m-3" alt="..." width="50%">
                    <div class="card-body f-lightblue">
                        <h5 class="card-title">Frontend Developer</h5>
                        <p class="card-text">Mengembangkan bagian aplikasi web yang berinteraksi dengan pengguna, yaitu
                            hal-hal yang dirender di browser.</p>
                        <button class="myBtn-blue fw-bold">Mulai</button>
                    </div>
                </div>
                <div class="card mx-3 my-lg-5 shadow" style="width: 18rem;">
                    <img src={{ 'images/website.png' }} class=" mx-auto m-3" alt="..." width="50%">
                    <div class="card-body f-lightblue">
                        <h5 class="card-title">Backend Developer</h5>
                        <p class="card-text">Kembangkan bagian yang disembunyikan dari pengguna, mis. hal-hal seperti API.
                            database, mesin pencari, dll.</p>
                        <button class="myBtn-blue fw-bold">Mulai</button>
                    </div>
                </div>
                <div class="card mx-3 my-lg-5 shadow" style="width: 18rem;">
                    <div class="d-flex my-4">
                        <img src={{ 'images/ui-ux.png' }} class=" mx-auto m-3" alt="..." width="30%">
                        <div class="align-items-center my-auto">
                            <h2>+</h2>
                        </div>
                        <img src={{ 'images/website.png' }} class=" mx-auto m-3" alt="..." width="30%">
                    </div>

                    <div class="card-body f-lightblue">
                        <h5 class="card-title">Fullstack Developer</h5>
                        <p class="card-text">Kembangkan sisi frontend dan backend aplikasi web, yaitu seluruh tumpukan
                            pengembangan.</p>
                        <button class="myBtn-blue fw-bold">Mulai</button>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- PILIH TEMA --}}
    <div class="mybg-blue">
        <div class="container py-5">
            <div class="myBorder-leftWhite p-2 my-5">
                <h1 class="fw-bold">Pilih Tema Yang Kamu Inginkan</h1>
            </div>
            <div class="row">
                @foreach ($themes as $theme)
                    <div class="col-lg-3 d-flex justify-content-center">
                        <a href="/themes/{{ $theme->slug }}" class="fw-bold w-100">
                            <button class="myBtn-white shadow fw-bold w-100">
                                {{ $theme->name }}
                            </button>
                        </a>
                    </div>
                @endforeach
                <div class="col-lg-12 d-flex justify-content-center">
                    <button class="myBtn-white fw-bold"><a href="/themes"
                            class="text-decoration-none f-lightblue">Selengkapnya</a></button>
                </div>

            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- TIPS UNTUK PEMULA --}}
    <div class="mybg-white">
        <div class="container py-5">
            <div class="myBorder-leftBlue p-2 my-5">
                <h1 class="fw-bold">Tips Untuk Pemula</h1>
            </div>
            <div class="my-5">
                <div class="accordion bg-white" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item bg-white">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Hindari Tutorial Yang Memusingkan
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Kebiasaan Belajar Konsisten
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Tetapkan Tujuan Yang jelas
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour">
                                Rangkullah Pola Pikir Marathon
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive">
                                Membangun Proyek
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseSix">
                                Belajar Untuk Melepas Diri
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingSix">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseEight">
                                Bergabunglah Dengan Komunitas
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingEight">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
