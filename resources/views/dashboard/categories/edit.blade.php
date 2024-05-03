@extends('dashboard.layouts.main')

@section('content')
    <div class="flex-column">
        @include('dashboard.layouts.topbar')
        <div class="w-full" style="width: 85vw">
            <!-- Begin Page Content -->
            {{-- <h1 class="w-full overflow-x-hidden" style="width: 90vw">asu</h1> --}}
            <div class="container-fluid row flex-column">

                <h1 class="h3 mb-2 text-gray-800 mb-3">Edit Kategori</h1>
                <div class="col-md-8">
                    <form id="editForm" action="/dashboard/categories/{{ $category->slug }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" id="name"
                                class="form-control text-capitalize @error('name') is-invalid @enderror"
                                value="{{ old('name', $category->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="slug" id="slug" class="form-control"
                                value="{{ old('slug', $category->slug) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $category->description) }}</textarea>
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
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        document.querySelector('#editForm').addEventListener('submit', function(event) {
            // Menghentikan pengiriman form secara default
            event.preventDefault();
        // name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => {
                    slug.value = data.slug;
                    document.getElementById('editForm').submit();
                });

        });

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
