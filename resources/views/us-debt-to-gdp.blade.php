@extends('layouts.main')

@section('content')

    <div class="header-market">

        <h1>US Debt to GDP</h1>

    </div>

    <!-- /.container -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Federal Debt to GDP</h2>
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
                In order to allow for comparison over time, a nation's debt is often expressed as a ratio to its gross domestic
                product (GDP). The total public debt (used in the chart above) is a form of government federal debt. It includes
                "debt held by the public" as well as "intragovernmental holdings". Historically, the ratio has increased during
                wars and recessions. Other popular classifications of debt (see charts below) are "corporate debt" and "household
                debt".
                <br>
                Ray Dalio, identified a long-term debt cycle, which takes approximately 75-100 years to complete. He also analyzed
                the the total US debt - including federal, corporate, and household debt - going back to 1920 (see <a
                    href="https://www.principles.com/big-debt-crises/" target="_blank">BIG DEBT CRISES, page 13</a>).
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Recent data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>
                        Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/GFDEBTN"
                                                              target="_blank">Federal Debt: Total Public Debt</a>
                    </li>
                    <li>
                        Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP"
                                                              target="_blank">US Gross Domestic Product</a>
                    </li>
                </ul>
                <li>Historical data</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Congressional Budget Office: <a
                            href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls"
                            target="_blank">Historical Gross Domestic Product</a></li>
                    <li>Treasury Direct: <a href="https://www.treasurydirect.gov/govt/reports/pd/histdebt/histdebt.htm"
                                            target="_blank">Historical Debt Outstanding</a></li>
                </ul>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>
                    TradingView Chart: <a
                        href="https://www.tradingview.com/chart/Z6PPUfZX/?symbol=FRED%3AGFDEBTN%2FFRED%3AGDP&aff_id=27777&offer_id=10"
                        target="_blank" id="tradingview_text_link">Federal Debt to GDP</a>
                </li>
                <li>
                    Congressional Budget Office: <a
                        href="https://www.cbo.gov/sites/default/files/111th-congress-2009-2010/reports/2010_08_05_federaldebt.pdf"
                        target="_blank">Historical Data on Federal Debt Held by the Public</a>
                </li>
                <li>
                    Wikipedia: <a href="https://en.wikipedia.org/wiki/National_debt_of_the_United_States" target="_blank">National
                        debt of the United States</a>
                </li>
                <li>
                    Treasury Direct: <a href="https://www.treasurydirect.gov/govt/resources/faq/faq_publicdebt.htm"
                                        target="_blank">Frequently Asked Questions about the Public Debt</a>
                </li>
                <li>
                    Ray Dalio on the long-term credit cycle: <a href="https://youtu.be/PHe0bXAIuk0" target="_blank">(Video) How The
                        Economic Machine Works</a> and <a href="https://www.principles.com/big-debt-crises/" target="_blank">BIG DEBT
                        CRISES</a>
                </li>
                <li>
                    Federal Reserve Bank of St. Louis: <a
                        href="https://fredblog.stlouisfed.org/2018/04/whos-buying-treasuries/?utm_source=series_page&utm_medium=related_content&utm_term=related_resources&utm_campaign=fredblog"
                        target="_blank">Who’s buying Treasuries?</a>
                </li>

            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/chart/Z6PPUfZX/?symbol=FRED%3AGFDEBTN%2FFRED%3AGDP&aff_id=27777&offer_id=10"
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
                <h2 id='chart_header'>Corporate Debt to GDP</h2>
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
                Non-financial corporate debt excludes debt from companies in the financial sector. It generally includes bank
                loans and corporate bonds that were issued to raise money.
            </p>
            <h3>Data Sources</h3>
            <ul>
                <li>
                    Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/BCNSDODNS"
                                                          target="_blank">Nonfinancial Corporate Business; Credit Market Instruments; Liability</a>
                </li>
                <li>
                    Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US
                        Gross Domestic Product</a>
                </li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>Financial Times: <a href="http://lexicon.ft.com/Term?term=non_financial-debt" target="_blank">Definition of
                        non-financial debt</a></li>
                <li>Real Investment Advice: <a
                        href="https://realinvestmentadvice.com/how-corporate-debt-confirms-the-everything-bubble/" target="_blank">How
                        Corporate Debt Confirms The “Everything Bubble”</a></li>
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
                <h2>Household Debt to GDP</h2>
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
                Household debt includes different types of debt, such as home mortgages, home equity loans, auto leasing loans,
                student loans, and credit card debt. The ratio rose gradually until 2008. US households made significant progress
                in deleveraging (reducing debt) during and after the financial crisis.
                <br>
                The actual burden of all this debt can be illustrated by <a href="https://fred.stlouisfed.org/series/TDSP"
                                                                            target="_blank">debt service payments as a percentage of Disposable Income</a>. Ray Dalio even published a chart
                of this ratio going back to 1920 (see <a href="https://www.principles.com/big-debt-crises/" target="_blank">BIG
                    DEBT CRISES, page 26</a>).
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/CMDEBT"
                                                          target="_blank">Household Debt</a></li>
                <li>Federal Reserve Bank of St. Louis: <a href="https://research.stlouisfed.org/fred2/series/GDP"
                                                          target="_blank">US Gross Domestic Product</a></li>
            </ul>

            <h3>Further Information</h3>
            <ul>
                <li>
                    Wikipedia: <a href="https://en.wikipedia.org/wiki/Household_debt" target="_blank">Household debt</a>
                </li>
                <li>
                    Ray Dalio: <a href="https://www.principles.com/big-debt-crises/" target="_blank">BIG DEBT CRISES</a>
                </li>
                <li>
                    Federal Reserve Bank of St. Louis: <a href="https://fred.stlouisfed.org/series/HDTGPDUSQ163N"
                                                          target="_blank">Household Debt to GDP</a>
                </li>
            </ul>
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
                <h2>Debt vs. GDP</h2>
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




    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="1a5JGPZzLkAtI7negQ2qfqQDercsOY6qZyOpcBN36mriLmIBzQsWFZlcfKD7qUEp">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="us-debt-to-gdp">
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
