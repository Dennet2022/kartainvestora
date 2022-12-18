@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Nasdaq to S&P 500 Ratio</h1>

    </div>


    <!-- /.container -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="chart" id="chart1" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
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
                    What is the proportion of the Nasdaq to the overall US stock market?
                    The ratio in the chart above divides the <font class="black"><b>Nasdaq Composite Index</b></font> by the <font
                        color="red"><b>S&P 500</b></font>. When it rises, the Nasdaq outperforms the S&P 500 - and when it falls, the
                    Nasdaq underperforms. By definition, this ratio cannot grow forever. At some point, the stocks listed on the
                    Nasdaq Exchange would simply make up 100% of the US stock market.
                    <br>The ratio peaked in the year 2000, during the Dot-com mania.
                </p>
                <h3>Data Sources</h3>
                <ul>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/SP500" target="_blank">Recent
                            S&P 500 prices</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/NASDAQCOM"
                                                              target="_blank">NASDAQ Composite Index</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">Historical S&P
                            500 prices</a></li>
                </ul>
                <h3>Further Information</h3>
                <ul>
                    <li>TradingView Chart: <a
                            href="https://www.tradingview.com/chart/MELPRFIJ/?symbol=TVC%3ANDX%2FTVC%3ASPX&aff_id=27777&offer_id=10"
                            target="_blank" id="tradingview_text_link">Nasdaq / S&P 500</a></li>
                    <li>Investopedia: <a href="http://www.investopedia.com/terms/s/sp500.asp" target="_blank">Standard & Poor's 500
                            Index - S&P 500</a></li>
                    <li>Investopedia: <a href="https://www.investopedia.com/terms/n/nasdaqcompositeindex.asp" target="_blank">Nasdaq
                            Composite Index</a></li>
                    <li>Longermtrends: <a href="/us-stock-market-indices/">US Stock Market Indices</a></li>
                </ul>
            </div>
            <div class="col-md-4 side-content">
                <a href="https://www.tradingview.com/chart/MELPRFIJ/?symbol=TVC%3ANDX%2FTVC%3ASPX&aff_id=27777&offer_id=10"
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
                    <h2>Nasdaq vs. S&P 500</h2>
                    <div class="chart" id="chart2" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->


        <div class="container">
            <div class="col-md-8">
                <h3>Interpretation</h3>
                <p>
                    The <font class="black"><b>NASDAQ Composite</b></font> tracks the performance of all common equities listed on
                    the NASDAQ stock market exchange.<br>
                    The <font color="red"><b>S&P 500</b></font> consists of 500 large US companies and captures approximately <a
                        href="http://us.spindices.com/indices/equity/sp-500" target="_blank">80%</a> of available market
                    capitalization. Therefore, it is quite representative of the overall US stock market and moves almost
                    identically to the <a href="/us-stock-market-indices/ " target="_blank">Wilshire 5000</a>.
                    <br>
                    Both indices are <a href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp"
                                        target="_blank">capitalization-weighted</a> and do not include dividends.
                </p>
            </div>
            <div class="col-md-4 side-content">
                <a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto">
                    <img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0">
                </a>
            </div>
        </div>
        <!-- /.container -->




        <div class="group-buttons">
            <br>

            <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="K3LWuoB8Y5ITjO6XpzHW8JLwcjlDfD25IruC0apCj7zIm3rkIz7syig5dCMiRzA4">
                <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="nasdaq-vs-sp500">
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
