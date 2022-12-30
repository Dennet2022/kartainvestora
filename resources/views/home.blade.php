@extends('layouts.main')

@section('content')
    <script type="text/javascript" src="/static/my_app/js/homepage.js"></script>
    <div class="content">


        <!-- HEADER -->
        <div class="header">
            <div class="title">
                <h2>Найдите самые интересные финансовые графики!</h2>
                <p>Наша миссия состоит в том, чтобы найти наиболее интересные и познавательные диаграммы с богатыми историческими данными и сделать эти диаграммы доступными для вас.</p>
            </div>
            <form class="mail" id="form">
                <input placeholder="Ежемесячное обновление" id="email-subscribe-input" onkeydown="validation()"
                       class="">
                <div id="email-subscribe-submit" class="sub button">Подписаться</div>
                <span class="" id="verify-msg" style="display:none;"></span>
            </form>
            <div class="images">
                <img src="/static/my_app/images/stocks-vs-bonds.png" alt="stocks vs. bonds" class="head-img img1">
                <img src="/static/my_app/images/real-interest-rate.png" alt="The real interest" class="head-img img2">

            </div>
            <div class="featured" bis_skin_checked="1">
                <h5>Наша цель: </h5>
                <a class="financial">
                    Видеть то, чего не замечают другие</a>
                <a href="https://www.nytimes.com/2020/04/30/opinion/economy-stock-market-coronavirus.html" target="_blank"
                   class="new-york">The New York Times</a>
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

            <div class="card  row">
                <h5 class="card-title">{{ $post->title }}</h5>
                <a href="{{ url($post->slug) }}">
                    <img class="card-img rounded img-fluid " src="/{{ $post->image }}" alt="{{ $post->title }}">
                </a>
                <div class="card-body">
                    <p class="card-text">{!! $post->description !!}</p>
                    <a href="{{ url($post->slug) }}" class="card-btn">
                        <div class="button ">
                            View chart
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
