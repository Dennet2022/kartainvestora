@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>S&P 500 Dividend Yield</h1>

    </div>

    <div class="container">

        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="chart" id="chart" style="height: 500px; min-width: 310px">
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
                According to <a href="https://www.youtube.com/watch?v=tj2s6vzErqY" target="_blank">Mike Maloney</a>, the dividend
                yield is the second best way to measure a stocks value (after the <a
                    href="/sp500-price-earnings-shiller-pe-ratio/">Price Earnings Ratio</a>). The ratio indicates how much a company
                pays out in dividends each year relative to its share price. In other words, it measures how much "bang for your
                buck" you are getting from dividends. In the absence of any capital gains, the dividend yield is effectively the
                return on investment for a stock. The lower the dividend yield, the less you get for your investment and hence the
                more overvalued a stock. The historic S&P 500 Dividend Yields were deducted by <a
                    href="https://en.wikipedia.org/wiki/Robert_J._Shiller" target="_blank">Robert Shiller</a> and published in his
                book <a href="https://amzn.com/0691166269" target="_blank">Irrational Exuberance</a>.
                <br>
                In recent years, rather than paying out a dividend, share repurchases have become a popular way for companies to
                return value to their shareholders. This new practice partly explains the lower dividend yields that we have been
                experiencing.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>
                    Quandl: <a href="https://www.quandl.com/data/MULTPL/SP500_DIV_YIELD_MONTH" target="_blank">S&P 500 Dividend
                        Yield by Month</a>
                </li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>
                    TradingView Chart: <a
                        href="https://www.tradingview.com/chart/vsSt3iES/?symbol=QUANDL%3AMULTPL%2FSP500_DIV_YIELD_MONTH&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">S&P 500 Dividend Yield</a>
                </li>
                <li>
                    Investopedia: <a href="https://www.investopedia.com/terms/d/dividendyield.asp" target="_blank">What is Dividend
                        Yield?</a>
                </li>
                <li>
                    Investopedia: <a
                        href="https://www.investopedia.com/articles/investing/123115/4-reasons-why-investors-buybacks.asp"
                        target="_blank">4 Reasons Investors Like Buybacks</a>
                </li>
                <li>
                    Investopedia: <a href="https://www.investopedia.com/terms/s/sp500.asp" target="_blank">S&P 500 Index – Standard
                        & Poor's 500 Index</a>
                </li>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/vsSt3iES/?symbol=QUANDL%3AMULTPL%2FSP500_DIV_YIELD_MONTH&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" alt="img" />
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
