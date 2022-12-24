@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>{{ $post->title }}</h1>

    </div>

    <div class="container">

        @if(!empty($post->image_graph))
            <div class="row">
                <div class="col-md-12" style="display: flex; justify-content: center; margin: 20px 0;">
                    <img src="{{ $post->image_graph }}" alt="{{ $post->title }}" style="width: 70%;">
                </div>
            </div>
        @endif

        @if(isset($post->graph))
            <div class="row">
                <div class="col-md-12" style="margin: 20px 0;">
                    {!! $post->graph !!}
                </div>
            </div>
        @endif

        @if(isset($post->content))
            <div class="row">
                <div class="col-md-12">
                    {!! $post->content !!}
                </div>
            </div>
        @endif

    </div>
@endsection
