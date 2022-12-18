@extends('layouts.main')

@section('content')

    <!-- <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Page currently broken</h4>
          </div>
          <div class="modal-body">
            <p>Unfortunately, the data source is no longer available due to contract negociations between FTSE Russell and FRED: <a href="https://news.research.stlouisfed.org/2019/09/russell-data-to-be-removed-from-fred/" target="_blank">https://news.research.stlouisfed.org/2019/09/russell-data-to-be-removed-from-fred/</a>
              <br>
              <br>
              I'm currently looking for an alternative data source and aim to bring back these charts as soon as possible.
              <br>
              <br>
              <img class="img-responsive img-hover" src="/static/my_app/images/growth-stocks-vs-value-stocks.png" alt=">Growth vs. Value Stocks">
            </p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="/">View Other Charts</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> -->
    <div class="header-market price">

        <h1>Growth vs. Value Stocks</h1>

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
                Which performed better in recent years, growth stocks or value stocks? Differentiating between these
                characteristics is a popular way to segment the US stock market (next to <a
                    href="/large-cap-vs-small-cap/">segmentation by market capitalization</a>). <b>Value stocks</b> can be roughly
                described as "bargains". These stocks are usually associated with low <a
                    href="/sp500-price-earnings-shiller-pe-ratio/">P/E</a>, low P/B, low price/cash flow, and a high <a
                    href="/sp500-dividend-yield/">dividend yield</a>. <b>Growth stocks</b> are the exact opposite. They are
                considered expensive measured by a variety of metrics. These stocks generally do not pay dividends, as the
                companies usually want to reinvest any earnings in order to keep growing at certain rates. <br>
                Value and growth investing are opposing strategies. A stock prized by a value investor might be considered
                worthless by a growth investor and vice versa. Value investors seek to profit as the price returns to its “fair
                value" while growth investors are looking for "winners" and focus on competitive advantages. <br>
                <!-- Growth investors are willing to pay higher prices for these companies because their earnings are growing faster than those of most other companies - and are expected to continue to grow.  -->
                The ratio in the chart above divides the <a href="https://fred.stlouisfed.org/series/WILLLRGCAPGR"
                                                            target="_blank">Wilshire US Large-Cap Growth Index</a> by the <a
                    href="https://fred.stlouisfed.org/series/WILLLRGCAPVAL" target="_blank">Wilshire US Large-Cap Value Index</a>.
                When the ratio rises, growth stocks outperform value stocks - and when it falls, value stocks outperform growth
                stocks. The ratio peaked in 2000, during the dot-com mania.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLLRGCAPGR"
                                                          target="_blank">Wilshire US Large-Cap Growth Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLLRGCAPVAL"
                                                          target="_blank">Wilshire US Large-Cap Value Total Market Index</a></li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/A3huMXas/?symbol=RUSSELL%3ARAG%2FRUSSELL%3ARAV&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Growth / Value</a></li>
                <li>Two Centuries Investments: <a
                        href="https://www.twocenturies.com/blog/2020/5/11/value-investing-even-deeper-history" target="_blank">Value
                        Investing: Even Deeper History</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/g/growthstock.asp" target="_blank">What is a 'Growth
                        Stock'</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/v/valuestock.asp" target="_blank">What is a 'Value
                        Stock'</a></li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/A3huMXas/?symbol=RUSSELL%3ARAG%2FRUSSELL%3ARAV&aff_id=27777&offer_id=10"
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

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2 id='chart_header'>The Wilshire Growth & Value Indices</h2>
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
                The <b>Wilshire Large-Cap</b> includes the top 750 ranked components of the Wilshire 5000 index measured by market
                capitalization.<br>
                The <b>Wilshire Mid-Cap</b> includes the components between 500 and 1000 measured by market capitalization.
                Therefore it's considered a benchmark for mid-cap stocks.<br>
                The <b>Wilshire Small-Cap</b> includes the components between 750 and 2500 measured by market capitalization.<br>
                Wilshire further divides these indices into <b>growth</b> and <font color="red"><b>value</b></font>, which are
                defined by looking at six factors: projected price-to-earnings ratio, projected earnings growth, price-to-book
                ratio, dividend yield, trailing revenue growth and trailing earnings growth.
                All indices are <a href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp"
                                   target="_blank">capitalization-weighted</a> and they are <a
                    href="http://www.investopedia.com/terms/t/total_return_index.asp" target="_blank">total return indices</a>,
                which include reinvested dividends.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLLRGCAPGR"
                                                          target="_blank">Wilshire US Large-Cap Growth Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLLRGCAPVAL"
                                                          target="_blank">Wilshire US Large-Cap Value Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLMIDCAPGR"
                                                          target="_blank">Wilshire US Mid-Cap Growth Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLMIDCAPVAL"
                                                          target="_blank">Wilshire US Mid-Cap Value Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLSMLCAPGR"
                                                          target="_blank">Wilshire US Small-Cap Growth Total Market Index</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/WILLSMLCAPVAL"
                                                          target="_blank">Wilshire US Small-Cap Value Total Market Index</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Wilshire: <a href="https://www.wilshire.com/solutions/indexes-products"
                                 target="_blank">Wilshire US Style Indexes</a></li>
                <li>Longermtrends: <a href="/large-cap-vs-small-cap/">Large-cap vs. Small-cap Stocks</a></li>
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

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="n006gWE9s9yxUglYuxiVraxDwDxmlhleloJMMIsDNbpmXvGlNxIrRJ2cxWY1XdTd">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="growth-stocks-vs-value-stocks">
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
