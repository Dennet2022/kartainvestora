@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Gold vs. Real Yields</h1>

    </div>

    <div class="container">

        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="chart" id="chart1" style="height: 500px; min-width: 310px">
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
                The chart above plots the <font color="gold"><b>Price of 1 Ounce Of Gold</b></font> and the <font class="black">
                    <b>Inflation-Adjusted 10-year Treasury Yield</b></font>. The <a href="/real-interest-rate/">real interest
                    rate</a> is defined as the difference between the nominal interest rate and the (expected or actual) inflation rate.
                The real yield in the chart above is calculated by subtracting the <a
                    href="https://fred.stlouisfed.org/series/T10YIE" target="_blank">10-Year <i>(expected)</i> Inflation Rate</a>
                from the <a href="https://fred.stlouisfed.org/series/DGS10" target="_blank">10-Year Treasury Constant Maturity
                    Rate</a>.
                <br>
                According to <a href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=2078535" target="_blank">Erb and
                    Harvey</a> the correlation between real interest rates and the price of gold is -0.82. In other words, when real
                yields go down gold goes up. This correlation explains why inflation is gold's best friend while rate hikes are
                its worst enemy.
                <br>
                Here is a possible explanation for this relationship. Rising interest rates also mean rising opportunity costs of
                holding gold. Gold neither pays dividends nor interest. Thus, it is relatively expensive to hold it in the
                portfolio when real interest rates are high. On the other hand, when real yields are negative, holders of cash and
                bonds are losing wealth. In such a scenario, they are more prone to buy gold.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DFII10" target="_blank">10-Year
                        Treasury Inflation-Indexed Security, Constant Maturity</a></li>
                <li>OnlyGold: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Historic Gold
                        prices</a></li>
                <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Recent Gold prices</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/9Bqn6hO4/?symbol=FRED%3ADGS10-FRED%3AT10YIE&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">The Real Interest Rate</a></li>
                <li>SSRN: <a href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=2078535" target="_blank">The Golden
                        Dilemma</a></li>
                <li>Sunshine Profits: <a href="https://www.sunshineprofits.com/gold-silver/dictionary/real-interest-rates-gold/"
                                         target="_blank">Real Interest Rates and Gold</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/r/realinterestrate.asp" target="_blank">What is a
                        Real Interest Rate?</a></li>
                <li>Poket Casts: <a href="https://pca.st/ke1sdyej#t=3206" target="_blank">Adam Robinson on the Angelo Robles
                        Podcast (at 53:26)</a></li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/9Bqn6hO4/?symbol=FRED%3ADGS10-FRED%3AT10YIE&aff_id=27777&offer_id=10"
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
                <h2 id='chart_header'>Using Actual Instead of Expected Inflation</h2>
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
            <h3>Interpretation</h3>
            <p>
                The real yields in this chart are calculated by subtracting the <i>actual</i> inflation rate from the nominal
                interest rates (rather than by subtracting the <i>expected</i> inflation rate). The methodology is described <a
                    href="/real-interest-rate/">here</a> in more detail.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Stooq: <a href="https://stooq.com/q/?s=10usy.b&c=mx&t=l&a=lg&b=0" target="_blank">10-Year Treasury Constant
                        Maturity Rate</a></li>
                <li>1-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Robert Shiller Online Data: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Data until
                            1929</a></li>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            from 1929 until 1990</a> (orginally from <a href="https://www.nber.org/papers/w2472"
                                                                        target="_blank">here</a> and <a href="https://www.nber.org/papers/w2341" target="_blank">here</a>)</li>
                    <li>Quandl: <a href="https://www.quandl.com/data/USTREASURY/YIELD-Treasury-Yield-Curve-Rates"
                                   target="_blank">Data since 1990</a></li>
                </ul>
                <li>Inflation</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Robert Shiller Online Data: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">CPI from
                            1871 until 1913</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/CPIAUCNS" target="_blank">CPI
                            since 1913</a></li>
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



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="ZlKYewQNSVkr9iGaBw3SwXnAMektJNmqXJtEKiEhdXbgcx1xUwtoWwS9NxL8lJUp">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="gold-vs-real-yields">
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
