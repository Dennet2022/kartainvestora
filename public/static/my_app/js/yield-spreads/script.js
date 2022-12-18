$(function () {

    var seriesOptions = [],
        seriesCounter = 0,
        urls = ['/data-us10y/', '/data-corporate-aaa-yield/', '/data-corporate-baa-yield/', '/data-mortgage-yield/'];
    names = ['US 10y Treasury Yield', 'Aaa Corporate Bond Yield', 'Baa Corporate Bond Yield', '30-Year Fixed Rate Mortgage'];
    colors = ['orange', 'red', 'blue', 'black'];

    var chart1;
    var chart2;
    var chart3;
    var chart4;

    var data1;
    var data2;
    var data3;
    var data4;
    var JSONCounter;

    $.getJSON('/data-corporate-baa-US10y-yield-spread/', function (data) { // Variable heisst data


        data1 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart1');
            data = undefined;
        });

    $.getJSON('/data-corporate-baa-aaa-yield-spread/', function (data) { // Variable heisst data



        data2 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart2');
            data2 = undefined;
        });

    $.getJSON('/data-corporate-aaa-US10y-yield-spread/', function (data) { // Variable heisst data



        data3 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart3');
            data3 = undefined;
        });

    $.getJSON('/data-mortgage-yield-US10Y-yield-spread/', function (data) { // Variable heisst data



        data4 = hcFormat(data);
    })
        .fail(function () {
            handleError('chart4');
            data4 = undefined;
        });



    $(document).ajaxStop(function () {

        $(document).ready(function () {
            if (data1 !== undefined) {
                chart1 = new Highcharts.StockChart({
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
                                var ex2 = chart2.xAxis[0].getExtremes();
                                var ex3 = chart3.xAxis[0].getExtremes();
                                var ex4 = chart4.xAxis[0].getExtremes();
                                // var ex5 = chart5.xAxis[0].getExtremes();
                                // var ex6 = chart6.xAxis[0].getExtremes();


                                if (ex2.min != xMin || ex2.max != xMax) chart2.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex3.min != xMin || ex3.max != xMax) chart3.xAxis[0].setExtremes(xMin, xMax, true, false);
                                if (ex4.min != xMin || ex4.max != xMax) chart4.xAxis[0].setExtremes(xMin, xMax, true, false);
                                // if (ex5.min != xMin || ex5.max != xMax) chart5.xAxis[0].setExtremes(xMin, xMax, true, false);
                                // if (ex6.min != xMin || ex6.max != xMax) chart6.xAxis[0].setExtremes(xMin, xMax, true, false);
                            }
                        }
                    },
                    navigator: { height: 20 },
                    title: {
                        text: 'Yield Spread between Baa Corporate and US Treasury Bonds',
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
                        // max: 8,
                        title: {
                            text: 'Baa - US10y'
                        },
                    },

                    series:
                        [
                            {
                                name: 'Yield Spread between Baa Corporate and Treasury Bonds',
                                data: data1,
                                id: 'data-corporate-baa-US10y-yield-spread',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(1932, 5),
                                        title: '1932'
                                    },
                                    {
                                        x: Date.UTC(1971, 3),
                                        title: '1971'
                                    },
                                    {
                                        x: Date.UTC(1975, 0),
                                        title: '1975'
                                    },
                                    {
                                        x: Date.UTC(1982, 10),
                                        title: '1982'
                                    },
                                    {
                                        x: Date.UTC(2002, 9, 10),
                                        title: '2002'
                                    },
                                    {
                                        x: Date.UTC(2008, 11, 4),
                                        title: '2008'
                                    },
                                    {
                                        x: Date.UTC(2020, 2, 23),
                                        title: '2020'
                                    }
                                ],
                                onSeries: 'data-corporate-baa-US10y-yield-spread',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data2 !== undefined) {
                chart2 = new Highcharts.StockChart({
                    chart: {
                        renderTo: 'chart3',
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
                        text: 'Yield Spread between Baa and Aaa Corporate Bonds',
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
                            text: 'Baa - Aaa'
                        },
                    },
                    series:
                        [
                            {
                                name: 'Yield Spread between Baa and Aaa Corporate Bonds',
                                data: data2,
                                id: 'data-corporate-baa-aaa-yield-spread',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(1932, 5),
                                        title: '1932'
                                    },
                                    {
                                        x: Date.UTC(1938, 3),
                                        title: '1938'
                                    },
                                    {
                                        x: Date.UTC(1957, 11),
                                        title: '1957'
                                    },
                                    {
                                        x: Date.UTC(1970, 11),
                                        title: '1970'
                                    },
                                    {
                                        x: Date.UTC(1975, 1),
                                        title: '1975'
                                    },
                                    {
                                        x: Date.UTC(1982, 8),
                                        title: '1982'
                                    },
                                    {
                                        x: Date.UTC(1991, 0),
                                        title: '1991'
                                    },
                                    {
                                        x: Date.UTC(2002, 9, 31),
                                        title: '2002'
                                    },
                                    {
                                        x: Date.UTC(2009, 3, 13),
                                        title: '2009'
                                    },

                                    {
                                        x: Date.UTC(2020, 2, 31),
                                        title: '2020'
                                    }
                                ],
                                onSeries: 'data-corporate-baa-aaa-yield-spread',
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
                    title: {
                        text: 'Yield Spread between Aaa Corporate and US Treasury Bonds',
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
                        inputEnabled: false,
                        selected: 1
                    },

                    credits: {
                        text: 'Longtermtrends.net',
                        href: 'http://www.longtermtrends.net'
                    },


                    yAxis: {
                        labels: { format: '{value} %' },
                        title: {
                            text: 'Aaa - US10y'
                        }
                    },
                    series:
                        [
                            {
                                name: 'Yield Spread between Aaa Corporate and Treasury Bonds',
                                data: data3,
                                id: 'data-corporate-aaa-US10y-yield-spread',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(1932, 5),
                                        title: '1932'
                                    },
                                    {
                                        x: Date.UTC(2002, 9, 10),
                                        title: '2002'
                                    },
                                    {
                                        x: Date.UTC(2009, 2, 9),
                                        title: '2009'
                                    },
                                    {
                                        x: Date.UTC(2020, 2, 20),
                                        title: '2020'
                                    }
                                ],
                                onSeries: 'data-corporate-aaa-US10y-yield-spread',
                                shape: 'squarepin',
                                includeInDataExport: false
                            }
                        ]
                });
            }
            if (data4 !== undefined) {
                chart4 = new Highcharts.StockChart({
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
                        text: 'Yield Spread between Mortgages and US Treasury Bonds',
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
                            text: 'Mortgage Rate - US10y'
                        },
                    },
                    series:
                        [
                            {
                                name: 'Yield Spread between Mortgages and Treasury Bonds',
                                data: data4,
                                id: 'data-mortgage-yield-US10Y-yield-spread',
                                tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
                                dataGrouping: { enabled: true },
                            },
                            {
                                type: 'flags',
                                name: 'Flags on series',
                                data: [
                                    {
                                        x: Date.UTC(1958, 3),
                                        title: '1958'
                                    },
                                    {
                                        x: Date.UTC(1970, 11),
                                        title: '1970'
                                    },
                                    {
                                        x: Date.UTC(1974, 11),
                                        title: '1974'
                                    },
                                    {
                                        x: Date.UTC(1982, 9),
                                        title: '1982'
                                    },
                                    {
                                        x: Date.UTC(1986, 6),
                                        title: '1986'
                                    },
                                    {
                                        x: Date.UTC(2008, 11, 18),
                                        title: '2008'
                                    },

                                    {
                                        x: Date.UTC(2020, 3),
                                        title: '2020'
                                    }
                                ],
                                onSeries: 'data-mortgage-yield-US10Y-yield-spread',
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
                text: 'Yields Overview',
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
                selected: 1
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
