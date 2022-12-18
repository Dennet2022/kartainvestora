@extends('layouts.main')

@section('content')
    <div class="header-market price">

        <h1>National Stock Markets Comparison</h1>

    </div>

    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">


                <div class="col-lg-12">
                    <div class="chart" id="chart2" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="chart" id="chart2b" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart3" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart3b" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart4" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart4b" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart5" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart5b" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart6" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="chart" id="chart6b" style="height: 500px; min-width: 310px">
                        <div class="loading" id="loading-animation">
                            <img src="/static/my_app/images/loading.png" class="loading-sign">
                            <h3>Loading Data</h3>
                            <h4>Please wait, we are loading chart data</h4>
                        </div>
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
                Which national stock market index performed the best? Often a stock index rallies while its currency devalues,
                leading to a zero-sum game in dollar terms. The charts above convert each index into US Dollars, allowing for an
                accurate perfomance comparison.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Argentina</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^MRV" target="_blank">Merval Index</a></li>
                    <li><a href="http://stooq.com/q/?s=usdars" target="_blank">ARS/USD</a></li>
                </ul>
                <li>Australia</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="https://stooq.com/q/?s=^aor" target="_blank">All Ordinaries Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLADD" target="_blank">USD/AUD</a></li>
                </ul>
                <li>Austria</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=A5.C" target="_blank">ATX Index Cash</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Belgium</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^BEL20" target="_blank">BEL 20</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Brazil</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^BVP" target="_blank">Bovespa Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLB8KL" target="_blank">BRL/USD</a></li>
                </ul>
                <li>Canada</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^TSX" target="_blank">S&P/TSX Composite Index</a></li>
                    <li><a href="https://stooq.com/q/?s=cadusd" target="_blank">CAD/USD</a></li>
                </ul>
                <li>Chile</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^IPSA" target="_blank">IPSA Index</a></li>
                    <li><a href="http://stooq.com/q/?s=usdclp" target="_blank">CLP/USD</a></li>
                </ul>
                <li>China</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^SHC" target="_blank">Shanghai Composite Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK73" target="_blank">CNY/USD</a></li>
                </ul>
                <li>Czech</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^PX" target="_blank">PX Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK27" target="_blank">CZK/USD</a></li>
                </ul>
                <li>France</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^CAC" target="_blank">CAC 40</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Germany</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^DAX" target="_blank">DAX Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Greece</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^ATH" target="_blank">ATHEX Composite Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Hong Kong</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^HSI" target="_blank">Hang Seng Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLHDD" target="_blank">HKD/USD</a></li>
                </ul>
                <li>Hungary</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^BUX" target="_blank">BUX Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK35" target="_blank">HUF/USD</a></li>
                </ul>
                <li>India</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="https://stooq.com/q/?s=^snx" target="_blank">SENSEX 30 Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK64" target="_blank">INR/USD</a></li>
                </ul>
                <li>Indonesia</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^JCI" target="_blank">Jakarta Composite Index</a></li>
                    <li><a href="http://stooq.com/q/?s=usdidr" target="_blank">IDR/USD</a></li>
                </ul>
                <li>Italy</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^FMIB" target="_blank">FTSE MIB Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Japan</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^NKX" target="_blank">Nikkei 225</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLJYD" target="_blank">JPY/USD</a></li>
                </ul>
                <li>Malaysia</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^KLCI" target="_blank">Kuala Lumpur Composite Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK66" target="_blank">MYR/USD</a></li>
                </ul>
                <li>Mexico</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^IPC" target="_blank">Mexican Bolsa Index</a></li>
                    <li><a href="https://stooq.com/q/?s=mxnusd" target="_blank">MXN/USD</a></li>
                </ul>
                <li>Netherlands</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^AEX" target="_blank">AEX Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>New Zealand</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^NZ50" target="_blank">NZX 50</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLNDD" target="_blank">USD/NZD</a></li>
                </ul>
                <li>Norway</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^OSEAX" target="_blank">OSE All Share Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLNKD" target="_blank">NOK/USD</a></li>
                </ul>
                <li>Phlippines</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^PSEI" target="_blank">PSEi Index</a></li>
                    <li><a href="http://stooq.com/q/?s=usdphp" target="_blank">PHP/USD</a></li>
                </ul>
                <li>Poland</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=WIG20" target="_blank">WIG20</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK49" target="_blank">PLN/USD</a></li>
                </ul>
                <li>Portugal</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^PSI20" target="_blank">PSI 20 Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Russia</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="https://stooq.com/q/?s=^moex" target="_blank">MOEX Index</a></li>
                    <li><a href="https://stooq.com/q/?s=usdrub" target="_blank">RUB/USD</a></li>
                </ul>
                <li>Singapore</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^STI" target="_blank">Straits Times Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLSGD" target="_blank">SGD/USD</a></li>
                </ul>
                <li>South Korea</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^KOSPI" target="_blank">KOSPI Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK74" target="_blank">KRW/USD</a></li>
                </ul>
                <li>Spain</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^IBEX" target="_blank">IBEX Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLERD" target="_blank">EUR/USD</a></li>
                </ul>
                <li>Sweden</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^OMXS" target="_blank">OMX Stockholm 30 Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLSKD" target="_blank">SEK/USD</a></li>
                </ul>
                <li>Switzerland</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^SMI" target="_blank">Swiss Market Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLSFD" target="_blank">CHF/USD</a></li>
                </ul>
                <li>Taiwan</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^TWSE" target="_blank">TAIEX Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLTWD" target="_blank">TWD/USD</a></li>
                </ul>
                <li>Thailand</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^SET" target="_blank">SET Index</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK72" target="_blank">THB/USD</a></li>
                </ul>
                <li>Turkey</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^XU100" target="_blank">XU100</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLBK75" target="_blank">TRY/USD</a></li>
                </ul>
                <li>United Kingdom</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="http://stooq.com/q/?s=^UKX" target="_blank">UK 100 CFD</a></li>
                    <li><a href="https://www.quandl.com/data/BOE/XUDLGBD" target="_blank">GBP/USD</a></li>
                </ul>
                <li>USA</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li><a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P 500</a></li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>Longermtrends: <a href="/emerging-markets-stock-indices/" target="_blank">Emerging Market Indices</a></li>
                <li>Longermtrends: <a href="/developed-world-stock-market-indices/" target="_blank">Developed World Indices</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/?offer_id=10&aff_id=27777&file_id=855" target="_blank"
               id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" />
        </div>
    </div>
    <!-- /.container -->



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="IyJaGRBhJTmO8cc0IyEeHYELQ8OdyxUzGWsQcDpL4VdDbrxn1y4K7x9kRrfSatsy">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="national-stock-markets-comparison">
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
