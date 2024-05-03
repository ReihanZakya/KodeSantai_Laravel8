@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.layouts.topbar')
<div class="w-full" style="width: 90vw">
        <!-- Begin Page Content -->
        {{-- <h1 class="w-full overflow-x-hidden" style="width: 90vw">asu</h1> --}}
        <div class="container-fluid row flex-column">

                <h1 class="h3 mb-2 text-gray-800 mb-3">Tambah Kategori</h1>
                <div class="col-md-8">
                    <form action="/dashboard/categories" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" id="name"
                                class="form-control text-capitalize @error('name') is-invalid @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="slug" id="slug" class="form-control"
                                value="{{ old('slug') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
        </div>
        <!-- /.container-fluid -->
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
