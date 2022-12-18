<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'category_id' => 1,
                'slug' => 'stocks-vs-gold-comparison',
                'title' => 'Stocks vs. Gold and Silver',
                'description' => 'Which was the best investment in the past 30, 50, 80, or 100 years? This chart compares the performance of the S&P 500, the Dow Jones, Gold, and Silver.',
                'content' => '<div class="container"><div class="row"><div class="col-lg-12"><div class="chart" id="chart1" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>Which was the best investment in the past 30, 50, 80, or 100 years? This chart compares the performance of the<font color="red"><b>S&P 500</b></font>, the<font color="blue"><b>Dow Jones</b></font>,<font color="gold"><b>Gold</b></font>, and<font color="silver"><b>Silver</b></font>. The<font color="blue"><b>Dow Jones</b></font>is a stock index that includes 30 large publicly traded companies based in the United States. It is one of the oldest and most-watched indices in the world. The<font color="red"><b>S&P 500</b></font>consists of 500 large US companies, it is<a href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp" target="_blank">capitalization-weighted</a>, and it captures approximately<a href="http://us.spindices.com/indices/equity/sp-500" target="_blank">80%</a>of available market capitalization. For these reasons it is more representative of the US stock market than the Dow Jones. Both versions of these indices are price indices in contrast to<a href="http://www.investopedia.com/terms/t/total_return_index.asp" target="_blank">total return indices</a>. Therefore, they do not include dividends. Including dividends leads to a very different picture, which is demonstrated in the chart below.</p><h3>Data Sources</h3><ul><li>Recent data</li><ul class="data" style="margin-left:0" ;><li><a href="https://fred.stlouisfed.org/series/DJIA" target="_blank">Dow Jones</a></li><li><a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P 500</a></li><li><a href="https://www.quandl.com/data/LBMA/GOLD" target="_blank">Gold prices</a></li><li><a href="https://www.quandl.com/data/LBMA/SILVER" target="_blank">Silver prices</a></li></ul><li>Historical data</li><ul class="data" style="margin-left:0" ;><li><a href="https://www.quandl.com/data/BCB/UDJIAD1" target="_blank">Dow Jones</a></li><li><a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li><li><a href="http://onlygold.com/Info/Historical-Gold-Prices.asp" target="_blank">Gold prices</a></li><li><a href="https://www.macrotrends.net/1470/historical-silver-prices-100-year-chart" target="_blank">Silver prices</a></li></ul></ul><h3>Further Information</h3><ul><li>Longermtrends:<a href="/dow-gold-ratio/">Dow to Gold ratio since 1792</a></li><li>Longermtrends:<a href="/gold-silver-ratio/">Gold to Silver Ratio</a></li><li>Investopedia:<a href="http://www.investopedia.com/terms/s/sp500.asp" target="_blank">Standard & Poor\'s 500 Index - S&P 500</a></li><li>Investopedia:<a href="http://www.investopedia.com/terms/d/djia.asp" target="_blank">Dow Jones Industrial Average - DJIA</a></li></ul></div><div class="col-md-4 side-content"><a href="https://www.tradingview.com/chart/fEPAMKwE/?symbol=TVC%3ADJI&aff_id=27777&offer_id=10" target="_blank" id="tradingview_banner_link"><img src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336" height="280" border="0"></a><img src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0" style="position:absolute;visibility:hidden" border="0"></div></div><div class="line"><hr></div><div class="container"><div class="row"><div class="col-md-12"><h2>Including Dividends: Total Return Stock Index</h2><div class="chart" id="chart2" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>In contrast to the<font color="red"><b>S&P 500 Price Index</b></font>and the<font color="blue"><b>Dow Jones</b></font>, the<font class="black"><b>Wilshire Large-Cap</b></font>is a<a href="http://www.investopedia.com/terms/t/total_return_index.asp" target="_blank">total return index</a>, in which all resulting cash payouts (including dividends) are automatically reinvested back into the fund itself. Therefore, it includes all capital gains and it allows for an accurate performance comparison with<font color="gold"><b>Gold</b></font>and<font color="silver"><b>Silver</b></font>.<br>Unfortunately, the<font class="black"><b>Wilshire Large-Cap</b></font>only dates back to 1978. For this reason the<font class="black"><b>S&P 500 Total Return</b></font>from 1871 until 1977 was<a href="https://www.dropbox.com/s/dgwp8zw3zxpx7q8/SP500%20Total%20Return.xlsx?dl=0" target="_blank">calculated</a>based on<a href="http://www.econ.yale.edu/~shiller/data/chapt26.xlsx" target="_blank">Robert Shiller\'s data</a>and added to the Wilshire index. Both indices are very similar. While the S&P 500 includes 500 companies, the Wilshire Large-Cap includes 750 companies. Both indices are<a href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp" target="_blank">capitalization-weighted</a>and both are considered benchmarks for large-cap stocks.</p><h3>Data Sources</h3><ul><li>Online Data Robert Shiller:<a href="http://www.econ.yale.edu/~shiller/data/chapt26.xlsx" target="_blank">long term stock, bond, interest rate and consumption data</a></li><li><a href="https://www.dropbox.com/s/dgwp8zw3zxpx7q8/SP500%20Total%20Return.xlsx?dl=0" target="_blank">Excel Calculation for the S&P 500 Total Return since 1871</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://fred.stlouisfed.org/series/WILLLRGCAP" target="_blank">Wilshire US Large-Cap Total Market Index</a></li></ul><h3>Further Information</h3><ul><li><a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Robert Shiller\'s online data collection</a></li><li><a href="https://www.indexologyblog.com/2017/02/07/index-basics-calculating-an-indexs-total-return/" target="_blank">Index Basics: Calculating an Index’s Total Return</a></li><li>Wilshire:<a href="https://www.wilshire.com/research-insights/resources-and-forms?Index=FT%20Wilshire%20Large%20Cap%20Index" target="_blank">Wilshire Large-Cap Index Fact Sheet</a></li></ul></div><div class="col-md-4 side-content"><a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto"><img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0"></a></div></div><div class="group-buttons"><br><button id="dwnload_btn" class="download-xls button chart-button">Download xls</button><a class="a-tag-viewmore" href="/"><div class="button chart-button more-charts">View More Charts</div></a><br></div>',
                'image' => '/static/my_app/images/stocks-gold-comparison.png',
            ],
            [
                'category_id' => 1,
                'slug' => 'stocks-to-real-estate-ratio',
                'title' => 'Stocks vs. Real Estate',
                'description' => 'The Stocks to Real Estate ratio divides the S&amp;P 500 index by the Case-Shiller Home Price Index. Just like<a href="/market-cap-to-gdp-the-buffett-indicator/">Market Cap to GDP</a>, it has an interesting historical track record and clearly shows the stock market bubbles of 1929 and 1999.',
                'content' => '<div class="container"><div class="row"><div class="col-md-12"><h2>Stocks to Real Estate Ratio</h2><div class="chart" id="chart1" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>The Stocks to Real Estate ratio divides the S&P 500 index by the Case-Shiller Home Price Index. Just like<a href="/market-cap-to-gdp-the-buffett-indicator/">Market Cap to GDP</a>, the Stocks to Real Estate ratio has an interesting historical track record and clearly shows the stock market bubbles of 1929 and 1999.<br>The<a href="https://shar.es/aHOMOm" target="_blank">Case-Shiller Home Price Index</a>seeks to measure the price of all existing single-family housing stock. Based on the pioneering research of<a href="https://en.wikipedia.org/wiki/Karl_E._Case" target="_blank">Karl E. Case</a>and<a href="https://en.wikipedia.org/wiki/Robert_J._Shiller" target="_blank">Robert J. Shiller</a>the index is generally considered the leading measure of U.S. residential real estate prices.</p><h3>Data Sources</h3><ul><li>Recent data</li><ul class="data" style="margin-left:0" ;><li>Federal Reserve Bank of St. Louis:<a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P 500</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://research.stlouisfed.org/fred2/series/CSUSHPINSA" target="_blank">S&P/Case-Shiller U.S. National Home Price Index</a></li></ul><li>Historical data</li><ul class="data" style="margin-left:0" ;><li>Quandl:<a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li><li>Online Data Robert Shiller:<a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Historical US Home prices</a></li></ul></ul><h3>Further Information</h3><ul><li>TradingView Chart:<a href="https://www.tradingview.com/chart/8EKeoCwk/?symbol=TVC%3ASPX%2FFRED%3ACSUSHPINSA&aff_id=27777&offer_id=10" target="_blank" id="tradingview_text_link">S&P 500 / Real Estate</a></li><li>Investopedia:<a href="https://www.investopedia.com/ask/answers/052015/which-has-performed-better-historically-stock-market-or-real-estate.asp" target="_blank">Has Real Estate or the Stock Market Performed Better Historically?</a></li><li>Investopedia:<a href="http://www.investopedia.com/terms/s/sp500.asp" target="_blank">Standard & Poor\'s 500 Index - S&P 500</a></li><li>Investopedia:<a href="https://www.investopedia.com/articles/mortgages-real-estate/10/understanding-case-shiller-index.asp" target="_blank">Understanding the Case-Shiller Housing Index</a></li><li>BIS:<a href="https://www.bis.org/publ/work665.htm">Interest rates and house prices in the United States and around the world</a></li></ul></div><div class="col-md-4 side-content"><a href="https://www.tradingview.com/chart/8EKeoCwk/?symbol=TVC%3ASPX%2FFRED%3ACSUSHPINSA&aff_id=27777&offer_id=10" target="_blank" id="tradingview_banner_link"><img src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336" height="280" border="0"></a><img src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0" style="position:absolute;visibility:hidden" border="0"></div></div><div class="line"><hr></div><div class="container"><div class="row"><div class="col-md-12"><h2 id="chart_header">S&P 500 vs. the Case-Shiller Home Price Index</h2><div class="chart" id="chart2" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>This chart plots both the<font color="red"><b>S&P 500</b></font>and the<font class="black"><b>Case-Shiller Home Price Index</b></font>. Over the long term the S&P 500 clearly outperforms residential property and is more volatile. The housing bubble and subsequent stock market crash are clearly visible in the chart.</p></div><div class="col-md-4 side-content"><a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto"><img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0"></a></div></div><div class="container"><div class="col-md-12"><br><br><p>Page created by<a href="https://twitter.com/willbeaufoy" target="_blank">Will Beaufoy</a></p></div></div><div class="group-buttons"><br><form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="DY2vaa1O9bzDwa3541hAKeN68NFFRM8bBmLbGWPiudqszposn1H6aNiF966ktIGa"> <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="stocks-to-real-estate-ratio"><button id="buy_btn" type="submit" class="buy-button button chart-button" style="margin-top:5px">Download Data for 19.95 USD</button></form><a class="a-tag-viewmore" href="/"><div class="button chart-button more-charts">View More Charts</div></a><br></div>',
                'image' => '/static/my_app/images/sp-500-real-estate-ratio.png',
            ],
            [
                'category_id' => 2,
                'slug' => 'sp500-price-earnings-shiller-pe-ratio',
                'title' => 'S&P 500 PE Ratio',
                'description' => 'The price earnings ratio is calculated by dividing a company\'s stock price by it\'s earnings per share. It is likely one of the best-known fundamental ratios for stock valuation.',
                'content' => '<div class="container"><div class="row"><div class="col-md-12"><div id="chart" class="chart" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>The price earnings ratio is calculated by dividing a company\'s stock price by it\'s earnings per share. In other words, the price earnings ratio shows what the market is willing to pay for a stock based on its current earnings. It is one of the most widely-used valuation metrics for stocks. The PE ratio of the S&P 500 divides the index (current market price) by the reported earnings of the trailing twelve months. In 2009 when earnings fell close to zero the ratio got out of whack. A solution to this phenomenon is to divide the price by the average inflation-adjusted earnings of the previous 10 years. In recent years, Yale professor<a href="https://en.wikipedia.org/wiki/Robert_J._Shiller">Robert Shiller</a>, he author of Irrational Exuberance, has reintroduced this adjusted ratio to a wider audience of investors. The Shiller PE Ratio of the S&P 500 is illustrated below.</p><h3>Data Sources</h3><ul><li>Quandl:<a href="https://www.quandl.com/data/MULTPL/SP500_PE_RATIO_MONTH-S-P-500-PE-Ratio-by-Month" target="_blank">S&P 500 PE Ratio by Month</a></li></ul><h3>Further Information</h3><ul><li>TradingView Chart:<a href="https://www.tradingview.com/chart/8bLWmTKq/?symbol=QUANDL%3AMULTPL%2FSHILLER_PE_RATIO_MONTH&aff_id=27777&offer_id=10" target="_blank" id="tradingview_text_link">S&P 500 Shiller PE Ratio</a></li><li>Investopedia:<a href="https://www.investopedia.com/terms/p/price-earningsratio.asp" target="_blank">Price-to-Earnings Ratio – P/E Ratio</a></li><li>Investopedia:<a href="https://www.investopedia.com/terms/s/sp500.asp" target="_blank">S&P 500 Index – Standard & Poor\'s 500 Index</a></li></ul></div><div class="col-md-4 side-content"><a href="https://www.tradingview.com/chart/8bLWmTKq/?symbol=QUANDL%3AMULTPL%2FSHILLER_PE_RATIO_MONTH&aff_id=27777&offer_id=10" target="_blank" id="tradingview_banner_link"><img src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336" height="280" border="0"></a><img src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0" style="position:absolute;visibility:hidden" border="0"></div></div><div class="line"><hr></div><div class="container"><div class="row"><div class="col-md-12"><h2>The Shiller PE Ratio</h2><div id="chart2" class="chart" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>Instead of dividing by the earnings of<i>one</i>year (see chart above), this ratio divides the price of the S&P 500 index by the average inflation-adjusted earnings of the previous 10 years. The ratio is also known as the Cyclically Adjusted PE Ratio (CAPE Ratio), the Shiller PE Ratio, or the P/E10.</p><h3>Data Sources</h3><ul><li>Quandl:<a href="https://www.quandl.com/data/MULTPL/SHILLER_PE_RATIO_MONTH-Shiller-PE-Ratio-by-Month" target="_blank">Shiller PE Ratio by Month</a></li></ul><h3>Further Information</h3><ul><li>Robert Shiller\'s online data collection and further information about his PE ratio:<a href="http://www.econ.yale.edu/~shiller/data.htm" target="_blank">Link</a></li><li>Wikipedia:<a href="https://en.wikipedia.org/wiki/Cyclically_adjusted_price-to-earnings_ratio" target="_blank">Cyclically adjusted price-to-earnings ratio</a></li><li>Topdown Charts:<a href="https://www.topdowncharts.com/post/2020/05/12/broken-indicators-the-forward-pe-and-the-peg" target="_blank">Broken Indicators: The Forward PE and the PEG</a></li></ul></div><div class="col-md-4 side-content"><a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto"><img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0"></a></div></div><div class="group-buttons"><br><button id="dwnload_btn" class="download-xls button chart-button">Download xls</button><a class="a-tag-viewmore" href="/"><div class="button chart-button more-charts">View More Charts</div></a><br></div>',
                'image' => '/static/my_app/images/price-earnings-ratio.png',
            ],
            [
                'category_id' => 2,
                'slug' => 'market-cap-to-gdp-the-buffett-indicator',
                'title' => 'The Buffett Indicator: Market Cap to GDP',
                'description' => 'Market cap to GDP is a long-term valuation indicator for stocks. It has become popular in recent years, thanks to Warren Buffett.',
                'content' => '<div class="container"><div class="row"><div class="col-lg-12"><h2>Wilshire 5000 to GDP Ratio</h2><div class="chart" id="chart" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>Market Cap to GDP is a long-term valuation indicator for stocks. It has become popular in recent years, thanks to Warren Buffett. Back in 2001 he remarked in a<a href="http://archive.fortune.com/magazines/fortune/fortune_archive/2001/12/10/314691/index.htm">Fortune Magazine</a>interview that "it is probably the best single measure of where valuations stand at any given moment."<br>\'Market Cap to GDP\' is commonly defined as a measure of the total value of all publicly-traded stocks in a country, divided by that country’s Gross Domestic Product.<br>The ratio in the chart above is calculated by dividing the \'Wilshire 5000 Total Market Index\' by the US GDP. The<font color="orange"><b>Wilshire 5000</b></font>is widely accepted as the definitive benchmark for the US equity market and is intended to measure the total market capitalization of all US equity securities with readily available price data.</p><h3>Data Sources</h3><ul><li>Federal Reserve Bank of St. Louis:<a href="https://research.stlouisfed.org/fred2/series/WILL5000PRFC" target="_blank">Wilshire 5000 Full Cap Price Index</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US Gross Domestic Product</a></li></ul><h3>Further Information</h3><ul><li>TradingView Chart:<a href="https://www.tradingview.com/chart/6kNR1W2K/?symbol=FRED%3AWILL5000PR%2FFRED%3AGDP&aff_id=27777&offer_id=10" target="_blank" id="tradingview_text_link">Wilshire 5000 to GDP Ratio</a></li><li>2015 Berkshire Shareholder Meeting:<a href="https://pca.st/p2v7pmay#t=3745" target="_blank">Warren Buffett on the elevated levels of the indicator (at 01:02:25)</a></li><li>Corporate Finance Institute:<a href="https://corporatefinanceinstitute.com/resources/knowledge/valuation/market-cap-to-gdp-buffett-indicator/" target="_blank">What is the Market Cap to GDP Ratio?</a></li><li>Lyn Alden:<a href="https://www.lynalden.com/market-capitalization/" target="_blank">How Market Capitalization Works (And a Look at Rolling Bubbles)</a></li><li>Wilshire:<a href="https://www.wilshire.com/research-insights/resources-and-forms?Index=FT%20Wilshire%205000%20Index" target="_blank">Wilshire 5000 Index Fact Sheet</a></li><li>Investopedia:<a href="https://www.investopedia.com/terms/g/gdp.asp" target="_blank">What Is Gross Domestic Product (GDP)?</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://fred.stlouisfed.org/graph/fredgraph.png?g=gR4" target="_blank">GNP vs. GDP</a></li></ul></div><div class="col-md-4 side-content"><a href="https://www.tradingview.com/chart/6kNR1W2K/?symbol=FRED%3AWILL5000PR%2FFRED%3AGDP&aff_id=27777&offer_id=10" target="_blank" id="tradingview_banner_link"><img src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336" height="280" border="0"></a><img src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0" style="position:absolute;visibility:hidden" border="0"></div></div><div class="line"><hr></div><div class="container"><div class="row"><div class="col-md-12"><h2 id="chart_header">Value of Public and Private Equities to GDP Ratio</h2><div id="chart2" class="chart" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>In contrast to the Wilshire 5000, the numerator in the chart above includes the total value of public<i>and private</i>equities. However, it only gets published quarterly and therefore is always lagging a bit behind. On the upside, it has data going back to the 1940s, thereby providing a more historical perspective.</p><h3>Data Sources</h3><ul><li>Federal Reserve Bank of St. Louis:<a href="https://fred.stlouisfed.org/series/BOGZ1LM893064105Q" target="_blank">Corporate Equities</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US Gross Domestic Product</a></li></ul></div><div class="col-md-4 side-content"><a href="https://www.greencryptoresearch.com/blockchains" target="_blank" id="greencrypto"><img alt="greencryptoresearch" src="/static/my_app/images/GCR_72dpi.png" width="336" border="0"></a></div></div><div class="line"><hr></div><div class="container"><div class="row"><div class="col-md-12"><h2>DOW to GDP Ratio</h2><div id="chart3" class="chart" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>In contrast to the<font color="orange"><b>Wilshire 5000</b></font>, the<font color="blue"><b>Dow Jones</b></font>only contains 30 publicly traded companies. The index is price-weighted, so stocks with a higher share price are given greater weight. For these reasons, it is not as accurate as the Wilshire 5000 for measuring the market capitalization. However, all these ratios look very similar - and since some calculations for the<font color="blue"><b>Dow Jones</b></font>go back to 1790, this ratio provides an interesting historical perspective.</p><h3>Data Sources</h3><ul><li>Recent data</li><ul class="data" style="margin-left:0" ;><li>Federal Reserve Bank of St. Louis:<a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US Gross Domestic Product</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://fred.stlouisfed.org/series/DJIA" target="_blank">Dow Jones</a></li></ul><li>Historical data</li><ul class="data" style="margin-left:0" ;><li>Congressional Budget Office:<a href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls" target="_blank">Historical Gross Domestic Product</a></li><li>Wikipedia:<a href="https://de.wikipedia.org/wiki/Dow_Jones_Industrial_Average" target="_blank">Historical Dow Jones prices</a></li></ul></ul><h3>Further Information</h3><ul><li>Investopedia:<a href="http://www.investopedia.com/terms/d/djia.asp" target="_blank">Dow Jones Industrial Average - DJIA</a></li></ul></div></div><div class="line"><hr></div><div class="container"><div class="row"><div class="col-md-12"><h2>S&P 500 to GDP Ratio</h2><div id="chart4" class="chart" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>For comparison purposes the<font color="red"><b>S&P 500</b></font>to GDP ratio is shown here as well. The S&P 500 consists of 500 large US companies. Just like the<font color="orange"><b>Wilshire 5000</b></font>, it is a<a href="http://www.investopedia.com/terms/c/capitalizationweightedindex.asp" target="_blank">capitalization-weighted Index</a>. It captures approximately<a href="http://us.spindices.com/indices/equity/sp-500" target="_blank">80%</a>of the available total market capitalization. For these reasons, it\'s a much better measure for \'market cap\' than the<font color="blue"><b>Dow Jones</b></font>.<br><b>Update:</b>Since 1971,<a href="/us-stock-market-indices/" target="_blank">the S&P 500 performed almost identically to the Wilshire 5000</a>. However, the<font color="red"><b>S&P 500</b></font>is still just a proxy for the total value of all US publicly-traded equities and over the long-term it performed differently. According to<a href="https://dkuvshinov.com/wp-content/uploads/2018/09/big_bang_latest.pdf" target="_blank">this paper (page A56)</a>, the US market cap to gdp ratio in the late 1800\'s was around 50%, which is a third of what it was during the Dot-com bubble of 2000.</p><h3>Data Sources</h3><ul><li>Recent data</li><ul class="data" style="margin-left:0" ;><li>Federal Reserve Bank of St. Louis:<a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US Gross Domestic Product</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P 500</a></li></ul><li>Historical data</li><ul class="data" style="margin-left:0" ;><li>Congressional Budget Office:<a href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls" target="_blank">Historical Gross Domestic Product</a></li><li>Quandl:<a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li></ul></ul><h3>Further Information</h3><ul><li>dkuvshinov.com<a href="https://dkuvshinov.com/wp-content/uploads/2018/09/big_bang_latest.pdf" target="_blank">The Big Bang: Stock Market Capitalization in the Long Run</a></li><li>Investopedia:<a href="https://www.investopedia.com/terms/s/sp500.asp" target="_blank">S&P 500 Index – Standard & Poor\'s 500 Index</a></li></ul></div></div><div class="line"><hr></div><div class="container"><div class="row"><div class="col-md-12"><h2>S&P 500 vs. GDP</h2><div id="chart5" class="chart" style="height:500px;min-width:310px"><div class="loading" id="loading-animation"><img src="/static/my_app/images/loading.png" class="loading-sign"><h3>Loading Data</h3><h4>Please wait, we are loading chart data</h4></div></div></div></div></div><div class="container"><div class="col-md-8"><h3>Interpretation</h3><p>As mentioned above, the<font color="red"><b>S&P 500</b></font>captures approximately<a href="http://us.spindices.com/indices/equity/sp-500" target="_blank">80%</a>of available market capitalization. Therefore it is quite representative of the entire stock market. Intuitively, the stock market and the overall<b class="black">economy</b>should grow with a similar pace.</p><h3>Data Sources</h3><ul><li>Recent data</li><ul class="data" style="margin-left:0" ;><li>Federal Reserve Bank of St. Louis:<a href="https://research.stlouisfed.org/fred2/series/GDP" target="_blank">US Gross Domestic Product</a></li><li>Federal Reserve Bank of St. Louis:<a href="https://fred.stlouisfed.org/series/SP500" target="_blank">S&P 500</a></li></ul><li>Historical data</li><ul class="data" style="margin-left:0" ;><li>Congressional Budget Office:<a href="https://www.cbo.gov/sites/default/files/cbofiles/ftpdocs/117xx/doc11766/historicaldebt2000.xls" target="_blank">Historical Gross Domestic Product</a></li><li>Quandl:<a href="https://www.quandl.com/data/MULTPL/SP500_REAL_PRICE_MONTH" target="_blank">S&P 500</a></li></ul></ul></div></div><div class="group-buttons"><br><form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="3bKhBggVuoJPTWOY9wORqsDoIduaO19h1ztX724pPqAEWb9lswenQ18XJwVPqXHg"> <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="market-cap-to-gdp-the-buffett-indicator"><button id="buy_btn" type="submit" class="buy-button button chart-button" style="margin-top:5px">Download Data for 19.95 USD</button></form><a class="a-tag-viewmore" href="/"><div class="button chart-button more-charts">View More Charts</div></a><br></div>',
                'image' => '/static/my_app/images/market-cap-to-gdp.png',
            ]
        ];

        foreach ($posts as $post) {
            Post::create(
                [
                    'category_id' => $post["category_id"],
                    'slug' => $post["slug"],
                    'title' => $post["title"],
                    'description' => $post["description"],
                    'content' => $post["content"],
                    'image' => $post["image"],
                ]
            );
        }

        \App\Models\Post::factory(30)->create();
    }
}
