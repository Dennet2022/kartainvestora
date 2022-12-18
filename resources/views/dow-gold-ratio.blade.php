@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>Dow to Gold Ratio</h1>

    </div>

    <div class="container">

        <!-- /.row -->

        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="chart" id="chart" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                The Dow to Gold ratio indicates the number of ounces of gold it takes to buy the shares in the Dow Jones
                Industrial Average index. The Dow Jones is a stock index that includes 30 large publicly traded companies based in
                the United States. It is one of the oldest and most-watched indices in the world. Turning points in the Dow-gold
                ratio have coincided with turning points in market history: The stock market reached historic highs in 1929, 1966
                and 1999 as the ratio did the same. Likewise, the market sat near historic lows in 1932 and 1980 as the ratio hit
                bottom. The chart below shows the same data on a linear scale.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px; style=" margin-left: 0px";>
                <li>Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/DJIA"
                                                          target="_blank">Dow Jones Industrial Average</a></li>
                <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li>
            </ul>
            <li>Historical data</li>
            <ul class="data" style="margin-left: 0px; style=" margin-left: 0px";>
            <li>Wikipedia: <a href="https://de.wikipedia.org/wiki/Dow_Jones_Industrial_Average" target="_blank">Dow Jones
                    Industrial Average</a></li>
            <li>OnlyGold: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Gold prices</a></li>
            </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/WPPZyDgX/?symbol=TVC%3ADJI%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Dow to Gold Ratio</a></li>
                <li>Investopedia: <a href="http://www.investopedia.com/terms/d/djia.asp" target="_blank">Dow Jones Industrial
                        Average - DJIA</a></li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/WPPZyDgX/?symbol=TVC%3ADJI%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" />
        </div>
    </div>
    <!-- /.container -->

    <div class="line">
        <hr>
    </div>

    <div class="container">
        <!-- Chart Row -->
        <div class="row">
            <div class="col-md-12">
                <h2>The Dow to Gold Ratio on a linear scale</h2>
                <div class="chart" id="chart2" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container -->
    <div class="line">
        <hr>
    </div>
    <div class="container">
        <!-- Chart Row -->
        <div class="row">
            <div class="col-md-12">
                <h2>Dow Jones vs. Gold</h2>
                <div class="chart" id="chart3" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container -->
    <div class="container">

        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                This chart plots both the <font color="blue"><b>Dow Jones</b></font> and the price of <font color="gold"> <b>Gold</b></font>.
                However, it is important to note that the Dow Jones is a price index in contrast to a <a href="http://www.investopedia.com/terms/t/total_return_index.asp"
                                                                                                         target="_blank">total return index</a>. Therefore, it does not include <font class="black"><b>dividends</b></font>. The effect
                of dividens is demonstrated here: <a href="/stocks-vs-gold-comparison/">Stocks vs. Gold and Silver</a>.
            </p>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto">
                <img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0">
            </a>
        </div>
    </div>



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="5kgY6j1tlj0zIfeFwTaUSMXhl2tgxjkb3IZEC5PXGlRoLuz2PTAqilsQmlUV9fSa">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="dow-gold-ratio">
            <button id="buy_btn" type="submit" class="buy-button button chart-button" style="margin-top:5px">Download Data for
                19.95 USD</button>
        </form>

        <a class="a-tag-viewmore" href="/">
            <div class="button chart-button more-charts">
                View More Charts
            </div>
        </a>
        <br>
        <!--
            <small><a id="youtube-link" href="https://youtu.be/Byrpr5VuK6c" target="_blank">How does the payment process work?</a></small>
             -->
    </div>
@endsection
