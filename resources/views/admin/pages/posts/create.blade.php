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
                        <li class="breadcrumb-item active" aria-current="page">Add New Post</li>
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
                        <h5 class="mb-0">Add New Post</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="Title">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Description" rows="4" cols="4"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Category</label>
                                    <select name="category" class="form-select">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input name="slug" type="text" class="form-control" placeholder="Slug">
                                </div>

                                <div class="row" id="pasteBeforeMe" style="margin-top:30px; padding: 15px; width:90%; margin-left:10px; border-radius: 10px; background: rgb(200,200,200);">
                                    <strong>Add more content:</strong>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="typeContent">
                                            <option value="image_graph">Image Graph</option>
                                            <option value="graph">Graph</option>
                                            <option value="content">Content</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="button" class="btn btn-success" value="Add content" id="addMoreContent">
                                    </div>
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
        function getRandomInt(max) {
            return Math.floor(Math.random() * max);
        }

        function removeBlock(id) {
            $('#block'+id).remove();
        }

        // $(document).ready(function() {
            $('#addMoreContent').click(function() {
                let typeContent = $('#typeContent').val();
                let pasteBeforeMe = $('#pasteBeforeMe');

                let random1 = getRandomInt(1000000);
                let random2 = getRandomInt(1000000);
                let random4 = getRandomInt(1000000);

                let indexInput = $('.countInput').length + 1;

                let imageGraph = '<div class="col-12" id="block'+ random1 +'"> <label class="form-label">Image Graph</label> <strong style="cursor: pointer;" onClick="removeBlock('+ random1 +')">X</strong> <input name="blocks['+ indexInput +'][image_graph]" class="form-control" type="file" accept="image/*"></textarea> </div>';
                let graph = '<div class="col-12" id="block'+ random2 +'"> <label class="form-label">Graph</label> <strong style="cursor: pointer;" onClick="removeBlock('+ random2 +')">X</strong> <textarea name="blocks['+ indexInput +'][graph]" class="form-control" placeholder="Graph" rows="4" cols="4"></textarea> </div>';
                let content = '<div class="col-12" id="block'+ random4 +'"> <label class="form-label">Content</label> <strong style="cursor: pointer;" onClick="removeBlock('+ random4 +')">X</strong> <textarea class="tiny" name="blocks['+ indexInput +'][content]"></textarea> </div>';

                if (typeContent === 'image_graph') {
                    pasteBeforeMe.before(imageGraph);
                }

                if (typeContent === 'graph') {
                    pasteBeforeMe.before(graph);
                }

                if (typeContent === 'content') {
                    pasteBeforeMe.before(content);

                    tinymce.init({
                        selector: '.tiny',
                        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                        height: 500,
                    });
                }
            });
        // });
    </script>
@endsection
