@extends('dashboard.layouts.main')

@section('content')

<div class="flex-column">
    @include('dashboard.layouts.topbar')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="mt-3 font-weight-bold text-primary">Data Kategori</h6>
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
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($themes as $theme )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $theme->name }}</td>
                                <td>{{ $theme->slug }}</td>
                                <td>{{ $theme->category_id }}</td>
                                <td>{{ $theme->created_at }}</td>
                                <td>{{ $theme->updated_at }}</td>
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
