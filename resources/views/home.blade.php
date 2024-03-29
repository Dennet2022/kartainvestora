@extends('layouts.main')

@section('content')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{--    <script type="text/javascript" src="/static/my_app/js/homepage.js"></script>--}}

    <style>
        #notice-form-submit:hover {
            color: white !important;
        }
    </style>
    <div class="content">

        <!-- HEADER -->
        <div class="header">
            <div class="title">
                <h2>Найдите самые интересные финансовые модели!</h2>
                <p>Наша миссия состоит в том, чтобы найти наиболее интересные и познавательные графики с богатыми историческими данными и сделать их доступными для вас.</p>
            </div>
            <form class="mail notice-form" id="form" action="{{ route('notice') }}" method="post">
                @csrf
                <input name="notice" type="text" maxlength="180" minlength="3" placeholder="Инструмент, Тикер, ISIN" id="notice-input" value="{{ old('notice') }}" autocomplete="off" required>
                @if(auth()->check())
                    <button type="submit" id="notice-form-submit" class="sub button" style="line-height: normal">Отправить</button>
                @else
                    <button id="notice-form-submit" class="sub button disabled" title="Для отправки формы - необходимо залогиниться"
                            style="background: grey; text-decoration: none; cursor: not-allowed; line-height: normal" disabled>Отправить</button>
                @endif
                <span class="" id="verify-msg" style="display:none;"></span>
            </form>
            <div class="images">
                <img src="/static/my_app/images/stocks-vs-bonds.webp" alt="stocks vs. bonds" class="head-img img1">
                <img src="/static/my_app/images/real-interest-rate.webp" alt="The real interest" class="head-img img2">

            </div>
            <div class="featured" bis_skin_checked="1">
                <h5>Наша цель: </h5>
                <div class="financial">
                    Видеть в графиках то, чего не замечают другие.</div>
                <!--<a href="https://www.nytimes.com/2020/04/30/opinion/economy-stock-market-coronavirus.html" target="_blank"
                   class="new-york">The New York Times</a>-->
            </div>
        </div>
    </div>


    <div class="text-center filter">
        <a href="/"><span class="all {{ !isset($categorySlag) ? 'active' : ''}} filter-btn">All</span></a>
        @foreach($categories as $category)
            <a class="category" href="/c/{{ $category->slug }}"><span class="{{ $category->slug }} {{ isset($categorySlag) ? ($categorySlag === $category->slug ? 'active' : '') : ''}} filter-btn">{{ $category->name }}</span></a>
        @endforeach
    </div>

    <div class="row card-cont">
        @foreach($posts as $post)
            <hr>

            <div class="card row">
                @if($post->premium === 1 && auth()->user()?->premium != 1)
                    <a href="{{ route('register') }}">
                        <div class="bg-blur"></div>
                        <div class="lock-svg">
                            <svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="128" height="128" style="opacity:0.3"><path style="stroke:none;fill-rule:evenodd;fill:#000;fill-opacity:1" d="M96 56c9 0 16 7 16 16v32c0 9-7 16-16 16H32c-9 0-16-7-16-16V72c0-9 7-16 16-16V40a32 32 0 0 1 64 0ZM64 19c12 0 21 9 21 21v16H43V40c0-12 9-21 21-21Zm32 48H32c-3 0-5 2-5 5v32c0 3 2 5 5 5h64c3 0 5-2 5-5V72c0-3-2-5-5-5Zm0 0"/></svg>
                            <h1 style="color: #A8A8A8;">Premium</h1>
                        </div>
                    </a>
                @endif
                <strong style="float:left; padding:15px; color:grey; display: block; font-size:15px;">{{ $post->category->name ?? '' }}</strong>
                <strong style="float:right; padding:15px; color:grey; display: block; font-size:15px;">{{ \Carbon\Carbon::parse($post->created_at)->toDateString() }}</strong>
                <h5 class="card-title">
                    {{ $post->title }}
                </h5>
                <div href="{{ url($post->slug) }}">
                    <div class="fotorama" data-allowfullscreen="true">
                        @foreach($post->images as $image)
                            @php
                                $img = str_replace('storage/images/', '', $image->image);
                                $img_webp = str_replace('.jpg', '.webp', $img);
                            @endphp
                            @if(file_exists(storage_path('app/public/images/' . $img_webp)))
                                <img src="{{ asset('storage/images/' . $img_webp) }}" alt="cover">
                            @else
                                <img src="{{ asset('storage/images/' . $img) }}" alt="cover">
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">{!! $post->description !!}</p>
                    <a href="{{ url($post->slug) }}" class="card-btn">
                        <div class="button ">
                            Подробнее
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    @if(session('sweetSuccess'))
    <script>
        swal({
            title: "Отлично!",
            text: "{{ session('sweetSuccess') }}",
            icon: "success",
            button: "Продолжнить",
        });
    </script>
    @endif
@endsection
