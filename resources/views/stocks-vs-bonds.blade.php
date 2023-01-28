@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>Stocks vs. Bonds</h1>

    </div>

    <!-- /.container -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>S&P 500 to Bonds Ratio</h2>
                <div class="chart" id="chart1" style="height: 500px; min-width: 310px">
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
            <h3>Interpretation</h3>
            <p>
                Which performed better in the past, Stocks or Bonds?
                The ratio in the chart above divides the S&P 500 by a Total Return Bond Index.
                When the ratio rises, stocks beat bonds - and when it falls, bonds beat stocks.
                <br>
                Stocks are a form of equity and Bonds are a form of debt.
                Equity and debt are the two different ways of financing a company.
                Stocks are riskier than bonds. They represent an ownership stake in a company
                and let you participate in its profits and losses. When the company goes bankrupt
                the shareholders get paid last.
                Whereas stocks pay dividends, bonds pay interest. In contrast to dividends, the interest payments
                on bonds are guaranteed. For this reason bonds are classified as "fixed income" instruments.
                <br>
                Due to its "fixed income" nature, a bond's value is primarily influenced by changes in inflation and interest
                rates.
                A stock's value on the other hand is susceptible to a variety of factors, including changes in earnings growth
                expectations.
            </p>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/8bhrJEfg/?symbol=TVC%3ASPX%2FFRED%3ABAMLCC0A0CMTRIV&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">S&P 500 / Bonds</a></li>
                <li>TheBalance: <a href="https://www.thebalance.com/the-difference-between-stocks-and-bonds-417069"
                                   target="_blank">How Stocks and Bonds Differ and Why It Matters</a></li>
                <li>TheStreet: <a href="https://www.thestreet.com/investing/bonds-vs-stocks-14656707" target="_blank">Bonds vs.
                        Stocks: What's the Difference?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/ask/answers/09/difference-between-bond-stock-market.asp"
                                     target="_blank">Bond Market vs. Stock Market: What's the Difference?</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/8bhrJEfg/?symbol=TVC%3ASPX%2FFRED%3ABAMLCC0A0CMTRIV&aff_id=27777&offer_id=10"
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
                <h2>S&P 500 vs. Total Return Bond Index</h2>
                <div class="chart" id="chart2" style="height: 500px; min-width: 310px">
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
            <h3>Interpretation</h3>
            <p>
                This chart gives a different view of the data from the chart above, comparing the percentage change between
                <font color="red"><b>S&P 500</b></font> and the <font color="orange"><b>Total Return Bond Index</b></font> over
                time.
                <br>
                The Bond Index until 1972 was <a
                    href="https://www.dropbox.com/s/29e5e693b6g41u4/Total%20Return%20Bond%20Index%20Calculation.xlsx?dl=0"
                    target="_blank">calculated</a> using <a href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=3805927"
                                                            target="_blank">Edward McQuarrie's data (pages 38-40)</a>.
                Until 1826 the index consists of federal bonds, until 1850 it's mostly municipal bonds, and until 1897 it's an
                aggregate of federal, municipal and corporate bonds.
                Since 1897 the index is based on <a
                    href="https://www.investopedia.com/ask/answers/what-does-investment-grade-mean/" target="_blank">investment
                    grade</a> corporate bonds.
                <br>
                This version of the <font color="red"><b>S&P 500</b></font> is a price index
                in contrast to <a href="http://www.investopedia.com/terms/t/total_return_index.asp" target="_blank">total return
                    index</a>.
                Therefore, it does not include dividends.
                <font class="black"><b>Including dividends</b></font> leads to a very different picture, which is demonstrated in
                the chart below.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>S&P 500</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">Historical S&P
                            500 Prices</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/SP500" target="_blank">Recent
                            S&P 500 Prices</a></li>
                </ul>
                <li>Total Return Bond Index</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Until 1973: Edward F. McQuarrie, Santa Clara University: <a
                            href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=3805927" target="_blank">Stocks for the Long Run?
                            Sometimes Yes. Sometimes No.</a></li>
                    <li>Since 1973: Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/BAMLCC0A0CMTRIV"
                                                                          target="_blank">ICE BofA US Corporate Index Total Return Index Value</a></li>
                </ul>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>Investopedia: <a href="https://www.investopedia.com/ask/answers/what-does-investment-grade-mean/"
                                     target="_blank">What Does Investment Grade Mean?</a></li>
            </ul>
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
                <h2>Including Dividends: Total Return Stock Index</h2>
                <div class="chart" id="chart3" style="height: 500px; min-width: 310px">
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
            <h3>Interpretation</h3>
            <p>
                The ratio in the chart above consists of total return indices for both stocks and bonds. Therefore, <font
                    class="black"><b>dividend</b></font> payments from stocks are also taken into account.
                The methodology and the data sources for the Total Return Stock Index are described on <a
                    href="/stocks-vs-gold-comparison/">this page</a>.
            </p>
            <h3>Further Information</h3>
            <ul>
                <li>Edward F. McQuarrie: <a href="http://www.edwardfmcquarrie.com/?p=404" target="_blank">Can the Huge Advantage
                        of Stocks over Bonds, Piled Up between 1946 and 1968, Ever Be Diluted Away?</a></li>
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
                <h2>Total Return Stock Index vs. Total Return Bond Index</h2>
                <div class="chart" id="chart4" style="height: 500px; min-width: 310px">
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
        <div class="col-md-12">
            <br>
            <br>
            <p>Special thanks to <a href="https://papers.ssrn.com/sol3/cf_dev/AbsByAuth.cfm?per_id=340720"
                                    target="_blank">Edward F. McQuarrie</a> for generously providing data and advice that led to the creation of
                this page.</p>
        </div>
    </div>




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
