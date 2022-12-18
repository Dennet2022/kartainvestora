@extends('layouts.main')

@section('content')
    <script type="text/javascript" src="/static/my_app/js/homepage.js"></script>
    <div class="content">


        <!-- HEADER -->
        <div class="header">
            <div class="title">
                <h2>Find the most interesting financial charts!</h2>
                <p>Our mission is to find the most interesting and educational charts with rich historical data, and to make
                    these
                    charts available online.</p>
            </div>
            <form class="mail" id="form">
                <input placeholder="Get a monthly chart update" id="email-subscribe-input" onkeydown="validation()"
                       class="">
                <div id="email-subscribe-submit" class="sub button">Subscribe</div>
                <span class="" id="verify-msg" style="display:none;"></span>
            </form>
            <div class="images">
                <img src="/static/my_app/images/stocks-vs-bonds.png" alt="stocks vs. bonds" class="head-img img1">
                <img src="/static/my_app/images/real-interest-rate.png" alt="The real interest" class="head-img img2">

            </div>
            <div class="featured">
                <h5>Featured on: </h5>
                <a href="https://www.ft.com/content/6536113f-f509-41e2-bee0-597ed90843b6" target="_blank" class="financial">
                    FINANCIAL TIMES</a>
                <a href="https://www.nytimes.com/2020/04/30/opinion/economy-stock-market-coronavirus.html" target="_blank"
                   class="new-york">The New York Times</a>
            </div>
        </div>
    </div>


    <div class="text-center filter">
        <span class="all active filter-btn">All</span>
        <span class="gold filter-btn">Gold</span>
        <span class="stocks filter-btn">Stocks</span>
        <span class="bonds filter-btn">Bonds</span>
        <span class="real filter-btn">Real Estate</span>
        <span class="real filter-btn">Commodities</span>
        <span class="crypto filter-btn">Crypto</span>
    </div>


    <div class="row card-cont">


        <!-- /.row -->
        <hr>

        <div class="card  row">
            <h5 class="card-title">S&P 500 PE Ratio</h5>
            <a href="sp500-price-earnings-shiller-pe-ratio/">
                <img class="card-img rounded img-fluid " src="/static/my_app/images/price-earnings-ratio.png"
                     alt="S&P 500 Price to Earnings Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">The price earnings ratio is calculated by dividing a company's stock price by it's
                    earnings
                    per share. It is likely one of the best-known fundamental ratios for stock valuation.</p>

                <a href="sp500-price-earnings-shiller-pe-ratio/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <div class="card row">
            <h5 class="card-title">The Buffett Indicator: Market Cap to GDP</h5>
            <a href="market-cap-to-gdp-the-buffett-indicator/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/market-cap-to-gdp.png"
                     alt="The Buffett Indicator: Market Cap to GDP">
            </a>
            <div class="card-body">
                <p class="card-text">Market cap to GDP is a long-term valuation indicator for stocks. It has become popular
                    in
                    recent years, thanks to Warren Buffett.</p>

                <a href="market-cap-to-gdp-the-buffett-indicator/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>


        <!-- /.row -->
        <hr>

        <div class="card row">
            <h5 class="card-title">Stocks vs. Gold and Silver</h5>
            <a href="stocks-vs-gold-comparison/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/stocks-gold-comparison.png"
                     alt="Stocks vs. Gold and Silver">
            </a>
            <div class="card-body">
                <p class="card-text">Which was the best investment in the past 30, 50, 80, or 100 years? This chart compares
                    the
                    performance of the S&P 500, the Dow Jones, Gold, and Silver.</p>

                <a href="stocks-vs-gold-comparison/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card row">
            <h5 class="card-title">Stocks vs. Bonds</h5>
            <a href="stocks-vs-bonds/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/stocks-vs-bonds.png"
                     alt="Stocks vs. Bonds">
            </a>
            <div class="card-body">
                <p class="card-text">Which performed better in the past, Stocks or Bonds?
                    The ratio in this chart divides the S&P 500 by a Total Return Bond Index.
                    When the ratio rises, stocks beat bonds - and when it falls, bonds beat stocks.</p>

                <a href="stocks-vs-bonds/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Stocks vs. Real Estate</h5>
            <a href="stocks-to-real-estate-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/sp-500-real-estate-ratio.png"
                     alt="Stocks vs. Real Estate">
            </a>
            <div class="card-body">
                <p class="card-text">The Stocks to Real Estate ratio divides the S&P 500 index by the Case-Shiller Home
                    Price
                    Index.
                    Just like <a href="/market-cap-to-gdp-the-buffett-indicator/">Market Cap to GDP</a>,
                    it has an interesting historical track record and clearly shows the stock market bubbles of 1929 and
                    1999.
                </p>

                <a href="stocks-to-real-estate-ratio/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>


        <div class="card  row">
            <h5 class="card-title">Dow to Gold Ratio</h5>
            <a href="dow-gold-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/dow-to-gold-ratio.png"
                     alt="Dow to Gold Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">The dow to gold ratio indicates the number of ounces of gold it takes to buy the shares
                    in
                    the Dow Jones Industrial Average index.

                </p>

                <a href="dow-gold-ratio/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Growth vs. Value Stocks</h5>
            <a href="growth-stocks-vs-value-stocks/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/growth-stocks-vs-value-stocks.png"
                     alt="Growth vs. Value Stocks">
            </a>
            <div class="card-body">
                <p class="card-text">Which performed better in recent years, growth stocks or value stocks? When the ratio
                    rises,
                    growth stocks outperform value stocks -
                    and when it falls, value stocks outperform growth stocks.
                </p>

                <a href="growth-stocks-vs-value-stocks/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>


        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Large-cap vs. Small-cap Stocks</h5>
            <a href="large-cap-vs-small-cap/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/large-cap-vs-small-cap-stocks.png"
                     alt="Large-cap vs. Small-cap Stocks">
            </a>
            <div class="card-body">
                <p class="card-text">Which performed better in recent years, large-cap or small-cap stocks? When the ratio
                    rises,
                    large-cap stocks outperform small-cap stocks - and when it falls, small-cap stocks outperform large-cap
                    stocks.


                </p>

                <a href="large-cap-vs-small-cap/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>


        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Nasdaq to S&P 500 Ratio</h5>
            <a href="nasdaq-vs-sp500/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/nasdaq-vs-sp500.png"
                     alt="Nasdaq to S&P 500 Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">What is the proportion of the Nasdaq to the overall US stock market? The ratio in this
                    chart
                    divides
                    the Nasdaq Composite Index by the S&P 500. The ratio peaked in the year 2000, during the Dot-com mania.


                </p>

                <a href="nasdaq-vs-sp500/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>


        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">US Stocks vs. The World</h5>
            <a href="msci-usa-vs-the-world/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/msci-usa-vs-the-world.png"
                     alt="US Stocks vs. The World">
            </a>
            <div class="card-body">
                <p class="card-text"> What is the proportion of the US stock market to the global stock market?
                    By definition, this ratio cannot grow forever. At some point, US stocks would simply make up 100% of
                    global
                    stocks.

                </p>

                <a href="msci-usa-vs-the-world/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>

        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Emerging vs. Developed Markets</h5>
            <a href="emerging-vs-developed-markets/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/emerging-vs-developed-markets.png"
                     alt="Emerging vs. Developed Markets">
            </a>
            <div class="card-body">
                <p class="card-text">Which performed better in recent years, emerging or developed market equities?
                    The ratio in this chart divides the MSCI Emerging Markets Index by the MSCI World Index.

                </p>

                <a href="emerging-vs-developed-markets/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Bitcoin vs. Gold</h5>
            <a href="bitcoin-vs-gold/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/bitcoin-vs-gold.png"
                     alt="Bitcoin vs. Gold">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The ratio in this chart divides the price of Bitcoin by the price of Gold. When the ratio rises, Bitcoin
                    is
                    outperforming Gold - and when it falls, Gold is outperforming Bitcoin.
                </p>

                <a href="bitcoin-vs-gold/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Real Estate to Gold Ratio</h5>
            <a href="real-estate-gold-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/real-estate-gold-ratio.png"
                     alt="Real Estate to Gold Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The real estate to gold ratio is a measure of relative value between gold and real estate.
                    It indicates the number of ounces of gold required to purchase an average single family house in the
                    United
                    States.
                </p>

                <a href="real-estate-gold-ratio/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Copper to Gold Ratio</h5>
            <a href="copper-gold-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/copper-gold-ratio.png"
                     alt="Copper to Gold Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The copper to gold ratio indicates the number of ounces of gold it takes to buy an ounce of copper. The
                    ratio is
                    an
                    indicator of the health of the global economy and interestingly, it correlates strongly with interest
                    rates.
                </p>

                <a href="copper-gold-ratio/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Oil to Gold Ratio</h5>
            <a href="oil-gold-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/oil-gold-ratio.png"
                     alt="Oil to Gold Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The oil to gold ratio indicates the number of ounces of gold it takes to buy a barrel of oil. Similar to
                    the
                    <a href="/copper-gold-ratio/">copper gold ratio</a>, the oil gold ratio is an indicator of the health of
                    the
                    global economy.

                </p>

                <a href="oil-gold-ratio/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <div class="card  row">
            <h5 class="card-title">Gold to Silver Ratio</h5>
            <a href="gold-silver-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/gold-silver-ratio.png"
                     alt="Gold to Silver Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">The gold silver ratio represents the number of silver ounces it takes to buy a single
                    ounce
                    of gold.
                    Interestingly, it correlates strongly with the US Dollar index.


                </p>

                <a href="gold-silver-ratio/" class="card-btn">
                    <div class="button ">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">US Debt to GDP</h5>
            <a href="us-debt-to-gdp/">
                <img class="card-img rounded img-fluid"
                     src="/static/my_app/images/us-federal-total-public-debt-to-gdp-ratio.png" alt="US Debt to GDP">
            </a>
            <div class="card-body">
                <p class="card-text">These charts show the government-, corporate-, and household-debt to gdp ratios.
                    Expressing a nation's debt as a ratio to its gross domestic product (GDP) allows for better comparison
                    over
                    time. </p>

                <a href="us-debt-to-gdp/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <div class="card  row">
            <h5 class="card-title">M2 Money Supply Growth vs. Inflation</h5>
            <a href="m2-money-supply-vs-inflation/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/m2-money-supply.png"
                     alt="M2 Money Supply Growth vs. Inflation">
            </a>
            <div class="card-body">
                <p class="card-text">The M2 Money Supply is a measure for the amount of currency in circulation.
                    This chart plots the yearly M2 Growth Rate and the Inflation Rate.
                </p>

                <a href="m2-money-supply-vs-inflation/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">The Real Interest Rate</h5>
            <a href="real-interest-rate/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/real-interest-rate.png"
                     alt="The Real Interest Rate">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The real interest rate is calculated as the difference between the nominal interest rate and the
                    inflation rate.

                </p>

                <a href="real-interest-rate/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Gold vs. Real Yields</h5>
            <a href="gold-vs-real-yields">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/gold-vs-real-yields.png"
                     alt="Gold vs. Real Yields">
            </a>
            <div class="card-body">
                <p class="card-text">
                    This chart plots gold prices and real yields. Gold and real yields are negatively correlated. In other
                    words,
                    when real yields go down gold goes up.
                </p>

                <a href="gold-vs-real-yields/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">US Yield Curve</h5>
            <a href="us-treasury-yield-curve/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/us-treasury-yields.png"
                     alt=">US Yield Curve">
            </a>
            <div class="card-body">
                <p class="card-text">
                    These charts display the spreads between long-term and short-term US Government Bond Yields.
                    A negative spread indicates an inverted yield curve, which is often considered to be a predictor of an
                    economic
                    recession.
                </p>

                <a href="us-treasury-yield-curve/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Bond Yield Credit Spreads</h5>
            <a href="bond-yield-credit-spreads/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/yield-spreads.png"
                     alt="Bond Yield Credit Spreads">
            </a>
            <div class="card-body">
                <p class="card-text">
                    These charts display the yield spreads between Corporate Bonds, Treasury Bonds, and Mortgages.
                    The spreads tend to widen in economic recessions and indicate an increased risk of default as well as
                    reduced
                    liquidity
                    in the market.
                </p>

                <a href="bond-yield-credit-spreads/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">S&P 500 Dividend Yield</h5>
            <a href="sp500-dividend-yield/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/dividend-yield.png"
                     alt="S&P 500 Dividend Yield">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The dividend yield indicates how much a company pays out in dividends each year relative to its share
                    price.
                    In other words, it measures how much "bang for your buck" you are getting from dividends.
                </p>

                <a href="sp500-dividend-yield/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Stocks to Commodities Ratio</h5>
            <a href="stocks-commodities-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/stocks-to-commodities-ratio-2.png"
                     alt="Stocks to Commodities Ratio">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The stocks to commodities ratio measures the S&P 500 relative to the commodity market index PPI
                    (Producer Price
                    Index).
                </p>

                <a href="stocks-commodities-ratio/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <div class="card  row">
            <h5 class="card-title">Commodity Prices</h5>
            <a href="commodity-futures-prices/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/commodities.png" alt="commodities">
            </a>
            <div class="card-body">
                <p class="card-text">
                    These charts display the prices for different commodities relative to each other.
                </p>

                <a href="commodity-futures-prices/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <div class="card  row">
            <h5 class="card-title">Relative Strength: US Stock Market Sectors</h5>
            <a href="us-sectors-relative-strength/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/us-sectors-realtive-strength.png"
                     alt="Relative Strength: US Stock Market Sectors">
            </a>
            <div class="card-body">
                <p class="card-text">
                    These charts display the relative strength for each US stock market sector. The relative strength
                    indicates how
                    well a given sector
                    performed compared to the overall stock market (as measured by the S&P 500).
                </p>

                <a href="us-sectors-relative-strength/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <div class="card  row">
            <h5 class="card-title">National Stock Markets Comparison</h5>
            <a href="national-stock-markets-comparison/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/stock-indices-of-the-world.png"
                     alt="National Stock Markets Comparison">
            </a>
            <div class="card-body">
                <p class="card-text">
                    Which national stock market index performed the best? The indices are converted into US
                    Dollars, allowing for an accurate perfomance comparison.
                </p>

                <a href="national-stock-markets-comparison/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <div class="card  row">
            <h5 class="card-title">Mining Stocks vs. Gold & Silver</h5>
            <a href="mining-stocks-vs-gold-and-silver/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/mining-stocks-to-gold.png"
                     alt="Mining Stocks vs. Gold & Silver">
            </a>
            <div class="card-body">
                <p class="card-text">
                    How do mining companies perform compared to the physical metals that they produce? This chart goes back
                    all the
                    way back to 1939.
                </p>

                <a href="mining-stocks-vs-gold-and-silver/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Ethereum vs. Bitcoin</h5>
            <a href="ethereum-vs-bitcoin/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/ethereum-vs-bitcoin.png"
                     alt="Ethereum vs. Bitcoin">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The ratio in the chart above divides the price of Ether by the price of Bitcoin. When the ratio rises,
                    Ether is
                    outperforming Bitcoin - and when it falls, Ether is underperforming.
                </p>

                <a href="ethereum-vs-bitcoin/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">Home Price to Income Ratio (US & UK)</h5>
            <a href="home-price-median-annual-income-ratio/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/home-price-to-income-ratio.png"
                     alt="Home Price to Income Ratio (US & UK)">
            </a>
            <div class="card-body">
                <p class="card-text">
                    Historically, an average house in the U.S. cost around 5 times the yearly household income. The ratio in
                    this
                    chart divides the Case-Shiller Home Price
                    Index by the US median annual household income.
                </p>

                <a href="home-price-median-annual-income-ratio/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


        <div class="card  row">
            <h5 class="card-title">The Real Home Price (US & UK)</h5>
            <a href="home-price-vs-inflation/">
                <img class="card-img rounded img-fluid" src="/static/my_app/images/home-price-cpi-ratio.png"
                     alt="The Real Home Price (US & UK)">
            </a>
            <div class="card-body">
                <p class="card-text">
                    The ratios in these charts divide the nominal home price by the Consumer Price Index (CPI) and therefore
                    display
                    the real home price over time.
                </p>

                <a href="home-price-vs-inflation/" class="card-btn">
                    <div class="button card-btn">
                        View chart
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>


    </div>
@endsection
