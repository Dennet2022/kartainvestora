@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Real Estate to Gold Ratio</h1>

    </div>

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="chart" id="chart" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
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
                The real estate to gold ratio measures the amount of gold it takes to buy a single family house.
                Based on the pioneering research of
                <a href="https://en.wikipedia.org/wiki/Robert_J._Shiller" target="_blank">Robert J. Shiller</a>
                and
                <a href="https://en.wikipedia.org/wiki/Karl_E._Case" target="_blank">Karl E. Case</a>,
                the <a href="https://shar.es/aHOMOm" target="_blank">Case-Shiller Home Price Index</a> is generally considered the
                leading measure of U.S. residential
                real estate prices.
                The index has a base of Jan 2000=100 and is multiplied by 1800 in order approximate the
                <a href="https://fred.stlouisfed.org/graph/?g=CpFW" target="_blank">Average Sales Price of Houses Sold for the
                    United States</a>.
                <br>
                The ratio has an interesting historical track record for identifying turning points in long-term gold price
                trends. When exatly is one of the assets "cheap" and what is "expensive"? Answering that question is where the
                Gold/Housing ratio is quite useful. As there is no dollar component in the ratio itself, inflation concerns drop
                out, and we are left with the value of two of the most popular tangible investments relative to each other.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/CSUSHPISA"
                                                              target="_blank">S&P/Case-Shiller U.S. National Home Price Index</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Online Data Robert Shiller: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Home
                            Prices</a></li>
                    <li>Onlygold.com: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Gold prices</a>
                    </li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/ERgewzoY/?symbol=FRED%3ACSUSHPINSA%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Real Estate to Gold Ratio</a></li>
                <li>
                    Mike Maloney on Youtube: <a href="https://youtu.be/lOiQgC8Q9Ck" target="_blank">Silver & Gold vs. Real Estate</a>
                </li>
                <li>BIS: <a href="https://www.bis.org/publ/work665.htm">Interest rates and house prices in the United States and
                        around the world</a></li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/ERgewzoY/?symbol=FRED%3ACSUSHPINSA%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" alt="img" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" alt="img" />
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
                <h2 id='chart_header'>Gold vs. the Case-Shiller Home Price Index</h2>
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

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="VwXrnaEZwQatMXp3pRh1GxsRTRX8VR1xTUG7TWstRS1iPcKqIRHx66XqUaoNxNzw">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="real-estate-gold-ratio">
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
