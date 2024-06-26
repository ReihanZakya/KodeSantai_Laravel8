@extends('dashboard.layouts.main')

@section('content')

<div class="flex-column">
    @include('dashboard.layouts.topbar')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kelola Materi</h1>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Materi
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $materials->count() }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="mt-3 font-weight-bold text-primary">Data Materi</h6>
                <a href="">
                    <button class="btn btn-primary">
                        Tambah
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Tema</th>
                                <th>Slug</th>
                                <th>Judul Link</th>
                                <th>Link</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Tema</th>
                                <th>Slug</th>
                                <th>Judul Link</th>
                                <th>Link</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($materials as $material )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $material->name }}</td>
                                <td>{{ $material->theme_id }}</td>
                                <td>{{ $material->slug }}</td>
                                <td>{{ $material->jdl_link }}</td>
                                <td>{{ $material->link }}</td>
                                <td>{{ $material->created_at }}</td>
                                <td>{{ $material->updated_at }}</td>
                                <td class="d-flex">
                                    <a href="" class="mx-2">
                                        <button class="btn btn-warning">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                    </a>
                                    <a href="" class="mx-2">
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>
@endsection
