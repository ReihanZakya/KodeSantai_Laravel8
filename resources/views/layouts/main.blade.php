<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- NAVBAR --}}
    {{-- <nav class="navbar navbar-expand-lg shadow sticky-top mybg-blue">
        <div class="container-fluid p-3 mx-3">
            <a class="navbar-brand text-white fw-bold" href="#">KodeSantai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    <nav class="navbar navbar-expand-lg shadow sticky-top mybg-blue">
        <div class="container-fluid p-3 mx-3">
            <a class="navbar-brand text-white fw-bold" href="#">KodeSantai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('themes*') ? 'active' : '' }}"
                            href="/themes">Tema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('categories*') ? 'active' : '' }}"
                            href="/categories">Kategori</a>
                    </li>
                </ul>

                <div>
                    <a href="/login" class="text-decoration-none f-lightblue">
                        <button class="myBtn-white fw-bold rounded py-1 px-2 m-0">
                            Masuk
                        </button>
                    </a>


                </div>
            </div>
        </div>
    </nav>
    {{-- END NAVBAR --}}


    @yield('content')



    {{-- FOOTER --}}
    <footer class="footer" style="background-color: #77A6F7;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 style="font-weight: bold;">KodeSantai</h5>
                    <p>Kp. Ramenasia RT 01 RW 03, Ds. Konohagakure
                        Kec. Narumi, Kab. Inazuma
                        Email : kodesantai@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h5 style="font-weight: bold;">Menu</h5>
                    <ul>
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 3</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 style="font-weight: bold;">Ikuti Kami</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa-brands fa-github"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr style="border-color: white;">
            <p class="text-center text-white">Copyright &copy; 2024 KodeSantai. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/0b55ba9d36.js" crossorigin="anonymous"></script>
</body>

</html>
