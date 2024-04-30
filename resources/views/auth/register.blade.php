@extends('layouts.main')

@section('content')
    <section class="bg-white">
        <div class="row m-5 shadow">
            <div class="col-md-6 p-0 bg-white">
                <div class="m-5 p-5">
                    <h3 class="f-lightblue fw-bold">Daftar</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label f-lightblue fs-5 fw-semibold">Nama</label>
                            <input type="name" class="form-control text-secondary" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label f-lightblue fs-5 fw-semibold">Username</label>
                            <input type="name" class="form-control text-secondary" aria-describedby="emailHelp" placeholder="Masukkan Username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label f-lightblue fs-5 fw-semibold">Jenis Kelamin</label>
                            <select name="gender" class="form-select" id="">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="">Laki - Laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label f-lightblue fs-5 fw-semibold">Email</label>
                            <input type="email" class="form-control text-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label f-lightblue fs-5 fw-semibold">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
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
                    <h3 class="text-white fw-bold">Sudah Punya Akun? Ayo Masuk</h3>
                </div>
                <div>
                    <a href="/login">
                        <button class="myBtn-white fw-semibold p-2 rounded">Masuk</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
