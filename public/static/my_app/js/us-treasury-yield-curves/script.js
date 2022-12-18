$(function () {

    var seriesOptions = [],
        seriesCounter = 0,
        urls = ['/data-us03m/', '/data-us01y/', '/data-us02y/', '/data-us03y/', '/data-us05y/', '/data-us10y/', '/data-us20y/', '/data-us30y/'];
    names = ['US03M Yield', 'US01Y Yield', 'US02Y Yield', 'US03Y Yield', 'US05Y Yield', 'US10Y Yield', 'US20Y Yield', 'US30Y Yield'];
    colors = ['grey', 'orange', 'DarkOrange', 'red', 'green', 'blue', 'brown', 'black'];

    var chart1;
    var chart2;
    var chart3;
    var chart4;
    var chart5;
    var chart6;

    var data1;
    var data2;
    var data3;
    var data4;
    var data5;
    var data6;
    var JSONCounter;

    $.getJSON('/data-us30y-minus-us10y/', function (data) { // Variable heisst data



        data1 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart1');
            data = undefined;
        });

    $.getJSON('/data-us30y-minus-us05y/', function (data) { // Variable heisst data



        data2 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart2');
            data2 = undefined;
        });

    $.getJSON('/data-us10y-minus-us02y/', function (data) { // Variable heisst data



        data3 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart3');
            data3 = undefined;
        });

    $.getJSON('/data-us10y-minus-us01y/', function (data) { // Variable heisst data



        data4 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart4');
            data4 = undefined;
        });

    $.getJSON('/data-us02y-minus-us01y/', function (data) { // Variable heisst data



        data5 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart5');
            data5 = undefined;
        });

    $.getJSON('/data-us10y-minus-us03m/', function (data) { // Variable heisst data


        data6 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart6');
            data6 = undefined;
        });





    $(document).ajaxStop(function () {

        $(document).ready(function () {
            if (data1 !== undefined) {
                chart1 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart4',
                        defaultSeriesType: 'line',
                        zoomType: 'x'
                    },
                    xAxis: {
                        type: 'datetime',
                        ordinal: false,
                        events: {
                            afterSetExtremes: function (event) {
                                var xMin = event.min;
                                var xMax = event.max;
                                var ex2 = chart2.xAxis[0].getExtremes();
                                var ex3 = chart3.xAxis[0].getExtremes();
                                var ex4 = chart4.xAxis[0].getExtremes();
                                var ex5 = chart5.xAxis[0].getExtremes();
                                var ex6 = chart6.xAxis[0].getExtremes();


                                if (ex2.min != xMin || ex2.max != xMax) chart2.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex3.min != xMin || ex3.max != xMax) chart3.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex4.min != xMin || ex4.max != xMax) chart4.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex5.min != xMin || ex5.max != xMax) chart5.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex6.min != xMin || ex6.max != xMax) chart6.xAxis[0].setExtremes(xMin, xMax, true, false);
                            }
                        }
                    },
                    navigator: { height: 20 },
                    rangeSelector: {
                        buttons: [{
                            type: 'year',
                            count: 30,
                            text: '30y'
                        }, {
                            type: 'year',
                            count: 50,
                            text: '50y'
                        }, {
                            type: 'year',
                            count: 70,
                            text: '70y'
                        }, {
                            type: 'year',
                            count: 90,
                            text: '90y'
                        }, {
                            type: 'all',
                            text: 'All'
                        }],
                        inputEnabled: false,
                        selected: 1
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },

                    // plotOptions: {
                    //     series: {
                    //         compare: 'percent',
                    //         showInNavigator: true
                    //     }
                    // },


                    yAxis: {

                        labels: { format: '{value} %' },
                        title: {
                            text: '30y minus 10y Yield'
                        },
                        min: -0.5,
                        max: 1.5,
                        plotBands:
                            [
                                {
                                    from: -3,
                                    to: 0,
                                    color: 'rgba(255, 0, 0, 0.1)',
                                    label: { text: 'inverted yield curve' }
                                }
                            ],
                    },

                    series:
                        [
                            {
                                name: 'Spread between 30-year Yield and 10-year Yield',
                                data: data1,
                                id: 'data-us30y-minus-us10y',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    { x: Date.UTC(1948, 10, 1), title: '1948', text: 'Recession of 1949' },
                                    { x: Date.UTC(1953, 6, 1), title: '1953', text: 'Recession of 1953' },
                                    { x: Date.UTC(1958, 7, 1), title: '1958', text: 'Recession of 1958' },
                                    { x: Date.UTC(1960, 3, 1), title: '1960', text: 'Recession of 1960–61' },
                                    { x: Date.UTC(1969, 11, 1), title: '1969', text: 'Recession of 1969–70' },
                                    { x: Date.UTC(1973, 10, 1), title: '1973', text: 'Recession of 1973–75' },
                                    { x: Date.UTC(1980, 0, 1), title: '1980', text: 'Recession of 1980' },
                                    { x: Date.UTC(1981, 6, 1), title: '1981', text: 'Recession of 1981-82' },
                                    { x: Date.UTC(1990, 6, 1), title: '1990', text: 'Early 1990s recession in the United States' },
                                    { x: Date.UTC(2001, 2, 1), title: '2001', text: 'Early 2000 recession' },
                                    { x: Date.UTC(2007, 11, 1), title: '2007', text: 'Great Recession' },
                                    { x: Date.UTC(2020, 1, 1), title: '2020', text: 'COVID-19 Recession' },
                                ],
                                onSeries: 'data-us30y-minus-us10y',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data2 !== undefined) {
                chart2 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart5',
                        defaultSeriesType: 'line',
                        zoomType: 'x'
                    },
                    xAxis: {
                        type: 'datetime',
                        ordinal: false,
                        events: {
                            afterSetExtremes: function (event) {
                                var xMin = event.min;
                                var xMax = event.max;

                                var ex = chart1.xAxis[0].getExtremes();

                                if (ex.min != xMin || ex.max != xMax) chart1.xAxis[0].setExtremes(xMin, xMax, true, false);
                            }
                        }
                    },
                    navigator: { height: 20 },
                    rangeSelector: {
                        buttons: [{
                            type: 'year',
                            count: 30,
                            text: '30y'
                        }, {
                            type: 'year',
                            count: 50,
                            text: '50y'
                        }, {
                            type: 'year',
                            count: 70,
                            text: '70y'
                        }, {
                            type: 'year',
                            count: 90,
                            text: '90y'
                        }, {
                            type: 'all',
                            text: 'All'
                        }],
                        inputEnabled: false,
                        selected: 1
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },
                    // plotOptions: {
                    //     series: {
                    //         compare: 'percent',
                    //         showInNavigator: true
                    //     }
                    // },


                    yAxis: {
                        labels: { format: '{value} %' },
                        title: {
                            text: '30y minus 5y Yield'
                        },
                        min: -1,
                        max: 2.1,
                        plotBands:
                            [
                                {
                                    from: -3,
                                    to: 0,
                                    color: 'rgba(255, 0, 0, 0.1)',
                                    label: { text: 'inverted yield curve' }
                                }
                            ],
                    },
                    series:
                        [
                            {
                                name: 'Spread between 30-year Yield and 5-year Yield',
                                data: data2,
                                id: 'data-us30y-minus-us05y',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    { x: Date.UTC(1948, 10, 1), title: '1948', text: 'Recession of 1949' },
                                    { x: Date.UTC(1953, 6, 1), title: '1953', text: 'Recession of 1953' },
                                    { x: Date.UTC(1958, 7, 1), title: '1958', text: 'Recession of 1958' },
                                    { x: Date.UTC(1960, 3, 1), title: '1960', text: 'Recession of 1960–61' },
                                    { x: Date.UTC(1969, 11, 1), title: '1969', text: 'Recession of 1969–70' },
                                    { x: Date.UTC(1973, 10, 1), title: '1973', text: 'Recession of 1973–75' },
                                    { x: Date.UTC(1980, 0, 1), title: '1980', text: 'Recession of 1980' },
                                    { x: Date.UTC(1981, 6, 1), title: '1981', text: 'Recession of 1981-82' },
                                    { x: Date.UTC(1990, 6, 1), title: '1990', text: 'Early 1990s recession in the United States' },
                                    { x: Date.UTC(2001, 2, 1), title: '2001', text: 'Early 2000 recession' },
                                    { x: Date.UTC(2007, 11, 1), title: '2007', text: 'Great Recession' },
                                    { x: Date.UTC(2020, 1, 1), title: '2020', text: 'COVID-19 Recession' },
                                ],
                                onSeries: 'data-us30y-minus-us05y',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data3 !== undefined) {
                chart3 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart2',
                        defaultSeriesType: 'line',
                        zoomType: 'x'
                    },
                    xAxis: {
                        type: 'datetime',
                        ordinal: false,

                        events: {
                            afterSetExtremes: function (event) {
                                var xMin = event.min;
                                var xMax = event.max;

                                var ex = chart1.xAxis[0].getExtremes();

                                if (ex.min != xMin || ex.max != xMax) chart1.xAxis[0].setExtremes(xMin, xMax, true, false);
                            }
                        }
                    },
                    navigator: { height: 20 },
                    rangeSelector: {
                        buttons: [{
                            type: 'year',
                            count: 30,
                            text: '30y'
                        }, {
                            type: 'year',
                            count: 50,
                            text: '50y'
                        }, {
                            type: 'year',
                            count: 70,
                            text: '70y'
                        }, {
                            type: 'year',
                            count: 90,
                            text: '90y'
                        }, {
                            type: 'all',
                            text: 'All'
                        }],
                        inputEnabled: false,
                        selected: 1
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },

                    // plotOptions: {
                    //     series: {
                    //         compare: 'percent',
                    //         showInNavigator: true
                    //     }
                    // },


                    yAxis: {
                        labels: { format: '{value} %' },
                        title: {
                            text: '10y minus 2y Yield'
                        },
                        min: -0.5,
                        max: 2.2,
                        plotBands:
                            [
                                {
                                    from: -3,
                                    to: 0,
                                    color: 'rgba(255, 0, 0, 0.1)',
                                    label: { text: 'inverted yield curve' }
                                }
                            ],
                    },
                    series:
                        [
                            {
                                name: 'Spread between 10-year Yield and 2-year Yield',
                                data: data3,
                                id: 'data-us10y-minus-us02y',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    { x: Date.UTC(1929, 7, 1), title: '1929', text: 'The Great Depression' },
                                    { x: Date.UTC(1937, 4, 1), title: '1937', text: 'Recession of 1937–38' },
                                    { x: Date.UTC(1945, 1, 1), title: '1945', text: 'Recession of 1945' },
                                    { x: Date.UTC(1948, 10, 1), title: '1948', text: 'Recession of 1949' },
                                    { x: Date.UTC(1953, 6, 1), title: '1953', text: 'Recession of 1953' },
                                    { x: Date.UTC(1958, 7, 1), title: '1958', text: 'Recession of 1958' },
                                    { x: Date.UTC(1960, 3, 1), title: '1960', text: 'Recession of 1960–61' },
                                    { x: Date.UTC(1969, 11, 1), title: '1969', text: 'Recession of 1969–70' },
                                    { x: Date.UTC(1973, 10, 1), title: '1973', text: 'Recession of 1973–75' },
                                    { x: Date.UTC(1980, 0, 1), title: '1980', text: 'Recession of 1980' },
                                    { x: Date.UTC(1981, 6, 1), title: '1981', text: 'Recession of 1981-82' },
                                    { x: Date.UTC(1990, 6, 1), title: '1990', text: 'Early 1990s recession in the United States' },
                                    { x: Date.UTC(2001, 2, 1), title: '2001', text: 'Early 2000 recession' },
                                    { x: Date.UTC(2007, 11, 1), title: '2007', text: 'Great Recession' },
                                    { x: Date.UTC(2020, 1, 1), title: '2020', text: 'COVID-19 Recession' },
                                ],
                                onSeries: 'data-us10y-minus-us02y',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data4 !== undefined) {
                chart4 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart1',
                        defaultSeriesType: 'line',
                        zoomType: 'x'
                    },
                    xAxis: {
                        type: 'datetime',
                        ordinal: false,
                        // plotBands:
                        // [{
                        //       from: Date.UTC(1970,0,1),
                        //       to: Date.UTC(1982,0,1),
                        //       color: 'rgba(255, 215, 0, 0.2)',
                        //       label: {text: 'The Great Inflation'}
                        // }],

                        events: {
                            afterSetExtremes: function (event) {
                                var xMin = event.min;
                                var xMax = event.max;

                                var ex = chart1.xAxis[0].getExtremes();

                                if (ex.min != xMin || ex.max != xMax) chart1.xAxis[0].setExtremes(xMin, xMax, true, false);
                            }
                        }
                    },
                    navigator: { height: 20 },
                    rangeSelector: {
                        buttons: [{
                            type: 'year',
                            count: 30,
                            text: '30y'
                        }, {
                            type: 'year',
                            count: 50,
                            text: '50y'
                        }, {
                            type: 'year',
                            count: 70,
                            text: '70y'
                        }, {
                            type: 'year',
                            count: 90,
                            text: '90y'
                        }, {
                            type: 'all',
                            text: 'All'
                        }],
                        inputEnabled: false,
                        selected: 1
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },
                    // plotOptions: {
                    //     series: {
                    //         compare: 'percent',
                    //         showInNavigator: true
                    //     }
                    // },


                    yAxis: {
                        labels: { format: '{value} %' },
                        title: {
                            text: '10y minus 1y Yield'
                        },
                        min: -2.6,
                        max: 2.6,
                        plotBands:
                            [
                                {
                                    from: -4,
                                    to: 0,
                                    color: 'rgba(255, 0, 0, 0.1)',
                                    label: { text: 'inverted yield curve' }
                                }
                            ],
                    },
                    series:
                        [
                            {
                                name: 'Spread between 10-year Yield and 1-year Yield',
                                data: data4,
                                id: 'data-us10y-minus-us01y',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    { x: Date.UTC(1873, 9, 1), title: '1873', text: 'Panic of 1873 and the Long Depression' },
                                    { x: Date.UTC(1882, 2, 1), title: '1882', text: '1882–85 recession' },
                                    { x: Date.UTC(1887, 2, 1), title: '1887', text: '1887–88 recession' },
                                    { x: Date.UTC(1890, 6, 1), title: '1890', text: '1890–91 recession' },
                                    { x: Date.UTC(1893, 0, 1), title: '1893', text: 'Panic of 1893' },
                                    { x: Date.UTC(1895, 11, 1), title: '1895', text: 'Panic of 1896' },
                                    { x: Date.UTC(1899, 5, 1), title: '1899', text: '1899–1900 recession' },
                                    { x: Date.UTC(1902, 8, 1), title: '1902', text: '1902–04 recession' },
                                    { x: Date.UTC(1907, 4, 1), title: '1907', text: 'Panic of 1907' },
                                    { x: Date.UTC(1910, 0, 1), title: '1910', text: 'Panic of 1910–1911' },
                                    { x: Date.UTC(1913, 0, 1), title: '1913', text: 'Recession of 1913–1914' },
                                    { x: Date.UTC(1918, 7, 1), title: '1918', text: 'Post-World War I recession' },
                                    { x: Date.UTC(1920, 0, 1), title: '1920', text: 'Depression of 1920-21' },
                                    { x: Date.UTC(1923, 4, 1), title: '1923', text: '1923–24 recession' },
                                    { x: Date.UTC(1926, 9, 1), title: '1926', text: '1926–27 recession' },
                                    { x: Date.UTC(1929, 7, 1), title: '1929', text: 'The Great Depression' },
                                    { x: Date.UTC(1937, 4, 1), title: '1937', text: 'Recession of 1937–38' },
                                    { x: Date.UTC(1945, 1, 1), title: '1945', text: 'Recession of 1945' },
                                    { x: Date.UTC(1948, 10, 1), title: '1948', text: 'Recession of 1949' },
                                    { x: Date.UTC(1953, 6, 1), title: '1953', text: 'Recession of 1953' },
                                    { x: Date.UTC(1958, 7, 1), title: '1958', text: 'Recession of 1958' },
                                    { x: Date.UTC(1960, 3, 1), title: '1960', text: 'Recession of 1960–61' },
                                    { x: Date.UTC(1969, 11, 1), title: '1969', text: 'Recession of 1969–70' },
                                    { x: Date.UTC(1973, 10, 1), title: '1973', text: 'Recession of 1973–75' },
                                    { x: Date.UTC(1980, 0, 1), title: '1980', text: 'Recession of 1980' },
                                    { x: Date.UTC(1981, 6, 1), title: '1981', text: 'Recession of 1981-82' },
                                    { x: Date.UTC(1990, 6, 1), title: '1990', text: 'Early 1990s recession in the United States' },
                                    { x: Date.UTC(2001, 2, 1), title: '2001', text: 'Early 2000 recession' },
                                    { x: Date.UTC(2007, 11, 1), title: '2007', text: 'Great Recession' },
                                    { x: Date.UTC(2020, 1, 1), title: '2020', text: 'COVID-19 Recession' },
                                ],
                                onSeries: 'data-us10y-minus-us01y',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data5 !== undefined) {
                chart5 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart3',
                        defaultSeriesType: 'line',
                        zoomType: 'x'
                    },
                    xAxis: {
                        type: 'datetime',
                        ordinal: false,
                        // plotBands:
                        // [{
                        //       from: Date.UTC(1970,0,1),
                        //       to: Date.UTC(1982,0,1),
                        //       color: 'rgba(255, 215, 0, 0.2)',
                        //       label: {text: 'The Great Inflation'}
                        // }],

                        events: {
                            afterSetExtremes: function (event) {
                                var xMin = event.min;
                                var xMax = event.max;

                                var ex = chart1.xAxis[0].getExtremes();

                                if (ex.min != xMin || ex.max != xMax) chart1.xAxis[0].setExtremes(xMin, xMax, true, false);
                            }
                        }
                    },
                    navigator: { height: 20 },
                    rangeSelector: {
                        buttons: [{
                            type: 'year',
                            count: 30,
                            text: '30y'
                        }, {
                            type: 'year',
                            count: 50,
                            text: '50y'
                        }, {
                            type: 'year',
                            count: 70,
                            text: '70y'
                        }, {
                            type: 'year',
                            count: 90,
                            text: '90y'
                        }, {
                            type: 'all',
                            text: 'All'
                        }],
                        inputEnabled: false,
                        selected: 1
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },
                    // plotOptions: {
                    //     series: {
                    //         compare: 'percent',
                    //         showInNavigator: true
                    //     }
                    // },


                    yAxis: {
                        labels: { format: '{value} %' },
                        title: {
                            text: '2y minus 1y Yield'
                        },
                        min: -1,
                        max: 1,
                        plotBands:
                            [
                                {
                                    from: -3,
                                    to: 0,
                                    color: 'rgba(255, 0, 0, 0.1)',
                                    label: { text: 'inverted yield curve' }
                                }
                            ],
                    },
                    series:
                        [
                            {
                                name: 'Spread between 2-year Yield and 1-year Yield',
                                data: data5,
                                id: 'data-us02y-minus-us01y',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    { x: Date.UTC(1929, 7, 1), title: '1929', text: 'The Great Depression' },
                                    { x: Date.UTC(1937, 4, 1), title: '1937', text: 'Recession of 1937–38' },
                                    { x: Date.UTC(1945, 1, 1), title: '1945', text: 'Recession of 1945' },
                                    { x: Date.UTC(1948, 10, 1), title: '1948', text: 'Recession of 1949' },
                                    { x: Date.UTC(1953, 6, 1), title: '1953', text: 'Recession of 1953' },
                                    { x: Date.UTC(1958, 7, 1), title: '1958', text: 'Recession of 1958' },
                                    { x: Date.UTC(1960, 3, 1), title: '1960', text: 'Recession of 1960–61' },
                                    { x: Date.UTC(1969, 11, 1), title: '1969', text: 'Recession of 1969–70' },
                                    { x: Date.UTC(1973, 10, 1), title: '1973', text: 'Recession of 1973–75' },
                                    { x: Date.UTC(1980, 0, 1), title: '1980', text: 'Recession of 1980' },
                                    { x: Date.UTC(1981, 6, 1), title: '1981', text: 'Recession of 1981-82' },
                                    { x: Date.UTC(1990, 6, 1), title: '1990', text: 'Early 1990s recession in the United States' },
                                    { x: Date.UTC(2001, 2, 1), title: '2001', text: 'Early 2000 recession' },
                                    { x: Date.UTC(2007, 11, 1), title: '2007', text: 'Great Recession' },
                                    { x: Date.UTC(2020, 1, 1), title: '2020', text: 'COVID-19 Recession' },
                                ],
                                onSeries: 'data-us02y-minus-us01y',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data6 !== undefined) {
                chart6 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart6',
                        defaultSeriesType: 'line',
                        zoomType: 'x'
                    },
                    xAxis: {
                        type: 'datetime',
                        ordinal: false,
                        // plotBands:
                        // [{
                        //       from: Date.UTC(1970,0,1),
                        //       to: Date.UTC(1982,0,1),
                        //       color: 'rgba(255, 215, 0, 0.2)',
                        //       label: {text: 'The Great Inflation'}
                        // }],

                        events: {
                            afterSetExtremes: function (event) {
                                var xMin = event.min;
                                var xMax = event.max;

                                var ex = chart1.xAxis[0].getExtremes();

                                if (ex.min != xMin || ex.max != xMax) chart1.xAxis[0].setExtremes(xMin, xMax, true, false);
                            }
                        }
                    },
                    navigator: { height: 20 },
                    rangeSelector: {
                        buttons: [{
                            type: 'year',
                            count: 30,
                            text: '30y'
                        }, {
                            type: 'year',
                            count: 50,
                            text: '50y'
                        }, {
                            type: 'year',
                            count: 70,
                            text: '70y'
                        }, {
                            type: 'year',
                            count: 90,
                            text: '90y'
                        }, {
                            type: 'all',
                            text: 'All'
                        }],
                        inputEnabled: false,
                        selected: 1
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },
                    // plotOptions: {
                    //     series: {
                    //         compare: 'percent',
                    //         showInNavigator: true
                    //     }
                    // },


                    yAxis: {
                        labels: { format: '{value} %' },
                        title: {
                            text: '10y minus 3M Yield'
                        },
                        min: -2.6,
                        max: 2.6,
                        plotBands:
                            [
                                {
                                    from: -4,
                                    to: 0,
                                    color: 'rgba(255, 0, 0, 0.1)',
                                    label: { text: 'inverted yield curve' }
                                }
                            ],
                    },
                    series:
                        [
                            {
                                name: 'Spread between 10-year Yield and 3-month Yield',
                                data: data6,
                                id: 'data-us10y-minus-us03m',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    { x: Date.UTC(1937, 4, 1), title: '1937', text: 'Recession of 1937–38' },
                                    { x: Date.UTC(1945, 1, 1), title: '1945', text: 'Recession of 1945' },
                                    { x: Date.UTC(1948, 10, 1), title: '1948', text: 'Recession of 1949' },
                                    { x: Date.UTC(1953, 6, 1), title: '1953', text: 'Recession of 1953' },
                                    { x: Date.UTC(1958, 7, 1), title: '1958', text: 'Recession of 1958' },
                                    { x: Date.UTC(1960, 3, 1), title: '1960', text: 'Recession of 1960–61' },
                                    { x: Date.UTC(1969, 11, 1), title: '1969', text: 'Recession of 1969–70' },
                                    { x: Date.UTC(1973, 10, 1), title: '1973', text: 'Recession of 1973–75' },
                                    { x: Date.UTC(1980, 0, 1), title: '1980', text: 'Recession of 1980' },
                                    { x: Date.UTC(1981, 6, 1), title: '1981', text: 'Recession of 1981-82' },
                                    { x: Date.UTC(1990, 6, 1), title: '1990', text: 'Early 1990s recession in the United States' },
                                    { x: Date.UTC(2001, 2, 1), title: '2001', text: 'Early 2000 recession' },
                                    { x: Date.UTC(2007, 11, 1), title: '2007', text: 'Great Recession' },
                                    { x: Date.UTC(2020, 1, 1), title: '2020', text: 'COVID-19 Recession' },
                                ],
                                onSeries: 'data-us10y-minus-us03m',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
        });
    });

    function createChart2() {

        $('#chart').highcharts('StockChart', {

            title: {
                text: 'Constant Maturity Treasury Rates',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'year',
                    count: 50,
                    text: '50y'
                }, {
                    type: 'year',
                    count: 70,
                    text: '70y'
                }, {
                    type: 'year',
                    count: 90,
                    text: '90y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 0
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            yAxis: {
                labels: { format: '{value} %' }
            },

            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}%</b><br/>',
                valueDecimals: 2,
                dataGrouping: { enabled: false },
                split: true
            },

            series: seriesOptions
        });
    }

    $.each(urls, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions[k] = {
                data: hcFormat(data),
                name: names[k],
                color: colors[k],
                id: urls[k]
            };

            seriesCounter += 1;

            if (seriesCounter === urls.length) {
                createChart2();
            }
        })
            .fail(function () {
                handleError('chart');
            });
    });
});
