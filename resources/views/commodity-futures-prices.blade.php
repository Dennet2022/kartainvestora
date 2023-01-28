@extends('layouts.main')

@section('content')

    <div class="header-market price">

        <h1>Commodity Prices</h1>

    </div>


    <!-- /.container -->


    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="chart" id="chart1" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart2" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart3" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart4" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart5" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart6" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart7" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart8" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart9" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chart" id="chart10" style="height: 500px; min-width: 310px">
                    <div class="loading" id="loading-animation">
                        <img src="/static/my_app/images/loading.png" class="loading-sign" alt="img">
                        <h3>Loading Data</h3>
                        <h4>Please wait, we are loading chart data</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.row -->
    <!-- /.container -->
    <div class="container">
        <div class="col-md-8">
            <h3>Interpretation</h3>
            <p>
                The charts above display the prices for different commodities relative to each other.
                <br>
                Commodities are predominantly traded as futures contracts. There are a handful of exchanges that cover most of
                trading volume. They include the <a href="https://en.wikipedia.org/wiki/Intercontinental_Exchange"
                                                    target="_blank">Intercontinental Exchange (ICE)</a>, the <a
                    href="https://en.wikipedia.org/wiki/Chicago_Mercantile_Exchange" target="_blank">Chicago Mercantile Exchange
                    (CME)</a>, the <a href="https://www.investopedia.com/terms/c/comex.asp" target="_blank">COMEX</a>, the <a
                    href="https://www.investopedia.com/terms/c/cbot.asp" target="_blank">Chicago Board of Trade (CBOT)</a>, and the
                <a href="https://en.wikipedia.org/wiki/New_York_Mercantile_Exchange" target="_blank">New York Mercantile Exchange
                    (NYMEX)</a>. All these exchanges but the first one are owned by the <a
                    href="https://en.wikipedia.org/wiki/CME_Group" target="_blank">CME Group</a>.
                <br>
                A commodity futures contract is an agreement to buy or sell a predetermined amount of a commodity at a specific
                price on a specific date in the future.
                Future contracts are either cash-settled or physically delivered upon the expiry date of the contract.
                When a contract is <b>cash-settled</b>, the net cash position of the contract on the expiry date is transferred
                between the buyer and the seller.
                In <b>physical delivery</b>, the seller is required to provide the asset at the defined time and place - and the
                buyer must receive it.
                However, in order to avoid settlement, most futures contracts are actually <a
                    href="https://www.cmegroup.com/education/courses/introduction-to-futures/understanding-futures-expiration-contract-roll.html"
                    target="_blank">offset or rolled-over</a> prior to expiration. When the forward curve is in <a
                    href="https://www.investopedia.com/terms/c/contango.asp" target="_blank">contango</a>, rolling-over can induce
                signifant cost.
                For this reason, in order to get exposure to commodities, long-term investors often choose to invest in equities
                rather than in futures contracts.
            </p>

            <h3>Data Sources</h3>
            <ul>
                <li>Quandl: <a href="https://blog.quandl.com/api-for-commodity-data" target="_blank">ODA - Open Data for
                        Africa</a></li>
                <li>Precious Metals</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PGOLD_USD" target="_blank">Gold; London Bullion Market
                            Association; USD/troy ounce</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSILVER_USD" target="_blank">Silver; London Bullion Market
                            Association; USD/troy ounce</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PPALLA_USD" target="_blank">Palladium; LME spot price; USD/
                            troy ounce</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PPLAT_USD" target="_blank">Platinum; LME spot price;
                            USD/troy ounce</a></li>
                </ul>
                <li>Base Metals</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PALUM_USD" target="_blank">Aluminum; 99.5% minimum purity;
                            LME spot price; CIF UK ports; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PCOPP_USD" target="_blank">Copper; grade A cathode; LME
                            spot price; CIF European ports; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PIORECR_USD" target="_blank">China import Iron Ore Fines
                            62% FE spot (CFR Tianjin port); US dollars per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PLEAD_USD" target="_blank">Lead; 99.97% pure; LME spot
                            price; CIF European Ports; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PNICK_USD" target="_blank">Nickel; melting grade; LME spot
                            price; CIF European ports; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PTIN_USD" target="_blank">Tin; standard grade; LME spot
                            price; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PZINC_USD" target="_blank">Zinc; high grade 98% pure; US$
                            per metric ton</a></li>
                </ul>
                <li>Grain Prices</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PBARL_USD" target="_blank">Barley; Canadian no.1 Western
                            Barley; spot price; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PRICENPQ_USD" target="_blank">Rice; 5 percent broken milled
                            white rice; Thailand nominal price quote; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PWHEAMT_USD" target="_blank">Wheat; No.1 Hard Red Winter;
                            ordinary protein; Kansas City; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/POATS_USD" target="_blank">Oats; Generic 1st 'O ' Future;
                            USD/bushel</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSOYB_USD" target="_blank">Soybeans; U.S. soybeans; Chicago
                            Soybean futures contract (first contract forward) No. 2 yellow and par; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSMEA_USD" target="_blank">Soybean Meal; Chicago Soybean
                            Meal Futures (first contract forward) Minimum 48 percent protein; US$ per metric ton</a></li>
                </ul>
                <li>Farms and Fishery Prices</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PBEEF_USD" target="_blank">Beef; Australian and New Zealand
                            85% lean fores; CIF U.S. import price; US cents per pound</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PHIDE_USD" target="_blank">Hides; Heavy native steers; over
                            53 pounds; wholesale dealer's price; US; Chicago; fob Shipping Point; US cents per pound</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PPOULT_USD" target="_blank">Poultry (chicken); Whole bird
                            spot price; Ready-to-cook; whole; iced; Georgia docks; US cents per pound</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PPORK_USD" target="_blank">Swine (pork); 51-52% lean Hogs;
                            U.S. price; US cents per pound.</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PLAMB_USD" target="_blank">Lamb; frozen carcass Smithfield
                            London; US cents per pound</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PWOOLC_USD" target="_blank">Wool; coarse; 23 micron;
                            Australian Wool Exchange spot quote; US cents per kilogram</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSALM_USD" target="_blank">Fish (salmon); Farm Bred
                            Norwegian Salmon; export price; US$ per kilogram</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSHRI_USD" target="_blank">Thailand Whiteleg Shrimp 70
                            Shrimps/Kg Spot Price</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PMILK_USD" target="_blank">USDA Class 3 (formerly known as
                            Basic Formula) Milk Spot Price; USD/cwt</a></li>
                </ul>
                <li>Energy Prices</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/POILWTI_USD" target="_blank">Crude Oil (petroleum); West
                            Texas Intermediate 40 API; Midland Texas; US$ per barrel</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PNGASEU_USD" target="_blank">Natural Gas; Netherlands TTF
                            Natural Gas Forward Day Ahead; US$ per Million Metric British Thermal Unit</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PCOALAU_USD" target="_blank">Coal; Australian thermal coal;
                            12;000- btu/pound; less than 1% sulfur; 14% ash; FOB Newcastle/Port Kembla; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PURAN_USD" target="_blank">Uranium; NUEXCO; Restricted
                            Price; Nuexco exchange spot; US$ per pound</a></li>
                </ul>
                <li>Agriculture Softs Prices</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PCOFFOTM_USD" target="_blank">Coffee; Other Mild Arabicas;
                            International Coffee Organization New York cash price; ex-dock New York; US cents per pound</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PCOFFROB_USD" target="_blank">Coffee; Robusta;
                            International Coffee Organization New York cash price; ex-dock New York; US cents per pound</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PCOCO_USD" target="_blank">Cocoa beans; International Cocoa
                            Organization cash price; CIF US and European ports; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PTEA_USD" target="_blank">Tea; Mombasa; Kenya; Auction
                            Price; US cents per kilogram; From July 1998;Kenya auctions; Best Pekoe Fannings. Prior; London auctions;
                            c.i.f. U.K. warehouses</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSUGAUSA_USD" target="_blank">Sugar; U.S. import price;
                            contract no.14 nearest futures position; US cents per pound (Footnote: No. 14 revised to No. 16)</a></li>
                </ul>
                <li>Fruits and Nuts</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PGNUTS_USD" target="_blank">Groundnuts (peanuts); 40/50 (40
                            to 50 count per ounce); cif Argentina; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PORANG_USD" target="_blank">Oranges; Generic 1st 'JO'
                            Future; USD/lb</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PBANSOP_USD" target="_blank">Bananas; Central American and
                            Ecuador; FOB U.S. Ports; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PTOMATO_USD" target="_blank">Tomatoes; Monthly average
                            consumer prices in metropolitan France - (1 Kg); EUR</a></li>
                </ul>
                <li>Vegetable Oil Prices</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PROIL_USD" target="_blank">Rapeseed oil; crude; fob
                            Rotterdam; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSUNO_USD" target="_blank">Sunflower oil; Sunflower Oil; US
                            export price from Gulf of Mexico; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/POLVOIL_USD" target="_blank">Olive Oil; extra virgin less
                            than 1% free fatty acid; ex-tanker price U.K.; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PPOIL_USD" target="_blank">TPalm oil; Malaysia Palm Oil
                            Futures (first contract forward) 4-5 percent FFA; US$ per metric ton</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSOIL_USD" target="_blank">Soybean Oil; Chicago Soybean Oil
                            Futures (first contract forward) exchange approved grades; US$ per metric ton</a></li>
                </ul>
                <li>Fibres and Textiles</li>
                <ul class="data" style="margin-left: 0px" ;>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PLOGSK_USD" target="_blank">Hard Logs; Best quality
                            Malaysian meranti; import price Japan; US$ per cubic meter</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PLOGORE_USD" target="_blank">Soft Logs; Average Export
                            price from the U.S. for Douglas Fir; US$ per cubic meter</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSAWORE_USD" target="_blank">Soft Sawnwood; average export
                            price of Douglas Fir; U.S. Price; US$ per cubic meter</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PSAWMAL_USD" target="_blank">Hard Sawnwood; Dark Red
                            Meranti; select and better quality; C&F U.K port; US$ per cubic meter</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PRUBB_USD" target="_blank">Rubber; Singapore Commodity
                            Exchange; No. 3 Rubber Smoked Sheets; 1st contract; US cents per pound</a></li>
                    <li>Quandl: <a href="https://www.quandl.com/data/ODA/PCOTTIND_USD" target="_blank">Cotton; Cotton Outlook 'A
                            Index'; Middling 1-3/32 inch staple; CIF Liverpool; US cents per pound</a></li>
                </ul>
            </ul>
            <!-- <li>Stooq: <a href="https://stooq.com/t/?i=512" target="_blank">Main Commodities - Overview</a></li>
                      <li>Energy</li>
                        <ul class="data" style="margin-left: 0px";>
                          <li>Stooq: <a href="https://stooq.com/q/?s=cb.f" target="_blank">Crude Oil Brent - ICE (CB.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=cl.f" target="_blank">Crude Oil WTI - NYMEX (CL.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=fi.f" target="_blank">Palm Oil Malaysian Swaps - CME (FI.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=lu.f" target="_blank">ICE Rotterdam Coal - ICE (LU.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=ng.f" target="_blank">Natural Gas - NYMEX (NG.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=ux.f" target="_blank">Uranium - COMEX (UX.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zk.f" target="_blank">Ethanol Futures - CBOT (ZK.F)</a></li>
                        </ul>
                      <li>Metals</li>
                        <ul class="data" style="margin-left: 0px";>
                          <li>Stooq: <a href="https://stooq.com/q/?s=gc.f" target="_blank">Gold - COMEX (GC.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=hg.f" target="_blank">High Grade Copper - COMEX (HG.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=pa.f" target="_blank">Palladium - NYMEX (PA.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=pl.f" target="_blank">Platinum - NYMEX (PL.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=si.f" target="_blank">Silver - COMEX (SI.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=tr.f" target="_blank">Iron Ore 62% Fe CFR - COMEX (TR.F)</a></li>
                        </ul>
                      <li>Grains</li>
                        <ul class="data" style="margin-left: 0px";>
                          <li>Stooq: <a href="https://stooq.com/q/?s=ke.f" target="_blank">Hard Red Wheat - CBOT (KE.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=mw.f" target="_blank">Spring Wheat - MGEX (MW.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=rs.f" target="_blank">Canola - ICE (RS.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=xr.f" target="_blank">Rapeseed - MATIF (XR.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zc.f" target="_blank">Corn - CBOT (ZC.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zl.f" target="_blank">Soybean Oil - CBOT (ZL.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zm.f" target="_blank">Soybean Meal - CBOT (ZM.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zo.f" target="_blank">Oats - CBOT (ZO.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zr.f" target="_blank">Rough Rice - CBOT (ZR.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zs.f" target="_blank">Soybean - CBOT (ZS.F)</a></li>
                          <li>Stooq: <a href="https://stooq.com/q/?s=zw.f" target="_blank"> Wheat - CBOT (ZW.F)</a></li>
                        </ul>
                    <li>Softs</li>
                      <ul class="data" style="margin-left: 0px";>
                        <li>Stooq: <a href="https://stooq.com/q/?s=ca.f" target="_blank"> Cocoa #7 - ICE (CA.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=cc.f" target="_blank">  Cocoa - ICE (CC.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=kc.f" target="_blank">  Coffee - ICE (KC.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=oj.f" target="_blank"> Orange Juice - ICE (OJ.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=rm.f" target="_blank"> Robusta Coffee 10-T - ICE (RM.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=sb.f" target="_blank"> Sugar #11 - ICE (SB.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=sw.f" target="_blank">  White Sugar #5 - ICE (SW.F)</a></li>
                      </ul>
                    <li>Fibers</li>
                      <ul class="data" style="margin-left: 0px";>
                        <li>Stooq: <a href="https://stooq.com/q/?s=ct.f" target="_blank"> Cotton #2 - ICE (CT.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=ls.f" target="_blank"> Lumber - CME (LS.F)</a></li>
                      </ul>
                    <li>Meat</li>
                      <ul class="data" style="margin-left: 0px";>
                        <li>Stooq: <a href="https://stooq.com/q/?s=dl.f" target="_blank"> Class III Milk - CME (DL.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=gf.f" target="_blank"> Feeder Cattle - CME (GF.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=he.f" target="_blank"> Lean Hogs - CME (HE.F)</a></li>
                        <li>Stooq: <a href="https://stooq.com/q/?s=le.f" target="_blank"> Live Cattle - CME (LE.F)</a></li>
                      </ul>
                    </ul> -->
            <h3>Further Information</h3>
            <ul>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/c/commodityfuturescontract.asp" target="_blank">What
                        Is a Commodity Futures Contract?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/c/commoditiesexchange.asp" target="_blank">What Is a
                        Commodities Exchange?</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/terms/p/physicaldelivery.asp"
                                     target="_blank">Understanding Physical Delivery</a></li>
                <li>Investopedia: <a href="https://www.investopedia.com/ask/answers/073015/how-do-futures-contracts-roll-over.asp"
                                     target="_blank">How do futures contracts roll over?</a></li>
                <li>CME Group: <a
                        href="https://www.cmegroup.com/education/courses/introduction-to-futures/understanding-futures-expiration-contract-roll.html"
                        target="_blank">Understanding Futures Expiration & Contract Roll</a></li>
                <li>Longermtrends: <a href="/stocks-commodities-ratio/" target="_blank">Stocks to Commodities Ratio</a></li>
            </ul>
        </div>
        <div class="col-md-4 side-content">
            <a href="https://www.tradingview.com/?offer_id=10&aff_id=27777&file_id=855" target="_blank"
               id="tradingview_banner_link"><img
                    src="https://media.go2speed.org/brand/files/tradingview/10/20210720053108-Join_15M_En_336x280.png" width="336"
                    height="280" border="0" alt="img" /></a><img
                src="https://tradingview.go2cloud.org/aff_i?offer_id=10&file_id=855&aff_id=27777" width="0" height="0"
                style="position:absolute;visibility:hidden;" border="0" alt="img" />
        </div>
    </div>
    <!-- /.container -->



    <div class="group-buttons">
        <br>

        <form action="/checkout/" class="checkout_form" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="yxEssdbNF5QGjT5cZ5c7D5gQl7dMfQH1wVn8YZZh07Hvm8qzi5CD3ELpmqErRMf0">
            <input type="hidden" id="chart_group_name" type="text" name="chart_group_name" value="commodity-futures-prices">
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
