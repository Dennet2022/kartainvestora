@extends('admin.home')

@section('main')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Notices</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="d-flex">
                        <div class="card border shadow-none w-100 mb-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Notice</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($notices as $notice)
                                            <tr>
                                                <td>{{ $notice->id }}</td>
                                                <td>{{ $notice->user?->name }}</td>
                                                <td>{{ $notice->notice }}</td>
                                                <td>{{ $notice->created_at->format('H:i d F Y') }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <form id="delete-{{ $notice->id }}" action="{{ route('admin.notices.destroy', $notice->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="#" onclick="document.getElementById('delete-{{ $notice->id }}').submit()" class="text-danger" data-bs-toggle="tooltip"
                                                               data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

    </main>

{{--    <script>--}}
{{--        $('textarea#tiny').tinymce({--}}
{{--            height: 500,--}}
{{--            menubar: false,--}}
{{--            plugins: [--}}
{{--                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',--}}
{{--                'anchor', 'searchreplace', 'visualblocks', 'fullscreen',--}}
{{--                'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'--}}
{{--            ],--}}
{{--            toolbar: 'undo redo | blocks | bold italic backcolor | ' +--}}
{{--                'alignleft aligncenter alignright alignjustify | ' +--}}
{{--                'bullist numlist outdent indent | removeformat | help'--}}
{{--        });--}}
{{--    </script>--}}
@endsection
