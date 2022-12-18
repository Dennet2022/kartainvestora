@extends('layouts.main')

@section('content')
    <div class="header-market market-cap">

        <h1>The Buffett Indicator: Market Cap to GDP</h1>

    </div>
    <!-- /.container -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Wilshire 5000 to GDP Ratio</h2>
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
                Market Cap to GDP is a long-term valuation indicator for stocks. It has become popular in recent years, thanks to
                Warren Buffett. Back in 2001 he remarked in a <a
                    href="http://archive.fortune.com/magazines/fortune/fortune_archive/2001/12/10/314691/index.htm">Fortune
                    Magazine</a> interview that "it is probably the best single measure of where valuations stand at any given
                moment."
                <br>'Market Cap to GDP' is commonly defined as a measure of the total value of all publicly-traded stocks in a
                country, divided by that country’s Gross Domestic Product.
                <br>
                The ratio in the chart above is calculated by dividing the 'Wilshire 5000 Total Market Index' by the US GDP. The
                <font color="orange"><b>Wilshire 5000</b></font> is widely accepted as the definitive benchmark for the US equity
                market and is intended to measure the total market capitalization of all US equity securities with readily
                available price data.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>
                    Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/WILL5000PRFC"
                                                          target="_blank">Wilshire 5000 Full Cap Price Index</a>
                </li>
                <li>
                    Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US
                        Gross Domestic Product</a>
                </li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/6kNR1W2K/?symbol=FRED%3AWILL5000PR%2FFRED%3AGDP&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Wilshire 5000 to GDP Ratio</a></li>
                <li>2015 Berkshire Shareholder Meeting: <a href="https://pca.st/p2v7pmay#t=3745" target="_blank">Warren Buffett on
                        the elevated levels of the indicator (at 01:02:25)</a></li>
                <li>Corporate Finance Institute: <a
                        href="https://corporatefinanceinstitute.com/resources/knowledge/valuation/market-cap-to-gdp-buffett-indicator/"
                        target="_blank">What is the Market Cap to GDP Ratio?</a></li>
                <li>Lyn Alden: <a href="https://www.lynalden.com/market-capitalization/" target="_blank">How Market Capitalization
                        Works (And a Look at Rolling Bubbles)</a></li>
                <li>Wilshire: <a href="https://www.wilshire.com/research-insights/resources-and-forms?Index=FT%20Wilshire%205000%20Index"
                                 target="_blank">Wilshire 5000 Index Fact Sheet</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/g/gdp.asp" target="_blank">What Is Gross Domestic
                        Product (GDP)?</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/graph/fredgraph.png?g=gR4"
                                                          target="_blank">GNP vs. GDP</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/6kNR1W2K/?symbol=FRED%3AWILL5000PR%2FFRED%3AGDP&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
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
                <h2 id='chart_header'>Value of Public and Private Equities to GDP Ratio</h2>
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
                In contrast to the Wilshire 5000, the numerator in the chart above includes the total value of public <i>and
                    private</i> equities.
                However, it only gets published quarterly and therefore is always lagging a bit behind. On the upside, it has data
                going back to the 1940s, thereby providing a more historical perspective.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>
                    Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/BOGZ1LM893064105Q"
                                                          target="_blank">Corporate Equities</a>
                </li>
                <li>
                    Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US
                        Gross Domestic Product</a>
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
    <div class="line">
        <hr>
    </div>

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2>DOW to GDP Ratio</h2>
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
                In contrast to the <font color="orange"><b>Wilshire 5000</b></font>, the <font color="blue"><b>Dow Jones</b></font> only contains 30 publicly traded companies. The index is price-weighted, so stocks with a higher share
                price are given greater weight. For these reasons, it is not as accurate as the Wilshire 5000 for measuring the
                market capitalization.
                However, all these ratios look very similar - and since some calculations for the <font color="blue"><b>Dow
                        Jones</b></font> go back to 1790, this ratio provides an interesting historical perspective.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP"
                                                              target="_blank">US Gross Domestic Product</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/DJIA" target="_blank">Dow
                            Jones</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Congressional Budget Office: <a
                            href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls"
                            target="_blank">Historical Gross Domestic Product</a></li>
                    <li>Wikipedia: <a href="https://de.wikipedia.org/wiki/Dow_Jones_Industrial_Average" target="_blank">Historical
                            Dow Jones prices</a></li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Investopedia: <a href="http://www.investopedia.com/terms/d/djia.asp" target="_blank">Dow Jones Industrial
                        Average - DJIA</a></li>
            </ul>
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
                <h2>S&P 500 to GDP Ratio</h2>
                <div id="chart4" class="chart" style="height: 500px; min-width: 310px">
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
                For comparison purposes the <font color="red"><b>S&P 500</b></font> to GDP ratio is shown here as well. The S&P
                500 consists of 500 large US companies. Just like the <font color="orange"><b>Wilshire 5000</b></font>, it is a <a
                    href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp"
                    target="_blank">capitalization-weighted Index</a>. It captures approximately <a
                    href="http://us.spindices.com/indices/equity/sp-500" target="_blank">80%</a> of the available total market
                capitalization.
                For these reasons, it's a much better measure for 'market cap' than the <font color="blue"><b>Dow Jones</b></font>.
                <br><b>Update:</b> Since 1971, <a href="/us-stock-market-indices/ " target="_blank">the S&P 500 performed almost identically to the Wilshire 5000</a>.
                However, the <font color="red"><b>S&P 500</b></font> is still just a proxy for the total value of all US
                publicly-traded equities and over the long-term it performed differently.
                According to <a href="https://dkuvshinov.com/wp-content/uploads/2018/09/big_bang_latest.pdf" target="_blank">this
                    paper (page A56)</a>, the US market cap to gdp ratio in the late 1800's was around 50%, which is a third of what
                it was during the Dot-com bubble of 2000.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP"
                                                              target="_blank">US Gross Domestic Product</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P
                            500</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Congressional Budget Office: <a
                            href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls"
                            target="_blank">Historical Gross Domestic Product</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>dkuvshinov.com <a href="https://dkuvshinov.com/wp-content/uploads/2018/09/big_bang_latest.pdf"
                                      target="_blank">The Big Bang: Stock Market Capitalization in the Long Run</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/s/sp500.asp" target="_blank">S&P 500 Index –
                        Standard & Poor's 500 Index</a></li>
            </ul>
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
                <h2>S&P 500 vs. GDP</h2>
                <div id="chart5" class="chart" style="height: 500px; min-width: 310px">
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
                As mentioned above, the <font color="red"><b>S&P 500</b></font> captures approximately <a
                    href="http://us.spindices.com/indices/equity/sp-500" target="_blank">80%</a> of available market capitalization.
                Therefore it is quite representative of the entire stock market. Intuitively, the stock market and the overall <b class="black">economy</b>
                should grow with a similar pace.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP"
                                                              target="_blank">US Gross Domestic Product</a></li>
                    <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P
                            500</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Congressional Budget Office: <a
                            href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls"
                            target="_blank">Historical Gross Domestic Product</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li>
                </ul>
            </ul>
        </div>
    </div>
    <!-- /.container -->




    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="3bKhBggVuoJPTWOY9wORqsDoIduaO19h1ztX724pPqAEWb9lswenQ18XJwVPqXHg">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="market-cap-to-gdp-the-buffett-indicator">
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
