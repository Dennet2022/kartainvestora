@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Stocks vs. Gold and Silver</h1>

    </div>
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
                Which was the best investment in the past 30, 50, 80, or 100 years? This chart compares the performance of the
                <font color="red"><b>S&P 500</b></font>, the <font color="blue"><b>Dow Jones</b></font>, <font color="gold">
                    <b>Gold</b></font>, and <font color="silver"><b>Silver</b></font>. The <font color="blue"><b>Dow Jones</b></font> is a stock index that includes 30 large publicly traded companies based in the United States. It is one of
                the oldest and most-watched indices in the world.
                The <font color="red"><b>S&P 500</b></font> consists of 500 large US companies, it is <a
                    href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp"
                    target="_blank">capitalization-weighted</a>, and it captures approximately <a
                    href="http://us.spindices.com/indices/equity/sp-500" target="_blank">80%</a> of available market capitalization.
                For these reasons it is more representative of the US stock market than the Dow Jones.
                Both versions of these indices are price indices in contrast to <a
                    href="http://www.investopedia.com/terms/t/total_return_index.asp" target="_blank">total return indices</a>.
                Therefore, they do not include dividends. Including dividends leads to a very different picture, which is
                demonstrated in the chart below.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="https://fred.stlouisfed.org/series/DJIA" target="_blank">Dow Jones</a></li>
                    <li><a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P 500</a></li>
                    <li><a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li>
                    <li><a href="https://www.quandl.com/data/LBMA/SILVER" target="_blank">Silver prices</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="https://www.quandl.com/data/BCB/UDJIAD1" target="_blank">Dow Jones</a></li>
                    <li><a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li>
                    <li><a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Gold prices</a></li>
                    <li><a href="https://www.macrotrends.net/1470/historical-silver-prices-100-year-chart" target="_blank">Silver
                            prices</a></li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Longermtrends: <a href="/dow-gold-ratio/">Dow to Gold ratio since 1792</a></li>
                <li>Longermtrends: <a href="/gold-silver-ratio/">Gold to Silver Ratio</a></li>
                <li>Investopedia: <a href="http://www.investopedia.com/terms/s/sp500.asp" target="_blank">Standard & Poor's 500
                        Index - S&P 500</a></li>
                <li>Investopedia: <a href="http://www.investopedia.com/terms/d/djia.asp" target="_blank">Dow Jones Industrial
                        Average - DJIA</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/fEPAMKwE/?symbol=TVC%3ADJI&aff_id=27777&offer_id=10" target="_blank"
               id="tradingview_banner_link"><img
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
                <h2>Including Dividends: Total Return Stock Index</h2>
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
                In contrast to the <font color="red"><b>S&P 500 Price Index</b></font> and the <font color="blue"><b>Dow Jones</b></font>, the <font class="black"><b>Wilshire Large-Cap</b></font> is a <a
                    href="http://www.investopedia.com/terms/t/total_return_index.asp" target="_blank">total return index</a>, in
                which all resulting cash payouts (including dividends) are automatically reinvested back into the fund itself.
                Therefore, it includes all capital gains and it allows for an accurate performance comparison with <font
                    color="gold"><b>Gold</b></font> and <font color="silver"><b>Silver</b></font>.
                <br>
                Unfortunately, the <font class="black"><b>Wilshire Large-Cap</b></font> only dates back to 1978.
                For this reason the <font class="black"><b>S&P 500 Total Return</b></font> from 1871 until 1977 was <a
                    href="https://www.dropbox.com/s/dgwp8zw3zxpx7q8/SP500%20Total%20Return.xlsx?dl=0" target="_blank">calculated</a>
                based on <a href="http://www.econ.yale.edu/~shiller/data/chapt26.xlsx" target="_blank">Robert Shiller's data</a>
                and added to the Wilshire index. Both indices are very similar. While the S&P 500 includes 500 companies, the
                Wilshire Large-Cap includes 750 companies. Both indices are <a
                    href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp"
                    target="_blank">capitalization-weighted</a> and both are considered benchmarks for large-cap stocks.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>
                    Online Data Robert Shiller: <a href="http://www.econ.yale.edu/~shiller/data/chapt26.xlsx" target="_blank">long
                        term stock, bond, interest rate and consumption data</a>
                </li>
                <li>
                    <a href="https://www.dropbox.com/s/dgwp8zw3zxpx7q8/SP500%20Total%20Return.xlsx?dl=0" target="_blank">Excel
                        Calculation for the S&P 500 Total Return since 1871</a>
                </li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLLRGCAP"
                                                          target="_blank">Wilshire US Large-Cap Total Market Index</a></li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>
                    <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Robert Shiller's online data collection</a>
                </li>
                <li>
                    <a href="https://www.indexologyblog.com/2017/02/07/index-basics-calculating-an-indexs-total-return/"
                       target="_blank">Index Basics: Calculating an Index’s Total Return</a>
                </li>
                <li>Wilshire: <a href="https://www.wilshire.com/research-insights/resources-and-forms?Index=FT%20Wilshire%20Large%20Cap%20Index"
                                 target="_blank">Wilshire Large-Cap Index Fact Sheet</a></li>
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
