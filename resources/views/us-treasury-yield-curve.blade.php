@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>US Yield Curve</h1>

    </div>
    <!-- /.container -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>US Treasury Bond Yield Spreads</h2>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="chart" id="chart1" style="height:300px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="chart" id="chart2" style="height:300px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="chart" id="chart6" style="height:300px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="chart" id="chart3" style="height:300px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="chart" id="chart4" style="height:300px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="chart" id="chart5" style="height:300px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <!-- <div id="container6"  style="height:300px"><div id="loading-animation"><span class="glyphicon glyphicon-refresh glyphicon-spin"></span> Loading...</div></div> -->
        </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                The charts above display the spreads between long-term and short-term US Government Bond Yields. The flags mark
                the beginning of a recession according to <a
                    href="https://en.wikipedia.org/wiki/List_of_recessions_in_the_United_States" target="_blank">Wikipedia</a>.
                <br>
                A negative spread indicates an <font class="black"><b>inverted yield curve</b></font>. In such a scenario
                short-term interest rates are higher than long-term rates, which is often considered to be a <font class="black">
                    <b>predictor of an economic recession</b></font>.
                Typically the spread between long-term and short-term bond yields is positive, with investors demanding more
                compensation to hold a bond for a longer period given the increased risk of inflation and other uncertainties.
                <br>
                According to <a href="https://alhambrainvestments.com/yield-curve/" target="_blank">Alhambra investments</a>, when
                short-term rates are higher than long-term rates (when the yield curve is inverted), it usually means that
                investors expect short-term rates to fall. Short-term rates fall when economic growth is weak, which is why an
                inverted curve is associated with recessions. Furthermore, the inversion is not the only important observation.
                Right before the recession, the yield curve starts to steepen. That happens because the market starts to
                anticipate multiple rate cuts from the Federal Reserve and short-term rates fall faster than long-term rates.
            </p>

            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/laxzSxqR/?symbol=FRED%3ADGS10-FRED%3ADGS2&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">The Yield Curve</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/g/government-bond.asp" target="_blank">What Is a
                        Government Bond?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/y/yieldcurve.asp" target="_blank">What Is a Yield
                        Curve?</a></li>
                <li>Wikipedia: <a href="https://en.wikipedia.org/wiki/List_of_recessions_in_the_United_States"
                                  target="_blank">List of recessions in the United States</a></li>
                <li><a href="https://ssrn.com/abstract=249992" target="_blank">The Yield Curve as a Predictor of U.S.
                        Recessions</a></li>
                <li>Alhambra investments: <a href="https://alhambrainvestments.com/yield-curve/" target="_blank">The Yield Curve
                        And What It Means</a></li>
                <li>On The Margin: <a href="https://pca.st/s7qezk5q#t=859" target="_blank">Can the FED control the Yield Curve?</a></li>
                <li>Longtermtrends: <a href="/real-interest-rate/" target="_blank">The Real Interest Rate</a></li>
                <li>Longtermtrends: <a href="/bond-yield-credit-spreads/" target="_blank">Bond Credit Yield Spreads</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/laxzSxqR/?symbol=FRED%3ADGS10-FRED%3ADGS2&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" alt="img" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" alt="img" />
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
                <div class="chart" id="chart" style="height:500px">
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
            <h3>Data Sources</h3>
            <ul>
                <li>3-Month Treasury Bill Secondary Market Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/TB3MS"
                                                              target="_blank">Data until 1954</a> (Monthly)</li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/dtb3"
                                                              target="_blank">Data since 1954</a></li>
                </ul>
                <li>1-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Robert Shiller Online Data: <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Data until
                            1929</a></li>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            from 1929 until 1990</a> (orginally from <a href="https://www.nber.org/papers/w2472"
                                                                        target="_blank">here</a> and <a href="https://www.nber.org/papers/w2341" target="_blank">here</a>)</li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DGS1"
                                                              target="_blank">Data since 1990</a></li>
                </ul>
                <li>2-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            until 1990</a> (orginally from <a href="https://www.nber.org/papers/w2472" target="_blank">here</a> and <a
                            href="https://www.nber.org/papers/w2341" target="_blank">here</a>)</li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DGS2"
                                                              target="_blank">Data since 1990</a></li>
                </ul>
                <li>3-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            until 1990</a> (orginally from <a href="https://www.nber.org/papers/w2472" target="_blank">here</a> and <a
                            href="https://www.nber.org/papers/w2341" target="_blank">here</a>)</li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DGS3"
                                                              target="_blank">Data since 1990</a></li>
                </ul>
                <li>5-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            until 1990</a> (orginally from <a href="https://www.nber.org/papers/w2472" target="_blank">here</a> and <a
                            href="https://www.nber.org/papers/w2341" target="_blank">here</a>)</li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DGS5"
                                                              target="_blank">Data since 1990</a></li>
                </ul>
                <li>10-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Stooq: <a href="https://stooq.com/q/?s=10usy.b&c=mx&t=l&a=lg&b=0" target="_blank">Data since 1871</a></li>
                </ul>
                <li>20-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Capital Markets Data: <a
                            href="https://www.capitalmarketsdata.com/p/135-interest-rates-money-and-capital.html" target="_blank">Data
                            until 1990</a> (orginally from <a href="https://www.nber.org/papers/w2472" target="_blank">here</a> and <a
                            href="https://www.nber.org/papers/w2341" target="_blank">here</a>)</li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DGS20"
                                                              target="_blank">Data since 1990</a></li>
                </ul>
                <li>30-Year Treasury Constant Maturity Rate</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Stooq: <a href="https://stooq.com/q/?s=30usy.b&c=mx&t=l&a=lg&b=0" target="_blank">Data since 1947</a></li>
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
                the data that led to the development of this page.
            </p>
        </div>
    </div>



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="z5od7XMHRAGG46LvpSaLBqS88Nhshoxext7TDJAbcCxv7l6SISAh1ZnH96I7Tk5d">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="us-treasury-yield-curve">
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
