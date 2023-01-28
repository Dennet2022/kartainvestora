@extends('layouts.main')

@section('content')
    <div class="header-market">

        <h1>The Real Home Price (US & UK)</h1>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Case-Shiller Home Price to CPI Ratio (US)</h2>
                <div class="chart" id="chart1" style="height: 500px; min-width: 310px;">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
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
                The real home price takes into account the effects of inflation and therefore allows for better comparison over
                time. The ratio in the chart above divides the Case-Shiller Home Price Index by the Consumer Price Index (CPI).
                The
                <a href="https://shar.es/aHOMOm" target="_blank">Case-Shiller Home Price Index</a>
                seeks to measure the price of all existing single-family housing stock.
                Based on the pioneering research of
                <a href="https://en.wikipedia.org/wiki/Robert_J._Shiller" target="_blank">Robert J. Shiller</a>
                and
                <a href="https://en.wikipedia.org/wiki/Karl_E._Case" target="_blank">Karl E. Case</a>
                the index is generally considered the leading measure of U.S. residential
                real estate prices.
                <br>
                When inflation is high, prices as measured by the CPI increase and the purchasing power per unit of currency
                decreases.
                The Case-Shiller index has a base of Jan 2000=100 while the CPI has a base of 1983=100. Therefore, it is the trend
                over time that is significant, and not the absolute ratio values.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>
                        Federal Reserve Bank of St. Louis:
                        <a href="https://fred.stlouisfed.org/series/CSUSHPISA" target="_blank">US Home prices since 1983</a>
                    </li>
                    <li>
                        Federal Reserve Bank of St. Louis:
                        <a href="https://fred.stlouisfed.org/series/CPIAUCNS" target="_blank">CPI since 1913</a>
                    </li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>
                        Robert Shiller Online Data:
                        <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Historical US Home prices until 1983</a>
                    </li>
                    <li>
                        Robert Shiller Online Data:
                        <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">CPI from 1871 until 1913</a>
                    </li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/Pz3GfP59/?symbol=FRED%3ACSUSHPINSA%2FFRED%3ACPIAUCSL&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">S&P Case-Shiller U.S. National Home Price Index /
                        Consumer Price Index for All Urban Consumers</a></li>
                <li>BIS: <a href="https://www.bis.org/publ/work665.htm" target="_blank">Interest rates and house prices in the
                        United States and around the world</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/i/inflation.asp" target="_blank">What is
                        Inflation?</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/Pz3GfP59/?symbol=FRED%3ACSUSHPINSA%2FFRED%3ACPIAUCSL&aff_id=27777&offer_id=10"
               target="_blank" id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" alt="img" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" alt="img" />
        </div>
    </div>

    <div class="line">
        <hr>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Case-Shiller Home Price Index vs. CPI (US)</h2>
                <div class="chart" id="chart2" style="height: 500px; min-width: 310px;">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
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
                This chart displays the <font color="red"><b>Case-Shiller Home Price Index</b></font>
                and <font class="black"><b>US Consumer Price Index (CPI)</b></font> over time.
            </p>
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
        <div class="row">
            <div class="col-lg-12">
                <h2>House Price Index to CPI Ratio (UK)</h2>
                <div class="chart" id="chart3" style="height: 500px; min-width: 310px;">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
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
                This chart show the ratio between the UK House Price Index and UK Consumer Price Index (CPI).
                Both series have their base year (value=100) in 2015, therefore the ratio is 1 at this point.
                Since the second world war, the ratio rose steadily, showing how house price growth progressively outstripped
                inflation, a trend that has accelerated since the 1990s.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>
                        HM Land Registry:
                        <a href="https://landregistry.data.gov.uk/app/ukhpi">
                            UK House Price Index since 2000
                        </a>
                    </li>
                    <li>
                        Office for National Statistics:
                        <a href="https://www.ons.gov.uk/economy/inflationandpriceindices/timeseries/l522/mm23">
                            Consumer price inflation since 2000</a>
                    </li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>
                        Bank of England:
                        <a href="https://www.bankofengland.co.uk/statistics/research-datasets">
                            Research datasets
                        </a>
                        <a
                            href="https://www.bankofengland.co.uk/-/media/boe/files/statistics/research-datasets/a-millennium-of-macroeconomic-data-for-the-uk.xlsx">
                            (A millennium of macroeconomic data - House Price Index: A32)
                        </a>
                    </li>
                    <li>
                        Bank of England:
                        <a href="https://www.bankofengland.co.uk/statistics/research-datasets">
                            Research datasets
                        </a>
                        <a
                            href="https://www.bankofengland.co.uk/-/media/boe/files/statistics/research-datasets/a-millennium-of-macroeconomic-data-for-the-uk.xlsx">
                            (A millennium of macroeconomic data - Consumer Price Index (CPI) - preferred measure: A47)
                        </a>
                    </li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>
                    The Guardian:
                    <a href="https://www.theguardian.com/business/2014/may/24/history-british-housing-decade">
                        A brief history of British housing
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="line">
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>House Price Index vs. CPI (UK)</h2>
                <div class="chart" id="chart4" style="height: 500px; min-width: 310px;">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
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
                This chart compares the <font color="red"><b>UK House Price Index</b></font>
                and <font class="black"><b>UK Consumer Price Index (CPI)</b></font> over time.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12">
            <br />
            <br />
            <p>
                Page created by <a href="https://twitter.com/willbeaufoy" target="_blank">Will Beaufoy</a>
            </p>
        </div>
    </div>



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="SEdFraDo0TGiPvzQ272Pg7DoXZePw2n7Q2WlXWrSlVx7SKUdl7slGG8XYiFu8YV6">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="home-price-vs-inflation">
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
