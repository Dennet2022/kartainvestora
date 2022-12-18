@extends('layouts.main')

@section('content')

    <!-- Page Content -->
    <div class="header-market price">

        <h1>Emerging vs. Developed Markets</h1>

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
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                Which performed better in recent years, emerging or developed market equities?
                The ratio in the chart above divides the <font color="red"><b>MSCI Emerging Markets Index</b></font> by the <font
                    class="black"><b>MSCI World Index</b></font>. "MSCI" (formerly Morgan Stanley Capital International) has been
                constructing and maintaining these indices since the late 1960s. Both indices are commonly used as performance
                benchmarks for equity funds.
                When the ratio rises, emerging markets outperform developed markets - and when it falls, developed markets
                outperform emerging markets. The ratio peaked in 1994 and 2010 - and it bottomed in 2001, during the Dot-com
                mania.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>MSCI: <a href="https://www.msci.com/end-of-day-data-search" target="_blank">End of day index data search</a>
                </li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/5vpejWId/?symbol=AMEX%3AEEM%2FAMEX%3AURTH&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Emerging vs. Developed Markets</a></li>
                <li>MSCI: <a href="https://www.msci.com/documents/10199/c0db0a48-01f2-4ba9-ad01-226fd5678111"
                             target="_blank">Factsheet for the MSCI Emerging Markets Index</a></li>
                <li>MSCI: <a href="https://www.msci.com/documents/10199/178e6643-6ae6-47b9-82be-e1fc565ededb"
                             target="_blank">Factsheet for the MSCI World Index</a></li>
                <li>Wikipedia: <a href="https://en.wikipedia.org/wiki/MSCI_World" target="_blank">MSCI World Index</a></li>
                <li>Investopia: <a href="https://www.investopedia.com/terms/e/emergingmarketsindex.asp" target="_blank">MSCI
                        Emerging Markets Index</a></li>
                <li>Investopia: <a href="https://www.investopedia.com/terms/e/emergingmarketeconomy.asp" target="_blank">What is
                        an 'Emerging Market Economy'?</a></li>
                <li>Investopia: <a href="https://www.investopedia.com/terms/d/developed-economy.asp" target="_blank">What is a
                        'Developed Economy'?</a></li>
                <li>Longermtrends: <a href="/emerging-markets-stock-indices/" target="_blank">Emerging Market Indices</a></li>
                <li>Longermtrends: <a href="/developed-world-stock-market-indices/" target="_blank">Developed World Stock Market
                        Indices</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/5vpejWId/?symbol=AMEX%3AEEM%2FAMEX%3AURTH&aff_id=27777&offer_id=10"
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
                <h2>MSCI Emerging Markets vs. MSCI World Index</h2>
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
                This chart gives a different view of the same data from the ratio above.
                <br>The <font color="red"><b>MSCI Emerging Markets Index</b></font> consits of 26 <a
                    href="/emerging-markets-stock-indices/" target="_blank">developing economies</a>. As of October 2020, the index
                is most heavily weighted in China at 42.24%, Taiwan at 12.67%, and South Korea at 11.0%.
                <br>The <font class="black"><b>MSCI World Index</b></font> consists of 23 <a
                    href="/developed-world-stock-market-indices/" target="_blank">developed economies</a>. As of October 2020, the
                index is most heavily weighted in the Unites States at 66.8%, Japan at 7.98%, and the United Kingdom at 3.96%.
                <br>Both indices are <a href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp"
                                        target="_blank">capitalization-weighted</a> and do not include dividends.
            </p>
        </div>
    </div>
    <!-- /.container -->





    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="VOjvHDSW6CvA9MUmGmFQtIfCXe8wkLhTTc2bdpGqrEmpc1fJZm5mThKbYxzbWHPS">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="emerging-vs-developed-markets">
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
