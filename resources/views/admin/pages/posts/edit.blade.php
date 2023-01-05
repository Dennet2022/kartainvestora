@extends('admin.home')

@section('main')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Post</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
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
                        <h5 class="mb-0">Edit Post</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="POST" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="Title" value="{{ $post->title }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Description" rows="4" cols="4">{{ $post->description }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Category</label>
                                    <select name="category" class="form-select">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @if ($post->category_id === $category->id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input name="slug" type="text" class="form-control" placeholder="Slug" value="{{ $post->slug }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Image Graph OR delete image <input type="checkbox" name="deleteImageGraph" value="1"></label>
                                    <input name="image_graph" class="form-control" type="file" accept="image/*"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Graph</label>
                                    <textarea name="graph" class="form-control" placeholder="Graph" rows="4" cols="4">{{ $post->graph }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Image OR delete image <input type="checkbox" name="deleteImage" value="1"></label>
                                    <input name="image" class="form-control" type="file" accept="image/*">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" id="tiny">{{ $post->content }}</textarea>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/adgc4a84fdi0oohiuhh7jraparx5dpqqkhpqgv81gwpxe7u6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>
    <script>
        $('textarea#tiny').tinymce({
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount advcode editimage tableofcontents footnotes mergetags autocorrect typography',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            height: 500,
        });
    </script>
@endsection
