@extends('layouts.main')

@section('content')
    <div class="modal" id="unavailable" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content unavailable-modal">
                <h4 class="modal-title">Data Source Currently Unavailable</h4>
                <div class="modal-para">
                    <p>Unfortunately, there's a technical problem with the data source. The page will be up and running again soon.
                        <br>
                        Sorry for the inconvenience. Feel free to browse other charts in the meantime.
                        <br>
                    </p>
                </div>
                <div class="modal-buttons">
                    <a class="" href="/" style="margin-left: 20px;"> <div class="modal-charts button ">
                            View More Charts
                        </div></a>
                    <button type="button" class="button more-charts modal-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->

    <div class="header-market price">

        <h1>Gold Mining Stocks vs. Gold & Silver</h1>

    </div>
    <!-- Page Content -->
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
                The Barron’s Gold Mining Index (<font class="black"><b>BGMI</b></font>) goes back all the way to 1939 - but
                unfortunately it is not updated automatically. The "Philadelphia Gold and Silver Index" (<font color="blue"><b>XAU</b></font>) is an index of thirty precious metals mining companies and it goes back to 1983. Today, the
                XAU is <i>THE</i> benchmark for companies in the mining sector for precious metals. This comparative chart shows
                how the mining stocks perform compared to the metals that they produce. It demonstrates that over the long run -
                the physical metals tend to outperform the mining stocks.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Quandl: <a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li>
                <li>OnlyGold: <a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Historical Gold
                        prices</a></li>
                <li>Quandl: <a href="https://www.quandl.com/data/LBMA/SILVER" target="_blank">Silver prices</a></li>
                <li>Yahoo Finance: <a href="https://finance.yahoo.com/quote/%5EXAU" target="_blank">XAU</a></li>
                <li>GoldChartsRus <a href="http://www.goldchartsrus.com/chartstemp/BarronsDB.php" target="_blank">BGMI (Barron’s
                        Gold Mining Index)</a></li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/sd9iPiqI/?symbol=TVC%3AXAU%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Gold Miners / Gold</a></li>
                <li><a href="https://youtu.be/NHosgxkSo50" target="_blank">The Truth About Silver & Gold Mining Stocks - Mike
                        Maloney</a></li>
                <li><a href="https://youtu.be/_jV9iZtxnPo" target="_blank">MINING STOCKS Vs PHYSICAL GOLD & SILVER - Mike
                        Maloney</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/sd9iPiqI/?symbol=TVC%3AXAU%2FTVC%3AGOLD&aff_id=27777&offer_id=10"
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
                <h2>BGMI to Gold Ratio</h2>
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
                Measuring the BGMI in Gold (instead of dollars) indicates that Gold is outperforming the stocks and that the ratio
                is going lower over time. Since the BMGI is not updated automatically the XAU/Gold ratio is placed below.
            </p>
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
                <h2>XAU to Gold Ratio</h2>
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
                The XAU/Gold ratio gets updated daily. However, it only goes back to 1983.
            </p>
        </div>
        <div class="col-md-4">
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
                <h2>BGMI to Gold Ratio (including XAU)</h2>
                <div class="chart" id="chart4" style="height: 500px; min-width: 310px">
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
                This chart contains BGMI data before September 19th 2005 and XAU data thereafter. Doing so leads to an
                automatically updated chart that correlates very strongly with the actual BGMI/Gold ratio.
            </p>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <!-- /.container -->




    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="bKVk3qDvmszDpMX2YvmeAOYyYCOS0j1W98E0zcrZHuqss1iphvMK0nt7ZVfxCfzV">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="mining-stocks-vs-gold-and-silver">
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
