$(function () {
    var today = new Date();
    $.getJSON('/data-sp500-commodities/', function (data) { // Variable heisst data



        $('#chart').highcharts('StockChart', {

            title: {
                text: 'S&P 500 / Producer Price Index (log)',
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
                selected: 4 // all
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            xAxis: {
                type: 'datetime',
                ordinal: false,
                plotBands:
                    [
                        {
                            from: Date.UTC(1887, 0, 1),
                            to: Date.UTC(1907, 0, 1),
                            color: 'rgba(0, 0, 255, 0.1)',
                            label: { text: 'Deflation' }
                        },
                        {
                            from: Date.UTC(1907, 0, 2),
                            to: Date.UTC(1920, 6, 1),
                            color: 'rgba(255, 0, 0, 0.1)',
                            label: { text: 'Inflation' }
                        },
                        {
                            from: Date.UTC(1920, 6, 2),
                            to: Date.UTC(1929, 8, 1),
                            color: 'rgba(0, 0, 255, 0.1)',
                            label: { text: 'Deflation' }
                        },
                        {
                            from: Date.UTC(1929, 8, 2),
                            to: Date.UTC(1950, 0, 1),
                            color: 'rgba(255, 0, 0, 0.1)',
                            label: { text: 'Inflation' }
                        },
                        {
                            from: Date.UTC(1950, 0, 2),
                            to: Date.UTC(1971, 7, 9),
                            color: 'rgba(0, 0, 255, 0.1)',
                            label: { text: 'Deflation' }
                        },
                        {
                            from: Date.UTC(1971, 7, 10),
                            to: Date.UTC(1982, 6, 1),
                            color: 'rgba(255, 0, 0, 0.1)',
                            label: { text: 'Inflation' }
                        },
                        {
                            from: Date.UTC(1982, 6, 2),
                            to: Date.UTC(2000, 6, 1),
                            color: 'rgba(0, 0, 255, 0.1)',
                            label: { text: 'Deflation' }
                        },
                        {
                            from: Date.UTC(2000, 6, 2),
                            to: Date.UTC(2009, 2, 1),
                            color: 'rgba(255, 0, 0, 0.1)',
                            label: { text: 'Inflation' }
                        },
                        {
                            from: Date.UTC(2009, 2, 2),
                            to: Date.UTC(today.getFullYear(), today.getMonth(), today.getDate()),
                            color: 'rgba(0, 0, 255, 0.1)',
                            label: { text: 'Deflation' }
                        },
                    ],
            },

            yAxis: {
                title: { text: 'S&P 500 / PPI (log)' },
                type: 'logarithmic',
            },


            series:
                [
                    {
                        name: 'SP500/PPI',
                        data: hcFormat(data),
                        id: 'sp500-commodities',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: true }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [
                            { x: Date.UTC(1887, 0, 1), title: '1887', text: 'Gold standard begins in 1879. Deflation and a boom in stocks follow.' },
                            { x: Date.UTC(1907, 0, 1), title: '1907', text: 'Panic of 1907. Inflation and WW1 followed. Commodities rise.' },
                            { x: Date.UTC(1920, 6, 1), title: '1920', text: 'Commodity bubble bursts. Deflation and a boom in stocks follow.' },
                            { x: Date.UTC(1929, 8, 1), title: '1929', text: 'Stock market crash of 1929. Inflation and WW2 follow. Commodities rise.' },
                            { x: Date.UTC(1950, 0, 1), title: '1950', text: 'Commodity bubble bursts. Deflation and a boom in stocks follow.' },
                            { x: Date.UTC(1971, 7, 9), title: '1971', text: 'Nixon shock. Dollar devaluation. Vietnam war continues into the 1970s. Commodities rise.' },
                            { x: Date.UTC(1982, 6, 1), title: '1982', text: 'Interest rates peak. Deflation and a bull market in stocks begin.' },
                            { x: Date.UTC(2000, 6, 1), title: '2000', text: 'Tech bubble bursts. US wars in Afghanistan and Iraq. Commodities rise.' },
                            { x: Date.UTC(2009, 2, 1), title: '2009', text: 'Deflation and a bull market in stocks begin. Interest rates are on record lows.' },
                            // {x : Date.UTC(2018, 0, 27), title : '2018', text : 'Inflation starts to pick up slightly.'},
                        ],
                        onSeries: 'sp500-commodities',
                        shape: 'squarepin',
                        includeInDataExport: false
                    },
                ]
        });
    })
        .fail(function () {
            handleError('chart');
        });

    var seriesOptions = [],
        seriesCounter = 0,
        urls = [
            '/data-sp500/',
            '/data-commodities/',
        ];

    names = [
        'S&P 500',
        'PPI (Producer Price Index)',
    ];

    colors = [
        'red',
        'rgb(0, 0, 0)',
    ];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {
            title: {
                text: 'S&P 500 vs. PPI',
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
                color: colors[k],
                id: urls[k],
            };

            seriesCounter += 1;

            if (seriesCounter === urls.length) {

                createChart2();
            }
        })
            .fail(function () {
                handleError('chart2');
            });
    });
});
