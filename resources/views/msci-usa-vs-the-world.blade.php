@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>US Stocks vs. The World</h1>

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
                What is the proportion of the US stock market to the global stock market?
                The ratio in the chart above divides the <font color="red"><b>MSCI USA</b></font> by the <font class="black">
                    <b>MSCI World</b></font> index. When it rises, US stocks outperform the rest of the world - and when it falls,
                US stocks underperform. By definition, this ratio cannot grow forever. At some point, US stocks would simply make
                up 100% of global stocks.
                The chart shows that, since the financial crisis of 2008, US stocks have been outperforming the rest of the world.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>msci.com: <a href="https://www.msci.com/end-of-day-data-search" target="_blank">End of day index data
                        search</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/1glywz11/?symbol=AMEX%3AIVV%2FAMEX%3AURTH&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">US Stocks / World</a></li>
                <li>msci.com: <a href="https://www.msci.com/documents/10199/543ede35-09f9-4fa7-84ad-74e6750b2a42"
                                 target="_blank">MSCI USA Index - Factsheet</a></li>
                <li>Wikipedia: <a href="https://en.wikipedia.org/wiki/MSCI_World" target="_blank">MSCI World</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/1glywz11/?symbol=AMEX%3AIVV%2FAMEX%3AURTH&aff_id=27777&offer_id=10"
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
                <h2>MSCI USA vs. MSCI World Index</h2>
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
                The <font color="red"><b>MSCI USA Index</b></font> is designed to measure the performance of the large and mid cap
                segments of the US market. It covers approximately 85% of the free float-adjusted market capitalization in the US.
                The <font class="black"><b>MSCI World Index</b></font> includes a collection of stocks of all the <a
                    href="/developed-world-stock-market-indices/" target="_blank">developed markets</a> in the world, as defined by
                MSCI.
            </p>
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
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>MSCI USA to ACWI Ratio</h2>
                <div class="chart" id="chart3" style="height: 500px; min-width: 310px">
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
                The ratio in the chart above divides the <font color="red"><b>MSCI USA</b></font> by the <font color="blue">
                    <b>MSCI All Country World Index</b></font> (ACWI) index.
                The MSCI ACWI is a better measure for global equities because it also includes <a
                    href="/emerging-markets-stock-indices/" target="_blank">emerging markets</a>.
                It consists of the <font class="black"><b>MSCI World Index</b></font> and the <a
                    href="https://www.investopedia.com/terms/e/emergingmarketsindex.asp">MSCI Emerging Markets Index</a>.
                However, as of August 2021, emerging markets stocks are only weighted with 11.93%, whereas stocks from developed
                markets account for 88.07%.
                The USA make up 59.84%, followed by Japan (5.84%) and China (4.05%).
                The index is often used as a benchmark for the performance of global equity funds. Unfortunately, it only dates
                back to the year 1988.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>msci.com: <a href="https://www.msci.com/end-of-day-data-search" target="_blank">End of day index data
                        search</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/m/msci-acwi.asp" target="_blank">The MSCI All
                        Country World Index (ACWI)</a></li>
                <li>justETF: <a href="https://www.justetf.com/ch-en/how-to/msci-acwi-etfs.html" target="_blank">Top MSCI ACWI
                        ETFs</a></li>
            </ul>
        </div>
    </div>
    <!-- /.container -->

    <div class="line">
        <hr>
    </div>

    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>S&P 500 vs. MSCI ACWI Index</h2>
                <div class="chart" id="chart4" style="height: 500px; min-width: 310px">
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

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="57JsTOPxJ5MCGnro6cV0dEDmWmHD6LJm3vs8pAD147DrJCMLpclwDd8VXF8iIHhl">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="msci-usa-vs-the-world">
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
