$(function () {
    $.getJSON('/data-sp500-to-bonds-ratio/', function (data) {


        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'S&P 500 Index / Total Return Bond Index',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 10,
                    text: '10y'
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
                    count: 100,
                    text: '100y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 3
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            xAxis: {
                ordinal: false
            },

            yAxis: {
                title: { text: 'Stocks / Bonds' },
            },


            series:
                [
                    {
                        name: 'S&P 500 / Total Return Bond Index',
                        data: hcFormat(data),
                        id: 'data-sp500-to-bonds-ratio',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: false }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [{
                            x: Date.UTC(1929, 8),
                            title: '1929', text: 'Stock market crash of 1929'
                        },
                        {
                            x: Date.UTC(1987, 7),
                            title: '1987', text: 'Black Monday'
                        },
                        {
                            x: Date.UTC(2000, 5),
                            title: '2000', text: 'Dot-com Bubble'
                        },
                        {
                            x: Date.UTC(2007, 6),
                            title: '2007', text: 'Housing Bubble'
                        },
                        ],
                        onSeries: 'data-sp500-to-bonds-ratio',
                        shape: 'squarepin',
                        includeInDataExport: false
                    },
                ]
        });
    })
        .fail(function () {
            handleError('chart1');
        });

    var seriesOptions2 = [],
        seriesCounter2 = 0,
        // urls2 = ['/data-sp500-total-return/', '/data-total-return-bond-index/','/data-sp500-since-1896/', '/data-dow-jones/',];
        // names2 = ['Total Return Stock Index', 'Total Return Bond Index','S&P 500', 'Dow Jones',];
        // colors2 = ['black', 'orange','red', 'blue',];
        urls2 = ['/data-total-return-bond-index/', '/data-sp500-since-1896/'];
    names2 = ['Total Return Bond Index', 'S&P 500'];
    colors2 = ['orange', 'red',];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'S&P 500 vs. Total Return Bond Index',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 10,
                    text: '10y'
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
                    count: 100,
                    text: '100y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 3
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

            xAxis: {
                ordinal: false,
                plotLines:
                    [{
                        value: Date.UTC(1972, 11, 31),
                        color: 'orange',
                        dashStyle: 'shortdash',
                        width: 1,
                        label: { text: 'FRED Data' }
                    }, {
                        value: Date.UTC(1896, 7),
                        color: 'red',
                        dashStyle: 'shortdash',
                        width: 1,
                        label: { text: 'start S&P 500 data' }
                    }
                    ],
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

            series: seriesOptions2
        });
    }

    $.each(urls2, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions2[k] = {
                data: hcFormat(data),
                name: names2[k],
                color: colors2[k],
                id: urls2[k],
            };

            seriesCounter2 += 1;

            if (seriesCounter2 === urls2.length) {

                createChart2();
            }
        })
            .fail(function () {
                handleError('chart2');
            });
    });

    $.getJSON('/data-total-return-stocks-to-bonds-ratio/', function (data) {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Total Return Stock Index / Total Return Bond Index (log)',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 10,
                    text: '10y'
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
                    count: 100,
                    text: '100y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 3
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            xAxis: {
                ordinal: false
            },

            yAxis: {
                title: {
                    text: 'Total Return Stocks / Bonds'
                },
                type: 'logarithmic',
            },

            series: [{
                name: 'Total Return Stock Index / Total Return Bond Index',
                data: hcFormat(data),
                color: 'black',
                id: 'data-total-return-stocks-to-bonds-ratio',
                tooltip: {
                    valueDecimals: 2
                },
                dataGrouping: { enabled: true }
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart3');
        });


    var seriesOptions4 = [],
        seriesCounter4 = 0,
        // urls2 = ['/data-sp500-total-return/', '/data-total-return-bond-index/','/data-sp500-since-1896/', '/data-dow-jones/',];
        // names2 = ['Total Return Stock Index', 'Total Return Bond Index','S&P 500', 'Dow Jones',];
        // colors2 = ['black', 'orange','red', 'blue',];
        urls4 = ['/data-sp500-total-return/', '/data-total-return-bond-index/', '/data-sp500-since-1896/'];
    names4 = ['Total Return Stock Index', 'Total Return Bond Index', 'S&P 500'];
    colors4 = ['black', 'orange', 'red'];

    function createChart4() {

        $('#chart4').highcharts('StockChart', {

            title: {
                text: 'Total Return Stock Index vs. S&P 500 vs. Bonds',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 10,
                    text: '10y'
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
                    count: 100,
                    text: '100y'
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
                labels: {
                    formatter: function () {
                        return (this.value > 0 ? ' + ' : '') + this.value + '%';
                    }
                },
            },

            xAxis: {
                ordinal: false,
                plotLines:
                    [{
                        value: Date.UTC(1896),
                        color: 'black',
                        dashStyle: 'shortdash',
                        width: 1,
                        label: { text: 'start data' }
                    }],
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

            series: seriesOptions4
        });
    }

    $.each(urls4, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions4[k] = {
                data: hcFormat(data),
                name: names4[k],
                color: colors4[k],
                id: urls4[k],
            };

            seriesCounter4 += 1;

            if (seriesCounter4 === urls4.length) {

                createChart4();
            }
        })
            .fail(function () {
                handleError('chart4');
            });
    });

});
