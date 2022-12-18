@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Oil to Gold Ratio</h1>

    </div>

    <div class="container">
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
                The oil to gold ratio indicates the number of ounces of gold it takes to buy a barrel of oil.
                Similar to the <a href="/copper-gold-ratio/">copper gold ratio</a>, the oil gold ratio is an indicator of the
                health of the global economy. It is recognized as a measure of the volatility that comes from significant
                political and economic events.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DCOILWTICO"
                                                              target="_blank">Oil prices</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>OnlyGold: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Gold prices</a></li>
                    <li>Macrotrends: <a href="https://www.macrotrends.net/1369/crude-oil-price-history-chart" target="_blank">Oil
                            prices</a></li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/AG4WX9Or/?symbol=TVC%3AUSOIL%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Oil to Gold Ratio</a></li>
                <li>
                    <a href="http://seekingalpha.com/article/4028014-gold-oil-ratio-tells-us-impending-crisis-price-gold"
                       target="_blank">The Gold To Oil Ratio: What It Tells Us About An Impending Crisis And The Price Of Gold</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/AG4WX9Or/?symbol=TVC%3AUSOIL%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" />
        </div>
    </div>

    <div class="line">
        <hr>
    </div>

    <!-- /.container -->
    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2 id='chart_header'>Oil vs. Gold</h2>
                <div class="chart" id="chart2" style="height: 500px; min-width: 310px">
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



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="czabvvrFTrVevM6KCIRc44Tiu9Vc8TBOaXTR1hf9etM3y1r7VIhIuDoRvsmRKP9N">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="oil-gold-ratio">
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
