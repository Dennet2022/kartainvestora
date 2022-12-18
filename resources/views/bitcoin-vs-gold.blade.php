@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>Bitcoin vs. Gold</h1>

    </div>

    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Bitcoin to Gold Ratio</h2>
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
                The ratio in the chart above divides the price of <font class="black"><b>Bitcoin</b></font> by the price of
                <font color="gold"><b>Gold</b></font> and represents the number of ounces of Gold it takes to buy a single Bitcoin.
                When the ratio rises, Bitcoin is outperforming Gold - and when it falls, Gold is outperforming Bitcoin.
                The chart's yAxis is logarithmic for better visualization and to cope with <a
                    href="https://twitter.com/peterlbrandt/status/1361818836144693250?lang=en" target="_blank">Bitcoin's parabolic
                    advances</a> over time.
                <br>Bitcoin was launched in 2009 by Satoshi Nakamoto who's true identity remains unknown. According to Satoshi's
                <a href="https://bitcoin.org/bitcoin.pdf" target="_blank">Whitepaper</a>, Bitcoin promises to be the first purely
                peer-to-peer version of electronic cash without having to rely on any financial intermediary.
                Like Gold, there is a limited amount of Bitcoin. Programmed in the source code, there are a limit of 21 million
                tokens as well as halving events, which reduce the supply of Bitcoin by 50% - ensuring that the final Bitcoin
                won't be issued until about the year 2140.
                Through an innovative incentive structure, so called "miners" compete in solving a math problem and get rewarded
                in Bitcoin - securing the network and verifying transactions in the process.
                <br>Both Gold and Bitcoin are often seen as a way to diversify a portfolio as well as a hedge against inflation
                and <a href="/m2-money-supply-vs-inflation/" target="_blank">fiat currency debasement</a>.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Stooq: <a href="https://stooq.com/q/?s=btc.v" target="_blank">Bitcoin Cryptocurrency USD (BTC.V)</a></li>
                <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold Price: London Fixing</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/5RvMvfQy/?symbol=BITSTAMP%3ABTCUSD%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Bitcoin to Gold Ratio</a></li>
                <li>andersbrownworth.com <a href="https://andersbrownworth.com/blockchain/" target="_blank">Blockchain Demo</a>
                </li>
                <li>bitcoin.org <a href="https://bitcoin.org/bitcoin.pdf" target="_blank">Whitepaper</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/b/bitcoin.asp" target="_blank">What is Bitcoin?</a>
                </li>
                <li>Businessinsider: <a
                        href="https://markets.businessinsider.com/currencies/news/bitcoin-vs-gold-experts-cryptocurrency-precious-metals-analysis-2021-2-1030103905"
                        target="_blank">Bitcoin vs. Gold</a></li>
                <li>Longtermtrends: <a href="/m2-money-supply-vs-inflation/" target="_blank">M2 Money Supply Growth vs.
                        Inflation</a></li>
                <li>Longtermtrends: <a href="/stocks-vs-gold-comparison/" target="_blank">Stocks vs. Gold and Silver</a></li>
                <li>Longtermtrends: <a href="/ethereum-vs-bitcoin/" target="_blank">Ethereum vs. Bitcoin</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/5RvMvfQy/?symbol=BITSTAMP%3ABTCUSD%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
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
                <h2>Bitcoin to Gold Ratio on a linear scale</h2>
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

    <div class="line">
        <hr>
    </div>

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <h2>Bitcoin vs. Gold</h2>
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
            <h3>Data Sources</h3>
            <ul>
                <li>Stooq: <a href="https://stooq.com/q/?s=btc.v" target="_blank">Bitcoin Cryptocurrency USD (BTC.V)</a></li>
                <li>OnlyGold: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Historical Gold
                        prices</a></li>
                <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Recent Gold prices</a></li>
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

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="pcm8zIYtlJPaRTn9EiymRfJrnWLwoaQSnA5O5uMXGLGZU8IwXiYShOe0ofcb06oR">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="bitcoin-vs-gold">
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
