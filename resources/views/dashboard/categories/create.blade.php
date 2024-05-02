@extends('dashboard.layouts.main')

@section('content')
    <div class="row flex-column my-4 container-fluid">
        <h1 class="h3 mb-2 text-gray-800 mb-3">Tambah Kategori</h1>
        <div class="col-md-8">
            <form action="/dashboard/categories" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                        aria-describedby="emailHelp">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    {{-- <label class="form-label">Slug</label> --}}
                    <input type="hidden" name="slug" id="slug" class="form-control" value="{{ old('slug') }}"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea type="text" name="description" class="form-control" value="{{ old('description') }}"
                        aria-describedby="emailHelp"></textarea>
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
