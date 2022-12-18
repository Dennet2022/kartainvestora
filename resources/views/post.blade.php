@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>{{ $post->title }}</h1>

    </div>

    {!! $post->content !!}
@endsection
