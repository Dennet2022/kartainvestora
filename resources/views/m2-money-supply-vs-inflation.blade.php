@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>M2 Money Supply Growth vs. Inflation</h1>

    </div>
    <div class="container">



        <!-- /.row -->

        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div id="chart1" class="chart" style="height: 500px; min-width: 310px">
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
                The "M2 Money Supply", also referred to as "M2 Money Stock", is a measure for the amount of currency in
                circulation. M2 includes M1 (physical cash and checkable deposits) as well as "less liquid money", such as saving
                bank accounts.
                The chart above plots the yearly <font class="black"><b>M2 Growth Rate</b></font> and the <font color="red">
                    <b>Inflation Rate</b></font>, which is defined as the yearly change in the Consumer Price Index (CPI). When
                inflation is high, prices for goods and services rise and thus the purchasing power per unit of currency
                decreases.
                <br>
                Historically, M2 has grown along with the <font color="blue"><b>economy</b></font> (see in the chart below).
                However, it has also grown along with <a href="/us-debt-to-gdp/">Federal Debt to GDP</a> during <i>wars</i> and
                <i>recessions</i>. In most recent history, M2 growth surpassed 10 percent in the crisis of 2001 and 2009, during
                which an expansionary monetary policy was deployed by the central bank, including large scale asset purchases.
                <br>
                According to <a href="https://www.yumpu.com/s/1WpqlPfhSgxat8eq" target="_blank">Bannister and Forward (2002, page
                    28)</a>, Money supply growth and inflation are inexorably linked.
                <!-- The chart shows that inflation often lagged the yearly M2 growth by about 2-4 years. -->
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>M2 Money Stock</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/M2SL" target="_blank">M2
                            Money Stock since 1959</a></li>
                    <li>United States Census Bureau: <a
                            href="https://www.census.gov/library/publications/1975/compendia/hist_stats_colonial-1970.html"
                            target="_blank">Historical Statistics of the United States, Colonial Times to 1970</a> (<a
                            href="https://www2.census.gov/library/publications/1975/compendia/hist_stats_colonial-1970/hist_stats_colonial-1970p2-chX.pdf"
                            target="_blank">M2 Money Stock until 1959, Chapter X, pages 992-993</a>).
                        Following <a href="https://www.yumpu.com/s/1WpqlPfhSgxat8eq" target="_blank">Bannister and Forward (page
                            28)</a>, M2 prior to 1959 is <a href="https://www.dropbox.com/s/8areriurrxs4te8/M2%20calculation.xlsx?dl=0"
                                                            target="_blank">calculated</a> by adding "Currency held by the public" + "Deposits adjusted, commercial
                        banks" + "Bank vault cash" + "Monetary gold stock" + "Deposits at nonbank thrift institutions"</li>
                </ul>
                <li>Inflation</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/CPIAUCNS" target="_blank">CPI
                            since 1913</a></li>
                    <li>Robert Shiller Online Data: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">CPI from
                            1871 until 1913</a></li>
                </ul>
                <li>US Gross Domestic Product</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP"
                                                              target="_blank">US Gross Domestic Product</a></li>
                    <li>Congressional Budget Office: <a
                            href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls"
                            target="_blank">Historical Gross Domestic Product</a></li>
                </ul>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/m/m2.asp" target="_blank">What is M2?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/i/inflation.asp" target="_blank">What is
                        Inflation?</a></li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/?offer_id=10&aff_id=27777&file_id=855" target="_blank"
               id="tradingview_banner_link"><img
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
                <h2 id='chart_header'>M2 Money Supply vs. CPI and GDP</h2>
                <div id="chart2" class="chart" style="height: 500px; min-width: 310px">
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
    <div class="line">
        <hr>
    </div>
    <!-- /.container -->
    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2 id='chart_header'>Velocity of M2</h2>
                <div id="chart3" class="chart" style="height: 500px; min-width: 310px">
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
                The velocity of money is a measurement of the rate at which money is exchanged in an economy.
                High money velocity is usually associated with a healthy, expanding economy. Low money velocity is usually
                associated with recessions and contractions.
                According to the <a href="https://www.investopedia.com/terms/q/quantity_theory_of_money.asp/"
                                    target="_blank">Quantity Theory of Money</a>, inflation depends on the money supply and its velocity. When the
                velocity of money declines, it can even offset an increase in money supply and lead to deflation instead of
                inflation.
            </p>

            <h3>Further Information</h3>
            <ul>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/v/velocity.asp" target="_blank">Velocity of
                        Money</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/q/quantity_theory_of_money.asp/"
                                     target="_blank">Quantity Theory of Money</a></li>
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

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="ml4zoMCxDeAr3WNJZc0YFFNTeRmzswGjkJNfUyq1Ygrg6b86icqu5eisfaNe4sei">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="m2-money-supply-vs-inflation">
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
