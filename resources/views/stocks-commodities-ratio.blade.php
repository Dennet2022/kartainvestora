@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Stocks to Commodities Ratio</h1>

    </div>

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
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
                The stocks to commodities ratio measures the S&P 500 relative to the commodity market index PPI (Producer Price
                Index). When the ratio rises, stocks beat commodity returns - and when it falls, commotities beat stock returns.
                The chart's yAxis is logarithmic and over the long run stocks clearly outperform commodities.
                <br>
                According to <a href="https://hrcak.srce.hr/file/195625" target="_blank">Baran (2013)</a> stocks and commodities
                are negatively correlated. The main reason is the fact that equities and commodities behave differently during the
                short term credit cycle. Stocks perform better in late recessions and early expansions while commodities
                overperform in late expansions and early recessions. Furthermore, <a
                    href="https://www.yumpu.com/s/1WpqlPfhSgxat8eq" target="_blank">Bannister and Forward (2002)</a> found that
                equities and commodities alternate on leading the market on average every eighten years (<font><b>18-year
                        cycles</b></font>), which also corresponds to deflationary and inflationary cycles.
                Periods of <font color="blue"><b>deflation</b></font> are characterized by a boom in stocks and sound money (i.e.
                gold standard of 1879, Bretton Woods after WW2). These periods are followed by <font color="red"><b>inflation</b></font>, including inflationary events such as the Gold nationalization of 1934, the Nixon shock of 1971, and war
                (WW1, WW2, Vietnam, Iraq). Realizing their position in the cycle, in 2002 <a
                    href="https://www.yumpu.com/s/1WpqlPfhSgxat8eq" target="_blank">Bannister and Forward</a> correctly predicted
                the outperformance of commodities over the following years and the risk of war in the middle east.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/SP500" target="_blank"> S&P
                            500</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/PPIACO"
                                                              target="_blank">Producer Price Index for All Commodities</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li>
                    <li>Historical Statistics of the United States, Colonial Times to 1970: <a
                            href="https://www.census.gov/library/publications/1975/compendia/hist_stats_colonial-1970.html"
                            target="_blank">Commoditiy Index until 1913</a> (<a
                            href="https://www2.census.gov/library/publications/1975/compendia/hist_stats_colonial-1970/hist_stats_colonial-1970p1-chE.pdf"
                            target="_blank">Chapter E, pages 199-201</a>)</li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/fiR6OsKF/?symbol=TVC%3ASPX%2FFRED%3APPIACO&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Stocks to Commodities Ratio</a></li>
                <li>
                    Bannister & Forward, 2002: <a href="https://www.yumpu.com/s/1WpqlPfhSgxat8eq" target="_blank">The Inflation
                        Cycle of 2002 to 2015</a>
                </li>
                <li>
                    Longtermtrends: <a href="/commodity-futures-prices/" target="_blank">Commodity Prices</a>
                </li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/fiR6OsKF/?symbol=TVC%3ASPX%2FFRED%3APPIACO&aff_id=27777&offer_id=10"
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
                <h2 id='chart_header'>S&P 500 vs. the Producer Price Index</h2>
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



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="8xpbSOXXLKHp3cNELUMFNoHPGuAhELcp6V8RoALr6Mye6r814UcbdXcoHN1WgHKo">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="stocks-commodities-ratio">
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
