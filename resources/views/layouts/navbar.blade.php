    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg shadow sticky-top mybg-blue">
        <div class="container-fluid p-3 mx-3">
            <a class="navbar-brand text-white fw-bold" href="#">KodeSantai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    @auth
                        <ul class="navbar-nav">
                            <!-- Default dropstart button -->
                            <div class="btn-group dropstart me-3">
                                <a class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">
                                        <h6 class="dropdown-header text-primary">
                                            Pengumuman
                                        </h6>
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div>
                                                <div class="small text-gray-500">December 12, 2019</div>
                                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div>
                                                <div class="small text-gray-500">December 12, 2019</div>
                                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div>
                                                <div class="small text-gray-500">December 12, 2019</div>
                                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <li class="nav-item dropdown ms-auto">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome back, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a class="nav-link" aria-current="page" href="/dashboard">My dashboard <i
                                                class="bi bi-layout-text-sidebar-reverse"></i></a>
                                    </li>
                                    <li class="dropdown-item">
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="dropdown-item">
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="nav-link" aria-current="page" href="/">
                                                Logout
                                                <i class="bi bi-box-arrow-right"></i>
                                            </button type="submit">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <a href="/login" class="text-decoration-none f-lightblue">
                            <button class="myBtn-white fw-bold rounded py-1 px-2 m-0">
                                Masuk
                            </button>
                        </a>
                    @endauth


                </div>
            </div>
        </div>
    </nav>
    {{-- END NAVBAR --}}
