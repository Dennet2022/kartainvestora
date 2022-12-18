@extends('layouts.main')

@section('content')

    <div class="header-market">

        <h1>Home Price to Income Ratio (US & UK)</h1>

    </div>

    <!-- /.container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Home Price to Median Household Income Ratio (US)</h2>
                <div class="chart" id="chart1" style="height: 500px; min-width: 310px;">
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
                Historically, an average house in the U.S. cost around 5 times the yearly household income.
                During the housing bubble of 2006 the ratio exceeded 7 - in other
                words, an average single family house in the United States cost more than
                7 times the U.S. median annual household income.
                <br>The
                <a href="https://shar.es/aHOMOm" target="_blank">Case-Shiller Home Price Index</a>
                seeks to measure the price level of existing single family homes in the United States.
                Based on the pioneering research of
                <a href="https://en.wikipedia.org/wiki/Robert_J._Shiller" target="_blank">Robert J. Shiller</a>
                and
                <a href="https://en.wikipedia.org/wiki/Karl_E._Case" target="_blank">Karl E. Case</a>
                the index is generally considered the leading measure of U.S. residential
                real estate prices.
                The index has a base of Jan 2000=100 and is multiplied by 1800 in order approximate the
                <a href="https://fred.stlouisfed.org/graph/?g=CpFW" target="_blank">Average Sales Price of Houses Sold for the
                    United States</a>.
                <br>
                <a href="https://youtu.be/8GP87dgTqF8" target="_blank">According to Mike Maloney</a>
                this ratio is heavily influenced by interest rates. When interest rates go
                down the affordability of a house goes up, so people spend more money on a
                house. Interest rates have now been
                <a href="https://fred.stlouisfed.org/series/GS10" target="_blank">falling since 1981 when they peaked at
                    15.32%</a>
                (for a 10-year US treasury bond).
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>
                        Federal Reserve Bank of St. Louis:
                        <a href="https://fred.stlouisfed.org/series/CSUSHPISA" target="_blank">S&P/Case-Shiller U.S. National Home
                            Price Index</a>
                    </li>
                    <li>
                        Federal Reserve Bank of St. Louis:
                        <a href="https://fred.stlouisfed.org/series/MEHOINUSA646N" target="_blank">Median Income since 1983</a>
                    </li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>
                        census.gov
                        <a href="https://www.census.gov/prod/99pubs/99statab/sec31.pdf" target="_blank">Median Income from 1947 until
                            1965</a>
                    </li>
                    <li>
                        DaveManuel.com:
                        <a href="http://www.davemanuel.com/median-household-income.php" target="_blank">Median Income from 1967 until
                            1983</a>
                    </li>
                    <li>
                        Online Data Robert Shiller:
                        <a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Historical US Home prices until 1983</a>
                    </li>
                </ul>
            </ul>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/8sAND1wb/?symbol=FRED%3AASPUS%2FFRED%3AMEHOINUSA646N&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Average Sales Price of Houses Sold / Median Household Income in the
                        United States</a></li>
                <li>Longtermtrends: <a href="/home-price-vs-inflation/" target="_blank">The Real Home Price (US & UK)</a></li>
                <li>Longtermtrends: <a href="/stocks-to-real-estate-ratio/" target="_blank">Stocks vs. Real Estate</a></li>
                <li>Longtermtrends: <a href="/real-estate-gold-ratio/" target="_blank">Real Estate to Gold Ratio</a></li>
                <li>Longtermtrends: <a href="/bond-yield-credit-spreads/" target="_blank">Yields for Mortgages, Corporate Bonds, and Treasury Bonds</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/8sAND1wb/?symbol=FRED%3AASPUS%2FFRED%3AMEHOINUSA646N&aff_id=27777&offer_id=10"
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
        <div class="row">
            <div class="col-lg-12">
                <h2>Home Price vs. Median Household Income (US)</h2>
                <div class="chart" id="chart2" style="height: 500px; min-width: 310px;">
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

    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                This chart gives a different view of the data from the chart above, comparing the percentage change between
                <font color="red"><b>Case-Shiller Home Price Index</b></font> (multiplied by 1800, as explained above) and <font
                    class="black"><b>Median Household Income in the United States</b></font> over time.
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
                <h2>Average House Price to Average Income Ratio (UK)</h2>
                <div class="chart" id="chart3" style="height: 500px; min-width: 310px;">
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
                This chart shows the ratio of the average UK house price to average annual
                income. The ratio declined steadily throughout the late 19th and early
                20th centuries until the first world war. This was at a time when the vast
                majority of British people still rented from private landlords. The ratio
                fluctuated mostly between 4 and 7.5 through the rest of the 20th century
                and increased in economic booms and financial bubbles.
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
                            (A millennium of macroeconomic data - Composite Average Weekly Earnings series: A47)
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
                <h2>House Prices vs. Average Income (UK)</h2>
                <div class="chart" id="chart4" style="height: 500px; min-width: 310px;">
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
                This chart gives a different view of the data from the chart above, comparing the percentage change between
                <font color="red"><b>UK house prices</b></font> and <font class="black"><b>average incomes</b></font> over time.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12">
            <br />
            <br />
            <p>
                Page extended with data for the UK, by
                <a href="https://twitter.com/willbeaufoy" target="_blank">Will Beaufoy</a>
            </p>
        </div>
    </div>



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="AWyq17PQC98nWlO42Xdumig2emMMjR64ykh6xTDkXbZcZA9rlXD0MRLBfFdrVNE3">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="home-price-median-annual-income-ratio">
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
