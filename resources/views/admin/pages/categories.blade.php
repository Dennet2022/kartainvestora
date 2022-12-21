@extends('admin.home')

@section('main')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Categories</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </nav>
            </div>
{{--            <div class="ms-auto">--}}
{{--                <div class="btn-group">--}}
{{--                    <button type="button" class="btn btn-primary">Settings</button>--}}
{{--                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>--}}
{{--                        <a class="dropdown-item" href="javascript:;">Another action</a>--}}
{{--                        <a class="dropdown-item" href="javascript:;">Something else here</a>--}}
{{--                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card border shadow-none w-100 mb-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                        <tr>
                                            <th><input class="form-check-input" type="checkbox"></th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox"></td>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <a href="{{ url(route('admin.categories.edit', $category->id)) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <form id="delete-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="#" onclick="document.getElementById('delete-{{ $category->id }}').submit()" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{--                                <nav class="float-end mt-0" aria-label="Page navigation">--}}
                                {{--                                    <ul class="pagination">--}}
                                {{--                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>--}}
                                {{--                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
                                {{--                                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--                                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </nav>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card border shadow-none w-100 mb-0">
                            <h6 class="mb-0 p-3">Add Category</h6>
                            <div class="card-body">
                                <form class="row g-3" method="POST" action="{{ route('admin.categories.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Category name">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="Category slug">
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Add Category</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

    </main>
@endsection
