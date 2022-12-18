@extends('layouts.main')

@section('content')
    <div class="header-market price relative-strength">

        <h1>Relative Strength: US Stock Market Sectors</h1>

    </div>

    <!-- /.container -->

    <div class="container">
        <!-- Chart Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="chart" id="chart1" style="height:350px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart2" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart3" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart4" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart5" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart6" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart7" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart8" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart9" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="chart" id="chart10" style="height:350px">
                <div class="loading" id="loading-animation">
                    <img src="/static/my_app/images/loading.png" class="loading-sign">
                    <h3>Loading Data</h3>
                    <h4>Please wait, we are loading chart data</h4>
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
                The charts above display the relative strength for each US stock market sector.
                The relative strength indicates how well a given sector performed compared to the overall stock market (as
                measured by the S&P 500). When the ratio rises, the sector outperformed the market - and when it falls, the sector
                underperformed.
                According to the <a href="https://en.wikipedia.org/wiki/Global_Industry_Classification_Standard"
                                    target="_blank">Global Industry Classification Standard (GICS)</a> there are 11 sectors into which S&P has
                categorized all major public companies.
            </p>
            <h3>Further Information</h3>
            <ul>
                <li>TradingView Chart: <a
                        href="https://www.tradingview.com/chart/quYGKR0I/?symbol=AMEX%3AXLK%2FAMEX%3ASPY&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Technology Sector: Relative Strength</a></li>
                <li>Fool.com <a href="https://www.fool.com/investing/stock-market/market-sectors/" target="_blank">Stock Market
                        Sectors</a></li>
                <li>Corporate Finance Institute: <a
                        href="https://corporatefinanceinstitute.com/resources/knowledge/finance/the-sp-sectors/" target="_blank">What
                        are the S&P Sectors?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/ask/answers/06/relativestrength.asp" target="_blank">What
                        is relative strength?</a></li>
                <li>Wikipedia: <a href="https://en.wikipedia.org/wiki/Global_Industry_Classification_Standard"
                                  target="_blank">Global Industry Classification Standard (GICS)</a></li>
                <li>Longtermtrends: <a href="/stocks-vs-gold-comparison/" target="_blank">Stocks vs. Gold and Silver</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/quYGKR0I/?symbol=AMEX%3AXLK%2FAMEX%3ASPY&aff_id=27777&offer_id=10"
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
                <h2>Stock Market Sectors Overview</h2>
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
                The chart above gives a different view of the same data from the ratios above. Below are the sector descriptions
                according to <a href="https://corporatefinanceinstitute.com/resources/knowledge/finance/the-sp-sectors/"
                                target="_blank">Corporate Finance Institute</a>.
                <br>The <font class="black"><b>Energy Sector</b></font> consists of all companies that play a part in the oil,
                gas, and consumable fuels business. This includes companies that find, drill, and extract the commodity. It also
                includes the companies that refine the material and companies that provide or manufacturer the equipment used in
                the refinement process. Companies such as Exxon Mobil and Chevron extract and refine gas, while companies like
                Kinder Morgan transport fuel to gas stations.
                <br>The <font class="black"><b>Materials Sector</b></font> encompasses companies that provide the raw material
                needed for other sectors to function. This includes the mining companies that provide gold, zinc, and copper, and
                forestry companies that provide wood. Example are Sherwin-Williams and DuPont. Container and packaging companies
                that are not typically associated with materials are also in this sector.
                <br>The <font class="black"><b>Industrials Sector</b></font> includes a wide range of companies, from airlines and
                railroad companies to military weapons manufacturers. Since the range of companies is so large, the sector has 14
                different industries. Two of the largest industries are Aerospace & Defense and Construction & Engineering. The
                best known names within this sector are Delta Air Lines and Southwest Airlines, FedEx Corporation, and Boeing
                Company.
                <br>The <font class="black"><b>Utilities Sector</b></font> includes companies that provide or generate
                electricity, water, and gas to buildings and households. For example, Duke Energy generates and distributes
                electricity, and Southern Company provides gas and electricity. Many utility companies are developing more
                renewable energy sources.
                <br>The <font class="black"><b>Healthcare Sector</b></font> consists of medical supply companies, pharmaceutical
                companies, and scientific-based operations or services that aim to improve the human body or mind. Familiar names
                include Johnson & Johnson, a medical device and pharmaceutical company that owns Tylenol, and Abiomed, which
                manufactures medical implant devices.
                <br>The <font class="black"><b>Financials Sector</b></font> includes all companies involved in finance, investing,
                and the movement or storage of money. It includes banks, credit card issuers, credit unions, insurance companies,
                and mortgage real estate investment trusts (REITs). Companies within this sector are usually relatively stable, as
                many are mature, well-established firms. Banks in this sector include Bank of America Corp, JPMorgan Chase & Co.,
                and Goldman Sachs. Other notable sector names include Berkshire Hathaway and American Express.
                <br>The <font class="black"><b>Consumer Discretionary Sector</b></font> covers luxury products or services that
                are not necessary for survival. The demand for these items depends on economic conditions and the wealth of
                individuals. Products include cars, jewelry, sporting goods, and electronic devices. Luxury experiences include
                trips, stays at hotels, or dining in a posh restaurant. Most companies in this sector are easily recognized. Some
                examples include Starbucks, Best Buy, and Amazon.
                <br>The <font class="black"><b>Consumer Staples Sector</b></font> provides goods and services that consumers need,
                regardless of their current financial condition. This includes food and beverage companies, household product
                providers, and personal product providers. Consumer staple companies are well known, since people see their
                products in stores regularly. For example, Procter & Gamble is a famous company within this sector, which produces
                bleach and laundry detergent under brand names such as Dawn and Tide. Another example is Kroger, which is the
                largest supermarket chain in the US.
                <br>The <font class="black"><b>Information Technology Sector</b></font> consists of companies that develop or
                distribute technological items or services, and includes internet companies. Technology products include
                computers, microprocessors, and operating systems. Example companies in this sector are big names such as
                Microsoft Corporation, Oracle Corp., and Mastercard Inc. This sector has seen a lot of change in recent years
                because of the rapid rise in technology-based companies.
                <br>The <font class="black"><b>Communication Services Sector</b></font> consists of companies that keep people
                connected. This includes internet providers and phone plan providers. The more exciting part of the sector
                includes media, entertainment, and interactive media & services companies. Netflix Inc. and Walt Disney Co. are
                considered part of the communication services sector. Other companies within this sector include AT&T, CBS Corp.,
                and Facebook.
                <br>The <font class="black"><b>Real Estate Sector</b></font> was moved out of the financials sector in 2016.
                Therefore, due to missing historical data, it is not represented in the charts above. Example companies are
                American Tower Corp., Boston Properties, and Equinix.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>Stooq: <a href="https://stooq.com/q/?s=spy.us" target="_blank">SPDR S&P 500 ETF Trust (SPY.US)</a></li>
                <li>Stooq: <a href="https://stooq.com/t/?i=551" target="_blank">US Stock Market Sectors:</a></li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xle.us" target="_blank">Energy Select Sector SPDR Fund (XLE.US)</a>
                    </li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xlb.us" target="_blank">Materials Select Sector SPDR Fund
                            (XLB.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xli.us" target="_blank">Industrial Select Sector SPDR Fund
                            (XLI.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xlu.us" target="_blank">Utilities Select Sector SPDR Fund
                            (XLU.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xlv.us" target="_blank">Health Care Select Sector SPDR Fund
                            (XLV.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xlf.us" target="_blank">Financial Select Sector SPDR Fund
                            (XLF.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xly.us" target="_blank">Consumer Discretionary Select Sector SPDR
                            Fund (XLY.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xlp.us" target="_blank">Consumer Staples Select Sector SPDR Fund
                            (XLP.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xlk.us" target="_blank">Technology Select Sector SPDR Fund
                            (XLK.US)</a></li>
                    <li>Stooq: <a href="https://stooq.com/q/?s=xlc.us" target="_blank">Communication Services Select Sector SPDR Fund (XLC.US) </a></li>
                </ul>
            </ul>
        </div>
    </div>

    <!-- /.container -->




    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="1qtAvTliqqDd8l948Ni1uN3Vgy7c8UeTZOcg1F9MLsu2bAurrNIxUmyuhRyRKQMS">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="us-sectors-relative-strength">
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
