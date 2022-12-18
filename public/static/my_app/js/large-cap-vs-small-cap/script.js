$(function () {

    $.getJSON('/data-large-cap-vs-small-cap/', function (data) { // Variable heisst data




        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'Wilshire Large-cap/Small-cap',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'year',
                    count: 5,
                    text: '5y'
                }, {
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 4
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
                    text: 'Large-cap/Small-cap'
                },

                // plotBands:
                //     [
                //       {
                //         from: 1,
                //         to: 2,
                //         color: 'rgba(255, 0, 0, 0.1)',
                //         label: {text: 'Stocks crash / Gold bubble'}
                //       }
                //     ],

                // plotBands:
                //     [{
                //         from: 5,
                //         to: 25,
                //         color: 'rgba(68, 170, 213, 0.2)',
                //         label: {
                //             text: 'Last quarter year\'s value range'
                //         }
                //     }]
            },


            series: [{
                name: 'Wilshire Large-cap/Small-cap',
                data: hcFormat(data),
                id: 'wilshire-large-cap-vs-small-cap',
                tooltip: {
                    valueDecimals: 3
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [
                    { x: Date.UTC(1999, 3, 8), title: '1999', text: 'Dot-com Bubble' },
                    { x: Date.UTC(2020, 2, 18), title: '2020', text: 'COVID-19 Recession' },
                ],
                onSeries: 'wilshire-large-cap-vs-small-cap',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart1');
        });

    var seriesOptions = [],
        seriesCounter = 0,
        urls = [
            '/data-wilshire-5000-total-market-index/',
            '/data-wilshire-large-cap-index/',
            '/data-wilshire-mid-cap-index/',
            '/data-wilshire-small-cap-index/',
            '/data-wilshire-micro-cap-index/',
        ];

    names = [
        'Wilshire 5000',
        'Wilshire Large-Cap',
        'Wilshire Mid-Cap',
        'Wilshire Small-Cap',
        'Wilshire Micro-Cap',
    ];

    colors = [
        'orange',
        'rgb(0, 0, 0)',
        'rgb(32,178,170)',
        'rgb(255,0,0)',
        'rgb(250,128,114)',
    ];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 1,
                        text: '1y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 10,
                        text: '10y'
                    }, {
                        type: 'year',
                        count: 30,
                        text: '30y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                inputEnabled: true,
                selected: 2 // all
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
                        value: Date.UTC(1978, 6, 0),
                        color: 'blue',
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


    var seriesOptions2 = [],
        seriesCounter2 = 0,
        urls2 = ['/data-small-cap-vs-large-cap/', '/data-10-year-breakeven-inflation-rate/'];
        names2 = ['Small-cap/Large-cap', '10-Year Breakeven Inflation Rate'];
        colors2 = ['#7cb5ec', 'black'];

    function createChart3() {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Small-cap/Large-cap vs. Inflation Expectations',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 2,
                    text: '2y'
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
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 15,
                    text: '15y'
                },{
                    type: 'year',
                    count: 25,
                    text: '25y'
                },{
                    type: 'all',
                    text: 'All'
                }],
                selected: 4
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },


            yAxis: [
                {
                    title: { text: 'Small-cap/Large-cap', },
                    opposite: false,
                    labels: { format: '{value}' },
                },
                {
                    labels: { format: '{value}' },
                    title: { text: 'Inflation' },
                },
            ],

            xAxis: {
                ordinal: false
            },

            plotOptions: {
                series: {
                    // compare: 'percent',
                    showInNavigator: true
                }
            },

            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
                valueDecimals: 2,
                dataGrouping: { enabled: false },
                split: true
            },

            series: seriesOptions2
        });
    }

    $.each(urls2, function (k, url) {

        $.getJSON(url, function (data) {

            const name = names2[k];
            seriesOptions2[k] = {
                data: hcFormat(data),
                name: name,
                color: colors2[k],
                id: urls2[k],
                yAxis: name === 'Small-cap/Large-cap' ? 0 : 1,
            };


            seriesCounter2 += 1;

            if (seriesCounter2 === urls2.length) {

                createChart3();
            }
        })
            .fail(function () {
                handleError('chart3');
            });

    });

});
