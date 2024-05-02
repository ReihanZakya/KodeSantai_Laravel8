@extends('layouts.main')

@section('content')
    <section class="bg-white">
        <div class="row m-5 shadow">
            <div class="col-md-6 p-0 bg-white">
                <div class="m-5 p-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h3 class="f-lightblue fw-bold">Masuk</h3>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label f-lightblue fs-5 fw-semibold">Email</label>
                            <input type="email" name="email"
                                class="form-control text-secondary @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Masukkan Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label f-lightblue fs-5 fw-semibold">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Masukkan Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 fst-italic text-secondary">
                            <p>Lupa Password? <span><a href="">Klik Disini</a></span></p>
                        </div>
                        <button type="submit" class="myBtn-blue rounded p-2">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mybg-blue d-flex flex-column justify-content-center align-items-center p-0">
                <div class="">
                    <h1 class="text-white fw-bold">Selamat Datang</h1>
                </div>
                <div class="mb-5">
                    <h3 class="text-white fw-bold">Belum Punya Akun? Ayo Daftar</h3>
                </div>
                <div>
                    <a href="/register">
                        <button class="myBtn-white fw-semibold p-2 rounded">Daftar</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
