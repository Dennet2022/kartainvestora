@extends('layouts.main')

@section('content')

    <div class="header-market price">

        <h1>Gold to Silver Ratio</h1>

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
                The gold silver ratio represents the number of silver ounces it takes to buy a single ounce of gold. Historically
                speaking, the gold silver ratio has rested somewhere between 15 and 10 to 1, reflecting the average supply of each
                metal. There were times throughout the history of money where the ratio was even lower — China once had a 4 to 1
                ratio and the ancient Egyptians even had a 1 to 1 ratio at one point.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>
                    Quandl.com (unfortunately no longer available): <a href="https://www.quandl.com/data/MWORTH/10_3"
                                                                       target="_blank">Historical data until 1968</a>
                </li>
                <li>
                    Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Recent Gold prices</a>
                </li>
                <li>
                    Quandl: <a href="https://www.quandl.com/data/LBMA/SILVER" target="_blank">Recent Silver prices</a>
                </li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/SNdRkhup/?symbol=TVC%3AGOLDSILVER&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Gold to Silver Ratio</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/articles/trading/09/gold-silver-ration.asp"
                                     target="_blank">Trading the Gold-Silver Ratio</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/SNdRkhup/?symbol=TVC%3AGOLDSILVER&aff_id=27777&offer_id=10"
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

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2 id='chart_header'>Gold vs. Silver</h2>
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

    <div class="container">
        <div class="col-md-8">
            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/LBMA/SILVER" target="_blank">Silver prices</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>OnlyGold: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Gold prices</a></li>
                    <li>Macrotrends: <a href="https://www.macrotrends.net/1470/historical-silver-prices-100-year-chart"
                                        target="_blank">Silver prices since 1915</a></li>
                    <li>Denver Gold Group: <a
                            href="https://www.denvergold.org/precious-metal-prices-charts/historical-silver-prices/"
                            target="_blank">Silver prices until 1915</a></li>
                </ul>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto">
                <img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0">
            </a>
        </div>
    </div>
    <!-- /.container -->

    <div class="line">
        <hr>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2 id='chart_header'>Gold/Silver vs. the US Dollar Index</h2>
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
    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                Interestingly, the gold silver ratio correlates quite strongly with the <font class="black"><b>US Dollar index</b></font>, which measures the strength of the US Dollar relative to foreign currencies.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DTWEXAFEGS"
                                                          target="_blank">Since 2006: Trade Weighted U.S. Dollar Index: Advanced Foreign Economies, Goods and Services
                    </a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DTWEXM" target="_blank">Until
                        2006: Trade Weighted U.S. Dollar Index: Major Currencies, Goods (DISCONTINUED)
                    </a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Wikipedia: <a href="https://en.wikipedia.org/wiki/Trade-weighted_US_dollar_index"
                                  target="_blank">Trade-weighted US dollar index</a></li>
            </ul>
        </div>
    </div>




    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="YvB2j7iLbHE2kLOBvg0bxWb52kRGMxFwWTkIPT6fwJvRn09YOgqHXvGE3Dilotdv">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="gold-silver-ratio">
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
