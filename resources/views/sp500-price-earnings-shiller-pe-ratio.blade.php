@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>S&P 500 PE Ratio</h1>

    </div>

    <div class="container">

        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div id="chart" class="chart" style="height: 500px; min-width: 310px">
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
                The price earnings ratio is calculated by dividing a company's stock price by it's earnings per share.
                In other words, the price earnings ratio shows what the market is willing to pay for a stock based on its current
                earnings. It is
                one of the most widely-used valuation metrics for stocks. The PE ratio of the S&P 500 divides the index (current
                market price) by
                the reported earnings of the trailing twelve months. In 2009 when earnings fell close to zero the ratio got out of
                whack. A solution
                to this phenomenon is to divide the price by the average inflation-adjusted earnings of the previous 10 years. In
                recent years, Yale professor <a href="https://en.wikipedia.org/wiki/Robert_J._Shiller">Robert Shiller</a>,
                he author of Irrational Exuberance, has reintroduced this adjusted ratio to a wider audience of investors. The
                Shiller PE Ratio of
                the S&P 500 is illustrated below.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>
                    Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_PE_RATIO_MONTH-S-P-500-PE-Ratio-by-Month"
                               target="_blank">S&P 500 PE Ratio by Month</a>
                </li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/8bLWmTKq/?symbol=QUANDL%3AMULTPL%2FSHILLER_PE_RATIO_MONTH&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">S&P 500 Shiller PE Ratio</a></li>
                <li>
                    Investopedia: <a href="https://www.investopedia.com/terms/p/price-earningsratio.asp"
                                     target="_blank">Price-to-Earnings Ratio – P/E Ratio</a>
                </li>
                <li>
                    Investopedia: <a href="https://www.investopedia.com/terms/s/sp500.asp" target="_blank">S&P 500 Index – Standard
                        & Poor's 500 Index</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/8bLWmTKq/?symbol=QUANDL%3AMULTPL%2FSHILLER_PE_RATIO_MONTH&aff_id=27777&offer_id=10"
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
                <h2>The Shiller PE Ratio</h2>
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
    <!-- /.container -->

    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                Instead of dividing by the earnings of <i>one</i> year (see chart above), this ratio divides the price of the S&P
                500 index by the average inflation-adjusted earnings of the previous 10 years. The ratio is also known as the
                Cyclically Adjusted PE Ratio (CAPE Ratio), the Shiller PE Ratio, or the P/E10.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>
                    Quandl: <a href="https://www.quandl.com/data/MULTPL/SHILLER_PE_RATIO_MONTH-Shiller-PE-Ratio-by-Month"
                               target="_blank">Shiller PE Ratio by Month</a>
                </li>

            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>
                    Robert Shiller's online data collection and further information about his PE ratio: <a
                        href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Link</a>
                </li>
                <li>
                    Wikipedia: <a href="https://en.wikipedia.org/wiki/Cyclically_adjusted_price-to-earnings_ratio"
                                  target="_blank">Cyclically adjusted price-to-earnings ratio</a>
                </li>
                <li>
                    Topdown Charts: <a
                        href="https://www.topdowncharts.com/post/2020/05/12/broken-indicators-the-forward-pe-and-the-peg"
                        target="_blank">Broken Indicators: The Forward PE and the PEG</a>
                </li>
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

        <button id="dwnload_btn" class="download-xls button chart-button">Download xls</button>

        <a class="a-tag-viewmore" href="/">
            <div class="button chart-button more-charts">
                View More Charts
            </div>
        </a>
        <br>
        <!--  -->
    </div>
@endsection
