@extends('layouts.main')

@section('content')
    <section>
        <div class="mybg-blue d-flex justify-content-center">
            <div class="p-5 my-5">
                <h2>Pilih Kategori Yang Ingin Kamu Pelajari</h2>
            </div>
        </div>
        <div class="container">
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
    </section>
@endsection
