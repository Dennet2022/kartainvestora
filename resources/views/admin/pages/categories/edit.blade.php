@extends('admin.home')

@section('main')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
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

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">Edit Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="POST" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Title" value="{{ $category->name }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input name="slug" type="text" class="form-control" placeholder="Title" value="{{ $category->slug }}">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </main>
@endsection
