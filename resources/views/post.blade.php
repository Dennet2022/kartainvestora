@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>{{ $post->title }}</h1>

    </div>

    <div class="container">

            @foreach(\App\Models\Content::where('post_id', $post->id)->orderBy('sort')->get() as $content)
                @if(!empty($content->image_graph))
                    <div class="row gr">
                        <div class="col-md-12" style="margin: 0 3.6% 20px 3.6%;">
                            <img src="{{ $content->image_graph }}" alt="{{ $content->title }}" style="max-width: 1600px;">
                        </div>
                    </div>
                @endif

                @if(isset($content->graph))
                    <div class="row">
                        <div class="col-md-12" style="margin: 0 3.6% 20px 3.6%;">
                            {!! $content->graph !!}
                        </div>
                    </div>
                @endif

                @if(isset($content->content))
                    <div class="row">
                        <div class="col-md-12" style="margin: 0 3.6% 20px 3.6%;">
                            {!! $content->content !!}
                        </div>
                    </div>
                @endif
            @endforeach

    </div>
@endsection
