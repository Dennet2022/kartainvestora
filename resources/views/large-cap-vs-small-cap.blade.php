@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Large-cap vs. Small-cap Stocks</h1>

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
                <!-- todo -->
                Which performed better in recent years, large-cap or small-cap stocks? Differentiating between these
                characteristics is a popular way to segment the US stock market (next to <a
                    href="/growth-stocks-vs-value-stocks/">growth and value</a>).
                The term 'cap' refers to market capitalization and is calculated by multiplying the price of a stock by its number
                of shares outstanding.<br>
                <b>Large-cap stocks</b> are generally considered as less risky. These tend to be companies that are very stable
                and dominate their industry.<br>
                <b>Small-cap stocks</b> are generally considered to be riskier and more profitable than large-cap stocks. Many
                small caps are young companies with significant growth potential but also a higher risk of failure.<br>
                The ratio in the chart above divides the <a href="https://fred.stlouisfed.org/series/WILLLRGCAP"
                                                            target="_blank">Wilshire US Large-Cap Index</a> by the <a href="https://fred.stlouisfed.org/series/WILLSMLCAP"
                                                                                                                      target="_blank">Wilshire US Small-Cap Index</a>. When the ratio rises, large-cap stocks outperform small-cap
                stocks - and when it falls, small-cap stocks outperform large-cap stocks. The ratio peaked in 1999 during the
                dot-com mania.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLLRGCAP"
                                                          target="_blank">Wilshire US Large-Cap Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLSMLCAP"
                                                          target="_blank">Wilshire US Small-Cap Total Market Index</a></li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/yAcqXK6H/?symbol=TVC%3ARUI%2FTVC%3ARUT&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Large-cap / Small-cap</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/insights/understanding-small-and-big-cap-stocks/"
                                     target="_blank">Understanding Small- And Big-Cap Stocks</a></li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/yAcqXK6H/?symbol=TVC%3ARUI%2FTVC%3ARUT&aff_id=27777&offer_id=10"
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
        <div class="row">

            <div class="col-md-12">
                <h2 id='chart_header'>Small-cap/Large-cap vs. Inflation</h2>
                <div class="chart" id="chart3" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                Interestingly, the Small-cap/Large-cap ratio correlates quite strongly with the <font class="black"><b>10-Year (expected) Inflation Rate</b></font>, which is calculated as the difference between the
                <a href="https://fred.stlouisfed.org/series/DGS10" target="_blank">Treasury Rate</a> and the
                <a href="https://fred.stlouisfed.org/series/DFII10" target="_blank">TIPS Rate</a>.<br>
                According to <a href="https://youtu.be/1u0sXj2ZTgk" target="_blank">Aswath Damodaran</a>, historically, small-cap stocks have outperformed large-cap stocks during periods of high inflation, such as the 1970s.
                It appears that small-cap companies have more flexibility to adjust to inflation. In a <a href="https://www.joincolossus.com/episodes/75305584/damodaran-teaching-the-world-finance?tab=transcript" target="_blank">podcast</a> he explained, "the more established you are as a company, the more your business model has already been set, the more adjustment is involved when inflation hits you, because you got to change the way you do business."
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/T10YIE" target="_blank">10-Year Breakeven Inflation Rate</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Aswath Damodaran: <a href="https://aswathdamodaran.blogspot.com/2022/05/a-follow-up-on-inflation-disparate.html"
                                         target="_blank">A Follow up on Inflation: The Disparate Effects on Company Values!</a></li>
                <li>Lietaer.com: <a href="https://www.lietaer.com/2022/02/what-is-the-10-year-breakeven-inflation-rate/"
                                    target="_blank">What Is The 10 Year Breakeven Inflation Rate?</a></li>
                <li>Invest Like the Best Podcast: <a href="https://www.joincolossus.com/episodes/75305584/damodaran-teaching-the-world-finance?tab=transcript"
                                                     target="_blank">Aswath Damodaran - Making Sense of the Market</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto">
                <img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0">
            </a>
        </div>
    </div>

    <div class="line">
        <hr>
    </div>

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2>The Wilshire Large-cap and Small-cap Indices</h2>
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
                Together, the components of the Wilshire US Large-Cap Index, Wilshire US Small-Cap Index and Wilshire US Micro-Cap
                comprise the Wilshire 5000 without gaps or overlaps.<br>
                The <font color="orange"><b>Wilshire 5000</b></font> is the broadest of all listed indices on this page. It
                measures the performance of all U.S. equity securities with readily available price data.<br>
                The <font class="black"><b>Wilshire Large-Cap</b></font> includes the top 750 ranked components of the Wilshire
                5000 index measured by market capitalization.<br>
                The <font color="#20B2AA"><b>Wilshire Mid-Cap</b></font> includes the components between 500 and 1000 measured by
                market capitalization. Therefore it's considered a benchmark for mid-cap stocks. The components of the Wilshire US
                Mid-Cap are the bottom 250 Wilshire US Large-Cap securities and the top 250 Wilshire US Small-Cap securities by
                capitalization.<br>
                The <font color="#FF0000"><b>Wilshire Small-Cap</b></font> includes the components between 750 and 2500 measured
                by market capitalization.<br>
                The <font color="#FA8072"><b>Wilshire Micro-Cap</b></font> includes the components ranked below 2500 measured by
                market capitalization.<br>
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILL5000IND"
                                                          target="_blank">Wilshire 5000 Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLLRGCAP"
                                                          target="_blank">Wilshire US Large-Cap Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLMIDCAP"
                                                          target="_blank">Wilshire US Mid-Cap Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLSMLCAP"
                                                          target="_blank">Wilshire US Small-Cap Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLMICROCAP"
                                                          target="_blank">Wilshire US Micro-Cap Total Market Index</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Wilshire: <a href="https://www.wilshire.com/solutions/indexes-products"
                                 target="_blank">FT Wilshire 5000 Index Series</a></li>
            </ul>

        </div>
    </div>
    <!-- /.container -->




    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="1eL9NHuLoGlkomFU4PexLDB5cPnKc416ZCuPjtifJIc9rB0hnPE3bc6Ed8OpO0z5">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="large-cap-vs-small-cap">
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
