@extends('layouts.main')

@section('content')
    <section>
        <div class="mybg-blue d-flex justify-content-center">
            <div class="p-5 my-5">
                <h2>Pilih Tema Yang Ingin Kamu Pelajari</h2>
            </div>
        </div>
        <div class="container">
            <div class="row my-5">
                @foreach ($themes as $theme )
                <div class="col-lg-3 d-flex justify-content-center">
                    <a href="/themes/{{ $theme->slug }}" class="fw-bold w-100">
                        <button class="myBtn-white shadow fw-bold w-100">
                                {{ $theme->name }}
                            </button>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
