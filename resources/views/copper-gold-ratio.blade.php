@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>Copper to Gold Ratio</h1>

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
                <font color="gold"><b>Gold</b></font> is the most widely recognized safe-haven asset among investors. Therefore,
                during times of economic and geopolitical distress it generally tends to perform well, making it a leading
                indicator of fear.
                <br>
                <font color="orange"><b>Copper</b></font> is the exact opposite. Because it is a key industrial metal that is used
                globally in a wide range of industrial applications, it performs strongly when the global economy is firing on all
                cylinders. This makes it a leading indicator of global economic health and has led to it being commonly called Dr
                Copper.
                <br>The ratio prices copper in gold and represents the number of ounces of gold it takes to buy an ounce of
                copper.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Metals-API: <a href="https://metals-api.com/" target="_blank">Copper prices</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>U.S. Geological Survey: <a href="https://minerals.usgs.gov/minerals/pubs/commodity/copper/240798.pdf"
                                                   target="_blank">Copper prices</a></li>
                    <li>OnlyGold: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Historical Gold
                            prices</a></li>
                </ul>
            </ul>

        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/dBVTNQqh/?symbol=COMEX%3AHG1%21%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
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
                <h2>Gold vs. Copper</h2>
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
                A long-term price chart of the two reveals two things: First, <font color="gold"><b>Gold</b></font> and
                <font color="orange"><b>Copper</b></font> tend to move in the same direction a majority of the time. Second, it shows
                that the copper market tends to be more volatile and sensitive to price swings than gold.
                It makes sense that copper reacts to fundamental trends more quickly than gold. Copper is used explicitly for
                industrial consumption. More than two-thirds of the world’s red metal goes directly into building construction and
                electronics.
                The value of gold is much more likely to be shaped by interest rates and inflation expectations (rather than by
                noticeable swings in actual production and consumption) because most of of the gold in the world simply gets
                stored and transferred back and forth from one vault to the next.
            </p>
            <h3>Further Information</h3>
            <ul>
                <li>
                    TradingView Chart: <a
                        href="https://www.tradingview.com/chart/dBVTNQqh/?symbol=COMEX%3AHG1%21%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Copper to Gold Ratio</a>
                </li>
                <li>
                    <a href="https://martinkronicle.com/goldcopper-ratio-important-inflection/" target="_blank">Gold/Copper Ratio:
                        At an Important Inflection Point</a>
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
                <h2>Copper to Gold Ratio vs. Interest Rates</h2>
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
            <h3>Interpretation</h3>
            <p>
                Interestingly, the <font color="orange"><b>Copper to Gold Ratio</b></font> correlates strongly with the
                <font class="black"><b>10-year US Treasury Bond Yield</b></font> and is often mentioned as a leading indicator for
                interest rates.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Stooq: <a href="https://stooq.com/q/?s=10usy.b&c=mx&t=l&a=lg&b=0" target="_blank"> 10-Year U.S. Bond Yield (10USY.B)</a></li>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>
                    <a href="https://pca.st/z2tR#t=39m45s" target="_blank">Adam Robinson on the Tim Ferriss Podcast</a>
                </li>
                <li>
                    Topdown Charts on Youtube: <a href="https://youtu.be/mUgrZRiPZTk" target="_blank">Copper/Gold and 10yr Treasury
                        Yields: "Macro Mates"</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="xUo95Ggr9aF7kxpa4JquQJkNSiUKHpE8vi7PBs4VucwWnMKxnJQ0giPmTBlpjlc7">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="copper-gold-ratio">
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
