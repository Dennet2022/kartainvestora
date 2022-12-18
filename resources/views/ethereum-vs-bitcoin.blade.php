@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>Ethereum vs. Bitcoin</h1>

    </div>

    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Ether to Bitcoin Ratio</h2>
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
                The ratio in the chart above divides the price of <font class="black"><b>Ether</b></font> by the price of <font
                    color="gold"><b>Bitcoin</b></font> and represents the amount of Bitcoin it takes to buy 1 Ether.
                When the ratio rises, Ether is outperforming Bitcoin - and when it falls, Ether is underperforming.
                <br>
                As of 2021, Ether is the <a href="https://coinmarketcap.com/" target="_blank">second-largest</a> cryptocurrency by
                market capitalization after Bitcoin.
                It is the currency of the Ethereum blockchain and is often referred to as the "fuel" of the decentralized
                applications ("dapps") that are running on the network.
                Ethereum is the most popular blockchain for running smart contracts and dapps.
                In fact, as of August 2021, <a href="https://coinmarketcap.com/tokens/views/all/" target="_blank">116 out of the
                    top 200 tokens</a> (as measured by market capitalization) are located on the Ethereum blockchain. They include
                stablecoins, DeFi projects and tokens of decentralized exchanges.
                <br>
                In contrast to Bitcoin, which has a maximum total supply of 21 million BTC, there is an unlimited supply of ETH
                with an annual limit of 18 million. New blocks are mined in the Bitcoin network approximately every 10 minutes,
                whereas on the Ethereum platform a new block is created about every 15 seconds.
                <br>
                Ethereum, like Bitcoin, currently uses a consensus mechanism called Proof-of-work (PoW). This allows the nodes of
                the Ethereum network to agree on the state of all information recorded on the blockchain, and prevents certain
                kinds of economic attacks. In PoW so called "miners" compete in solving a math problem and get rewarded in newly
                minted coins.
                However, Ethereum plans in its roadmap to switch to Proof-of-Stake (PoS), where "validators" (rather than miners)
                who staked their ether tokens, process all new transactions. Unlike in a PoW system, validators don't need to use
                significant amounts of computational power because they're selected at random taking into account the staked
                amount of Ether.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Stooq: <a href="https://stooq.com/q/?s=eth.v" target="_blank">Ethereum Cryptocurrency USD (ETH.V)</a></li>
                <li>Stooq: <a href="https://stooq.com/q/?s=btc.v" target="_blank">Bitcoin Cryptocurrency USD (BTC.V)</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/DtcXFOjw/?symbol=BINANCE%3AETHBTC&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Ether / Bitcoin</a></li>
                <li>Longtermtrends: <a href="/bitcoin-vs-gold/" target="_blank">Bitcoin vs. Gold</a></li>
                <li>Vontobel: <a
                        href="https://investerest.vontobel.com/en-se/articles/13356/ether-explained---chapter-6-ethereum-vs-bitcoin-part-1/"
                        target="_blank">Ether Explained - Chapter 6: Ethereum vs. Bitcoin</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/e/ether-cryptocurrency.asp" target="_blank">What Is
                        Ether (ETH)?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/b/bitcoin.asp" target="_blank">What is Bitcoin?</a>
                </li>
                <li>Youtube: <a href="https://youtu.be/M3EFi_POhps" target="_blank">Proof-of-Stake (vs proof-of-work)</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/DtcXFOjw/?symbol=BINANCE%3AETHBTC&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" />

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
                <h2>Ether vs. Bitcoin</h2>
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

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="vp0q28t6zWshwKtkFzWAwzBXxbvZUqR1tNJ6yUhAUYj6zZOHYzm6W86wyuWEwmp0">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="ethereum-vs-bitcoin">
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
