@extends('layouts.main')

@section('content')
    <section>
        <div class="mybg-blue d-flex justify-content-center">
            <div class="p-5 my-5">
                <h2>Materi Pembelajaran</h2>
            </div>
        </div>
        <div class="container">
            <div class="mybg-white">
                <div class="container py-5">
                    <div class="myBorder-leftBlue p-2 my-5">
                        <h1 class="fw-bold">Ikuti Materi - Materi Berikut</h1>
                    </div>
                    <div class="my-5">
                        <div class="accordion bg-white" id="accordionPanelsStayOpenExample">

                            @foreach ($materials as $material)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                            <button type="" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#{{ $material->slug }}" aria-expanded="false"
                                                aria-controls="{{ $material->slug }}" onclick="sendToLocalStorage('{{ $material->slug }}')">
                                                {{ $material->name }}
                                            </button>
                                    </h2>
                                    <div id="{{ $material->slug }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="btn-group mb-4 text-end" role="group" aria-label="Basic mixed styles example">
                                                <button type="button" class="btn btn-success">Tandai Selesai</button>
                                                <button type="button" class="btn btn-warning text-white">Dalam Progress</button>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="{{ $material->link }}" target="_blank">{{ $material->jdl_link }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($links as $link)
                                <p>{{ $link }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function sendToLocalStorage(slug) {
            // Simpan slug ke local storage
            localStorage.setItem('materialSlug', slug);
        }
    </script>
@endsection
