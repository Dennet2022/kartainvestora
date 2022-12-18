@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>The Real Interest Rate</h1>

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
                The real interest rate is calculated as the difference between the nominal interest rate and the inflation rate.
                The chart above displays the <font class="black"><b>nominal interest rate</b></font> of a 1-year US Treasury bond,
                the US <font color="red"><b>inflation rate</b></font>, and the resulting one-year <font color="blue"><b>real
                        interest rate</b></font>.
                Inflation is defined as the yearly percentage change of the Consumer Price Index (CPI). When inflation is high,
                prices for goods and services rise and thus the purchasing power per unit of currency decreases.
                The chart shows that, adjusted for inflation, the yields on US Treasuries (blue line) have often been negative.
                <br>
                Interestingly, Real Yields are <a href="/gold-vs-real-yields/">negatively correlated with Gold Prices</a>.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Nominal interest rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Robert Shiller Online Data: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Nominal
                            One-Year interest rate - from 1871 until 1929</a></li>
                    <li>Capital Markets Data: <a href="https://www.capitalmarketsdata.com" target="_blank">Nominal One-Year interest
                            rate - from 1929 until 1990</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DGS1"
                                                              target="_blank">Nominal One-Year interest rate - since 1990</a></li>
                </ul>
                <li>Inflation</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Robert Shiller Online Data: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">CPI from
                            1871 until 1913</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/CPIAUCNS" target="_blank">CPI
                            since 1913</a></li>
                </ul>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/9Bqn6hO4/?symbol=FRED%3ADGS10-FRED%3AT10YIE&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">The Real Interest Rate</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/r/realinterestrate.asp" target="_blank">What is a
                        Real Interest Rate?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/i/inflation.asp" target="_blank">What is
                        Inflation?</a></li>
                <li>Longtermtrends: <a href="/m2-money-supply-vs-inflation/" target="_blank">M2 Money Supply vs. Inflation</a>
                </li>
                <li>Longtermtrends: <a href="/us-treasury-yield-curve/" target="_blank">US Treasury Yield Curve</a></li>
                <li>Longtermtrends: <a href="/bond-yield-credit-spreads/" target="_blank">Bond Yield Credit Spreads</a></li>
                <li>Longtermtrends: <a href="/gold-vs-real-yields/">Gold vs. Real Yields</a></li>
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




    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="9KJPfZ1JcG0sBA6W344GB4kXzurXVsMj78svLLPdxIRhEPrjm4uc1DPwANSCxoki">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="real-interest-rate">
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
