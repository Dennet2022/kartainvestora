@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>{{ $post->title }}</h1>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $post->content !!}
            </div>
        </div>
    </div>
@endsection
