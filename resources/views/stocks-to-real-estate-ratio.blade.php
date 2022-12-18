@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Stocks vs. Real Estate</h1>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Stocks to Real Estate Ratio</h2>
                <div class="chart" id="chart1" style="height: 500px; min-width: 310px">
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
                The Stocks to Real Estate ratio divides the S&P 500 index by the Case-Shiller Home Price Index.
                Just like <a href="/market-cap-to-gdp-the-buffett-indicator/">Market Cap to GDP</a>, the Stocks to Real Estate
                ratio has an interesting historical track record and clearly shows the stock market bubbles of 1929 and 1999.
                <br>
                The <a href="https://shar.es/aHOMOm" target="_blank">Case-Shiller Home Price Index</a> seeks to measure the price
                of all existing single-family housing stock. Based on the pioneering research of <a
                    href="https://en.wikipedia.org/wiki/Karl_E._Case" target="_blank">Karl E. Case</a> and <a
                    href="https://en.wikipedia.org/wiki/Robert_J._Shiller" target="_blank">Robert J. Shiller</a> the index is
                generally considered the leading measure of U.S. residential real estate prices.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/SP500" target="_blank"> S&P
                            500</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/CSUSHPINSA"
                                                              target="_blank">S&P/Case-Shiller U.S. National Home Price Index</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li>
                    <li>Online Data Robert Shiller: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Historical
                            US Home prices</a></li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/8EKeoCwk/?symbol=TVC%3ASPX%2FFRED%3ACSUSHPINSA&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">S&P 500 / Real Estate</a></li>
                <li>Investopedia: <a
                        href="https://www.investopedia.com/ask/answers/052015/which-has-performed-better-historically-stock-market-or-real-estate.asp"
                        target="_blank">Has Real Estate or the Stock Market Performed Better Historically?</a></li>
                <li>Investopedia: <a href="http://www.investopedia.com/terms/s/sp500.asp" target="_blank">Standard & Poor's 500
                        Index - S&P 500</a></li>
                <li>Investopedia: <a
                        href="https://www.investopedia.com/articles/mortgages-real-estate/10/understanding-case-shiller-index.asp"
                        target="_blank">Understanding the Case-Shiller Housing Index</a></li>
                <li>BIS: <a href="https://www.bis.org/publ/work665.htm">Interest rates and house prices in the United States and
                        around the world</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/8EKeoCwk/?symbol=TVC%3ASPX%2FFRED%3ACSUSHPINSA&aff_id=27777&offer_id=10"
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
        <div class="row">
            <div class="col-md-12">
                <h2 id='chart_header'>S&P 500 vs. the Case-Shiller Home Price Index</h2>
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

    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                This chart plots both the <font color="red"><b>S&P 500</b></font> and the
                <font class="black"><b>Case-Shiller Home Price Index</b></font>.
                Over the long term the S&P 500 clearly outperforms residential property and is more volatile.
                The housing bubble and subsequent stock market crash are clearly visible in the chart.
            </p>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto">
                <img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0">
            </a>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12">
            <br>
            <br>
            <p>Page created by <a href="https://twitter.com/willbeaufoy" target="_blank">Will Beaufoy</a></p>
        </div>
    </div>



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="DY2vaa1O9bzDwa3541hAKeN68NFFRM8bBmLbGWPiudqszposn1H6aNiF966ktIGa">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="stocks-to-real-estate-ratio">
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
