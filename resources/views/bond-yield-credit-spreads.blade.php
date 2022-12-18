@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Bond Yield Credit Spreads</h1>

    </div>
    <!-- /.container -->

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="chart" id="chart1" style="height:350px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="chart" id="chart2" style="height:350px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="chart" id="chart3" style="height:350px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="chart" id="chart4" style="height:350px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div>

    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                The charts above display the yield spreads between Corporate Bonds, Treasury Bonds, and Mortgages.
                All bonds in this comparison have long maturity dates. Therefore, the main differentiator is the underlying
                <b>credit risk</b> - in contrast to the the <b>duration</b>, which is the differentiator on the <a
                    href="/us-treasury-yield-curve/" target="_blank">Yield Curve</a> page. The credit spreads tend to widen in
                economic recessions and indicate an increased risk of default as well as <a
                    href="https://www.researchgate.net/publication/4992750_Corporate_Yield_Spreads_and_Bond_Liquidity"
                    target="_blank">reduced liquidity</a> in the market.
            </p>

            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/kUaD3Qc0/?symbol=%27QUANDL%3AML%2FBBBEY%27-%27QUANDL%3AML%2FAAAEY%27&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Credit Spreads</a></li>
                <li>Long Chen, David A. Lesmond, and Jason Wei: <a
                        href="https://www.researchgate.net/publication/4992750_Corporate_Yield_Spreads_and_Bond_Liquidity"
                        target="_blank">Corporate Yield Spreads and Bond Liquidity</a></li>
                <li>Financial Pipeline: <a href="https://www.finpipe.com/bond-spreads/" target="_blank">What Are Bond Spreads?</a>
                </li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/y/yieldspread.asp" target="_blank">What Is a Yield
                        Spread? </a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/g/government-bond.asp" target="_blank">What Is a
                        Government Bond?</a></li>
                <li>Longtermtrends: <a href="/real-interest-rate/" target="_blank">The Real Interest Rate</a></li>
                <li>Longtermtrends: <a href="/us-treasury-yield-curve/" target="_blank">US Yield Curve</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/kUaD3Qc0/?symbol=%27QUANDL%3AML%2FBBBEY%27-%27QUANDL%3AML%2FAAAEY%27&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" />
        </div>
    </div>
    <!-- /.container -->

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2>Yields for Corporate Bonds, Treasury Bonds and Mortgages</h2>
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
                The chart above gives a different view of the same data from the spreads above.
                <br>The <font class="black"><b>30-Year Fixed Rate Mortgage Rate</b></font> is the average rate based on mortgages
                with a 30 year duration in the United States. The data since 1971 is provided by Freddie Mac.
                <br>The <font color="blue"><b>Baa Corporate Bond Yield</b></font> series is based on Baa rated bonds with
                maturities 20 years and above. Baa rated bonds and higher (according to Moody's <a
                    href="https://en.wikipedia.org/wiki/Bond_credit_rating" target="_blank">credit rating</a>) are considered "<a
                    href="https://www.investopedia.com/ask/answers/what-does-investment-grade-mean/" target="_blank">investment
                    grade</a>".
                <br>The <font color="red"><b>Aaa Corporate Bond Yield</b></font> series is based on Aaa rated bonds with
                maturities 20 years and above. Aaa is the highest <a href="https://en.wikipedia.org/wiki/Bond_credit_rating"
                                                                     target="_blank">credit rating</a> issued by Moody's.
                <br>The <font color="orange"><b>10-Year US Treasury Constant Maturity Rate</b></font> is the interest that the US
                Government pays when it issues a Treasury Bond with a duration of 10 years. Debt issued by the US Government is
                generally considered to be free of credit risk, as the probability of default is almost non-existent. The spreads
                between Treasury Bonds with different durations are examined on the <a href="/us-treasury-yield-curve/"
                                                                                       target="_blank">Yield Curve</a> page.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Aaa Corporate Bond Yield</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            from 1857 until 1918</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/AAA" target="_blank">Data
                            from 1919 until 1996</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/BAMLC0A1CAAAEY" target="_blank">Data
                            since 1997</a></li>
                </ul>
                <li>Baa Corporate Bond Yield</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            from 1919 until 1985</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DBAA" target="_blank">Data
                            since 1986</a></li>
                </ul>
                <li>30-Year Fixed Rate Mortgage Average in the United States</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">1919
                            until 1985</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/MORTGAGE30US"
                                                              target="_blank">Data since 1971</a></li>
                </ul>
                <li>10-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Stooq: <a href="https://stooq.com/q/?s=10usy.b&c=mx&t=l&a=lg&b=0" target="_blank">Data since 1871</a></li>
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

    <div class="container">
        <div class="col-md-12">
            <br>
            <br>
            <p>Special thanks to <a href="https://www.linkedin.com/in/stevensabol/" target="_blank">Steven Sabol</a>, creator of
                <a href="https://www.capitalmarketsdata.com" target="_blank">Capital Markets Data</a>, for generously providing
                the data that led to the development of this page.</p>
        </div>
    </div>



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="mzhDcaTP999xeKXWFnfdzytvgGEFn0V0kX0jIWHjub0mhZijYnFJZ7Y4hZ5kZWtZ">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="bond-yield-credit-spreads">
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
