$(function () {
    $.getJSON('/data-dow-gold-ratio/', function (data) {


        $('#chart').highcharts('StockChart', {

            title: {
                text: 'Dow Jones / Gold Ratio (log) since 1792',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'year',
                    count: 50,
                    text: '50y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
                }, {
                    type: 'year',
                    count: 150,
                    text: '150y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 3 // 100
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
                    text: 'Dow/Gold (log)'
                },
                max: 50,
                type: 'logarithmic',

                minPadding: 0.1,
                // tickAmount: 9,
                // plotBands:
                //     [
                //       {
                //         from: 1,
                //         to: 2,
                //         color: 'rgba(255, 0, 0, 0.1)',
                //         label: {text: 'Stocks crash / Gold bubble'}
                //       },
                //       {
                //         from: 2,
                //         to: 4,
                //         color: 'rgba(255, 255, 0, 0.1)',
                //         label: {text: 'Stocks are undervalued'}
                //       },
                //       {
                //         from: 4,
                //         to: 5,
                //         color: 'rgba(0, 255, 0, 0.2)',
                //         label: {text: 'Fair Value'}
                //       },
                //       {
                //         from: 5,
                //         to: 10,
                //         color: 'rgba(255, 255, 1, 0.1)',
                //         label: {text: 'Stocks are overvalued'}
                //       },
                //       {
                //         from: 10,
                //         to: 64,
                //         color: 'rgba(255, 0, 0, 0.1)',
                //         label: {text: 'Stocks are in a bubble'}
                //       }
                //     ],
            },


            series: [{
                name: 'Dow/Gold',
                data: hcFormat(data),
                id: 'dow-gold-ratio',
                tooltip: {
                    valueDecimals: 2
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [{
                    x: Date.UTC(1929, 8, 3),
                    title: 'Boom of 1929',
                    text: 'Stocks rise while gold stays at 20.67$'
                },
                {
                    x: Date.UTC(1971, 7, 14),
                    title: 'Nixon Shock',
                    text: 'Gold became free trading and started to rise after The United States left the Bretton Woods system'
                },
                {
                    x: Date.UTC(1980, 0, 21),
                    title: 'Gold peaks',
                    text: 'The Dow Jones only costs one ounce of gold, which hits a high at $843 per ounce.'
                },
                {
                    x: Date.UTC(1999, 7, 25),
                    title: 'Dot-com bubble',
                    text: 'On March 10th the NASDAQ peaks at 5,132.52 points. The shares in the Dow Jones now cost almost 45 ounces of gold.'
                },
                ],
                onSeries: 'dow-gold-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart');
        });

    $.getJSON('/data-dow-gold-ratio/', function (data) {


        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Dow Jones / Gold Ratio (linear) since 1792',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'year',
                    count: 50,
                    text: '50y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
                }, {
                    type: 'year',
                    count: 150,
                    text: '150y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 3 // 100
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
                    text: 'Dow/Gold'
                },
                max: 50,

                // minPadding: 0.1,
                // tickAmount: 9,
                // plotBands:
                //     [
                //       {
                //         from: 1,
                //         to: 2,
                //         color: 'rgba(255, 0, 0, 0.1)',
                //       },
                //       {
                //         from: 2,
                //         to: 4,
                //         color: 'rgba(255, 255, 0, 0.1)',
                //       },
                //       {
                //         from: 4,
                //         to: 5,
                //         color: 'rgba(0, 255, 0, 0.2)',
                //       },
                //       {
                //         from: 5,
                //         to: 10,
                //         color: 'rgba(255, 255, 1, 0.1)',
                //       },
                //       {
                //         from: 10,
                //         to: 64,
                //         color: 'rgba(255, 0, 0, 0.1)',
                //       }
                //     ],
            },


            series: [{
                name: 'Dow/Gold',
                data: hcFormat(data),
                id: 'dow-gold-ratio',
                tooltip: {
                    valueDecimals: 2
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [{
                    x: Date.UTC(1929, 8, 3),
                    title: 'Boom of 1929',
                    text: 'Stocks rise while gold stays at 20.67$'
                },
                {
                    x: Date.UTC(1971, 7, 9),
                    title: 'Nixon Shock',
                    text: 'The United States left the Bretton Woods system by suspending the convertibility of the dollar into gold, which became free trading.'
                },
                {
                    x: Date.UTC(1980, 0, 21),
                    title: 'Gold peaks',
                    text: 'The Dow Jones only costs one ounce of gold, which hits a high at $850 per ounce.'
                },
                {
                    x: Date.UTC(1999, 7, 25),
                    title: 'Dot-com bubble',
                    text: 'On March 10th the NASDAQ peaks at 5,132.52 points. The shares in the Dow Jones now cost almost 45 ounces of gold.'
                },
                ],
                onSeries: 'dow-gold-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })

        .fail(function () {
            handleError('chart2');
        });

    var seriesOptions = [],
        seriesCounter = 0,
        urls = [
            '/data-dow-since-1789/',
            '/data-gold-since-1792/'
        ];

    names = [
        'Dow Jones',
        'Gold'
    ];

    colors = [
        'blue',
        'gold'
    ];

    function createChart2() {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'DJIA vs. Gold',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'year',
                    count: 50,
                    text: '50y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
                }, {
                    type: 'year',
                    count: 150,
                    text: '150y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 2
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
            series: [
                ...seriesOptions,
                {
                    type: 'flags',
                    name: 'Gold peaks',
                    data: [{
                        x: Date.UTC(1980, 0, 21),
                        title: 'Gold peaks',
                        text: 'The Dow Jones only costs one ounce of gold, which hits a high at $843 per ounce.'
                    }
                    ],
                    onSeries: urls[1],
                    shape: 'squarepin',
                    includeInDataExport: false
                },
            ]
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
                handleError('chart3');
            });
    });
});
