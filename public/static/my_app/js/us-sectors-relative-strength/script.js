$(function () {

    var seriesOptions = [],
        seriesCounter = 0,
        urls =
            ['/data-spdr-sp-500-etf-trust/',
                '/data-us-telecommunications/',
                '/data-us-basic-materials/',
                '/data-us-energy/',
                '/data-us-financial/',
                '/data-us-industrial/',
                '/data-us-technology/',
                '/data-us-consumer-staples/',
                '/data-us-utiliiies/',
                '/data-us-thcare/',
                '/data-us-consumer-discretionary/',
            ];
    names =
        ['SPDR S&P 500 ETF Trust',
            'U.S. Communication Services',
            'U.S. Basic Materials',
            'U.S. Energy',
            'U.S. Financials',
            'U.S. Industrials',
            'U.S. Information Technology',
            'U.S. Consumer Staples',
            'U.S. Utilities',
            'U.S. Healthcare',
            'U.S. Consumer Discretionary',
        ];

    var chart1;
    var chart2;
    var chart3;
    var chart4;
    var chart5;
    var chart6;
    var chart7;
    var chart8;
    var chart9;
    var chart10;


    var data1;
    var data2;
    var data3;
    var data4;
    var data5;
    var data6;
    var data7;
    var data8;
    var data9;
    var data10;
    var JSONCounter;

    $.getJSON('/data-us-technology-to-spy-ratio/', function (data) { // Variable heisst data

        data1 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart9');
            data1 = undefined;
        });


    $.getJSON('/data-us-energy-to-spy-ratio/', function (data) { // Variable heisst data

        data2 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart1');
            data2 = undefined;
        });

    $.getJSON('/data-us-financial-to-spy-ratio/', function (data) { // Variable heisst data

        data3 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart6');
            data3 = undefined;
        });

    $.getJSON('/data-us-consumer-staples-to-spy-ratio/', function (data) { // Variable heisst data

        data4 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart8');
            data4 = undefined;
        });


    $.getJSON('/data-us-telecommunications-to-spy-ratio/', function (data) { // Variable heisst data

        data5 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart10');
            data5 = undefined;
        });


    $.getJSON('/data-us-basic-materials-to-spy-ratio/', function (data) { // Variable heisst data

        data6 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart2');
            data6 = undefined;
        });

    $.getJSON('/data-us-industrial-to-spy-ratio/', function (data) { // Variable heisst data

        data7 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart3');
            data7 = undefined;
        });

    $.getJSON('/data-us-utilities-to-spy-ratio/', function (data) { // Variable heisst data

        data8 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart4');
            data8 = undefined;
        });

    $.getJSON('/data-us-thcare-to-spy-ratio/', function (data) { // Variable heisst data

        data9 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart5');
            data9 = undefined;
        });

    $.getJSON('/data-us-consumer-discretionary-to-spy-ratio/', function (data) { // Variable heisst data

        data10 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart7');
            data10 = undefined;
        });



    $(document).ajaxStop(function () {

        $(document).ready(function () {
            if (data1 !== undefined) {
                chart1 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart9',
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
                                var ex7 = chart7.xAxis[0].getExtremes();
                                var ex8 = chart8.xAxis[0].getExtremes();
                                var ex9 = chart9.xAxis[0].getExtremes();
                                var ex10 = chart10.xAxis[0].getExtremes();


                                if (ex2.min != xMin || ex2.max != xMax) chart2.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex3.min != xMin || ex3.max != xMax) chart3.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex4.min != xMin || ex4.max != xMax) chart4.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex5.min != xMin || ex5.max != xMax) chart5.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex6.min != xMin || ex6.max != xMax) chart6.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex7.min != xMin || ex7.max != xMax) chart7.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex8.min != xMin || ex8.max != xMax) chart8.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex9.min != xMin || ex9.max != xMax) chart9.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex10.min != xMin || ex10.max != xMax) chart10.xAxis[0].setExtremes(xMin, xMax, true, false);

                            }
                        }
                    },
                    navigator: { height: 20 },
                    title: {
                        text: 'U.S. Technology / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },


                    yAxis: {
                        title: {
                            text: 'XLK / SPY'
                        },
                    },

                    series:
                        [
                            {
                                name: 'U.S. Technology / S&P 500 Ratio',
                                data: data1,
                                id: 'data-us-technology-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },

                        ]
                });
            }
            if (data2 !== undefined) {
                chart2 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart1',
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
                    title: {
                        text: 'U.S. Energy / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLE / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Energy / S&P 500 Ratio',
                                data: data2,
                                id: 'data-us-energy-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(2008, 6, 1),
                                        title: '2008'
                                    }
                                ],
                                onSeries: 'data-us-energy-to-spy-ratio',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data3 !== undefined) {
                chart3 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart6',
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
                    title: {
                        text: 'U.S. Financials / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },


                    yAxis: {
                        title: {
                            text: 'XLF / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Financials / S&P 500 Ratio',
                                data: data3,
                                id: 'data-us-financial-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(2009, 2, 6),
                                        title: '2009'
                                    }
                                ],
                                onSeries: 'data-us-financial-to-spy-ratio',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data4 !== undefined) {
                chart4 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart8',
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
                    title: {
                        text: 'U.S. Consumer Staples / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLP / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Consumer Staples / S&P 500 Ratio',
                                data: data4,
                                id: 'data-us-consumer-staples-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(2008, 10, 21),
                                        title: '2008'
                                    },
                                    {
                                        x: Date.UTC(2016, 1, 11),
                                        title: '2016'
                                    },
                                    {
                                        x: Date.UTC(2020, 2, 17),
                                        title: '2020'
                                    }
                                ],
                                onSeries: 'data-us-consumer-staples-to-spy-ratio',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data5 !== undefined) {
                chart5 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart10',
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
                    title: {
                        text: 'U.S. Communication Services / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLC / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Communication Services / S&P 500 Ratio',
                                data: data5,
                                id: 'data-us-telecommunications-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            }
                        ]
                });
            }
            if (data6 !== undefined) {
                chart6 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart2',
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
                    title: {
                        text: 'U.S. Basic Materials / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLB / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Basic Materials / S&P 500 Ratio',
                                data: data6,
                                id: 'data-us-basic-materials-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(2008, 5, 23),
                                        title: '2008'
                                    }
                                ],
                                onSeries: 'data-us-basic-materials-to-spy-ratio',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data7 !== undefined) {
                chart7 = new Highcharts.StockChart({
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
                    title: {
                        text: 'U.S. Industrials / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLI / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Industrial / S&P 500 Ratio',
                                data: data7,
                                id: 'data-us-industrial-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(2009, 2, 6),
                                        title: '2009'
                                    },
                                    {
                                        x: Date.UTC(2020, 4, 13),
                                        title: '2020'
                                    }
                                ],
                                onSeries: 'data-us-industrial-to-spy-ratio',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data8 !== undefined) {
                chart8 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart4',
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
                    title: {
                        text: 'U.S. Utilities / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLU / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Utilities / S&P 500 Ratio',
                                data: data8,
                                id: 'data-us-utilities-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(2008, 10, 21),
                                        title: '2008'
                                    }
                                ],
                                onSeries: 'data-us-utilities-to-spy-ratio',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data9 !== undefined) {
                chart9 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart5',
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
                    title: {
                        text: 'U.S. Healthcare / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLV / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Healthcare / S&P 500 Ratio',
                                data: data9,
                                id: 'data-us-thcare-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(2009, 1, 23),
                                        title: '2009'
                                    },
                                    {
                                        x: Date.UTC(2015, 7, 5),
                                        title: '2015'
                                    },
                                    {
                                        x: Date.UTC(2020, 3, 21),
                                        title: '2020'
                                    }
                                ],
                                onSeries: 'data-us-thcare-to-spy-ratio',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data10 !== undefined) {
                chart10 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart7',
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
                    title: {
                        text: 'U.S. Consumer Discretionary / S&P 500 Ratio',
                    },
                    rangeSelector: {
                        buttons: [
                            {
                                type: 'ytd',
                                text: 'YTD'
                            },
                            {
                                type: 'year',
                                count: 1,
                                text: '1y'
                            }, {
                                type: 'year',
                                count: 3,
                                text: '3y'
                            }, {
                                type: 'year',
                                count: 5,
                                text: '5y'
                            }, {
                                type: 'year',
                                count: 8,
                                text: '8y'
                            }, {
                                type: 'year',
                                count: 13,
                                text: '13y'
                            }, {
                                type: 'all',
                                text: 'All'
                            }],
                        inputEnabled: false,
                        selected: 2
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
                        title: {
                            text: 'XLY / SPY'
                        },
                    },
                    series:
                        [
                            {
                                name: 'U.S. Consumer Discretionary / S&P 500 Ratio',
                                data: data10,
                                id: 'data-us-consumer-discretionary-to-spy-ratio',
                                tooltip: { valueDecimals: 2 },
                                dataGrouping: { enabled: true },
                            },
                        ]
                });
            }
        });
    });


    function createChart2() {

        $('#chart').highcharts('StockChart', {

            title: {
                text: 'U.S. Sectors',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'ytd',
                        text: 'YTD'
                    },
                    {
                        type: 'year',
                        count: 1,
                        text: '1y'
                    }, {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                inputEnabled: true,
                selected: 6
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            yAxis: {
                labels: {
                    formatter: function () {
                        return (this.value > 0 ? ' + ' : '') + this.value + '%';
                    }
                },
            },

            plotOptions: {
                series: {
                    compare: 'percent',
                    showInNavigator: true
                }
            },

            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
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
                // color: colors[k],
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
