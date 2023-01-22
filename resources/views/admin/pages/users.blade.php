@extends('admin.home')

@section('main')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Users</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100 mb-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                        <tr>
                                            <th><input class="form-check-input" type="checkbox"></th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Premium</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox"></td>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if(!$user->premium)
                                                        <svg class="text-danger" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 11c2 0 3 1 3 3v6c0 1-1 3-3 3H6c-2 0-3-2-3-3v-6c0-2 1-3 3-3V8a6 6 0 1 1 12 0v3Zm-6-7c2 0 4 1 4 4v3H8V8c0-3 2-4 4-4Zm6 9H6l-1 1v6l1 1h12l1-1v-6l-1-1Z" fill="currentColor"/></svg>
                                                    @else
                                                        <svg class="text-success" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19 7h-2a4 4 0 0 0-8 0v3h9c2 0 3 1 3 3v6c0 2-1 3-3 3H6c-2 0-3-1-3-3v-6c0-2 1-3 3-3h1V7a6 6 0 1 1 12 0Zm-1 5H6l-1 1v6l1 1h12l1-1v-6l-1-1Z" fill="currentColor"/></svg>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <a href="{{ url(route('admin.users.edit', $user->id)) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <form id="delete-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="#" onclick="document.getElementById('delete-{{ $user->id }}').submit()" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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
                </div><!--end row-->
            </div>
        </div>

    </main>
@endsection
