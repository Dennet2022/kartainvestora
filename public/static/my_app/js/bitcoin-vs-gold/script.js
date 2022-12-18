var seriesOptions = [],
    seriesCounter = 0,
    urls = ['/data-bitcoin/', '/data-gold-since-1792/'];
names = ['Bitcoin', 'Gold'];
colors = ['black', 'gold'];


$(function () {
    $.getJSON('/data-bitcoin-gold-ratio/', function (data) {


        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'Bitcoin / Gold Ratio (logarithmic scale)',
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
                        count: 10,
                        text: '10y'
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

            xAxis: {
                ordinal: false
            },

            yAxis: {
                title: {
                    text: 'Bitcoin/Gold (log)'
                },
                type: 'logarithmic',
                // min: 0.00008
            },


            series: [{
                name: 'Bitcoin/Gold',
                data: hcFormat(data),
                id: 'bitcoin-gold-ratio',
                tooltip: {
                    valueDecimals: 4
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [{
                    x: Date.UTC(2011, 5, 8),
                    title: '2011',
                    text: 'Bitcoin peaks at $29.60'
                },
                {
                    x: Date.UTC(2013, 11, 4),
                    title: '2013',
                    text: 'Bitcoin peaks at $230.00'

                },
                {
                    x: Date.UTC(2017, 11, 16),
                    title: '2017',
                    text: 'Bitcoin peaks at $19,345.49'
                }
                ],
                onSeries: 'bitcoin-gold-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart1');
        });

    $.getJSON('/data-bitcoin-gold-ratio/', function (data) {


        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Bitcoin / Gold Ratio (linear)',
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
                        count: 10,
                        text: '10y'
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

            xAxis: {
                ordinal: false
            },

            yAxis: {
                title: {
                    text: 'Bitcoin/Gold'
                },
                min: 0
            },


            series: [{
                name: 'Bitcoin/Gold',
                data: hcFormat(data),
                id: 'bitcoin-gold-ratio',
                tooltip: {
                    valueDecimals: 4
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [{
                    x: Date.UTC(2011, 5, 8),
                    title: '2011',
                    text: 'Bitcoin peaks at $29.60'
                },
                {
                    x: Date.UTC(2013, 11, 4),
                    title: '2013',
                    text: 'Bitcoin peaks at $230.00'

                },
                {
                    x: Date.UTC(2017, 11, 16),
                    title: '2017',
                    text: 'Bitcoin peaks at $19,345.49'
                }
                ],
                onSeries: 'bitcoin-gold-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })

        .fail(function () {
            handleError('chart2');
        });

    function createChart() {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Bitcoin vs. Gold since 1792',
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
                        count: 10,
                        text: '10y'
                    }, {
                        type: 'year',
                        count: 50,
                        text: '50y'
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
                    name: 'Bitcoin peaks',
                    data: [{
                        x: Date.UTC(2011, 5, 8),
                        title: '2011',
                        text: 'Bitcoin peaks at $29.60'
                    },
                    {
                        x: Date.UTC(2013, 11, 4),
                        title: '2013',
                        text: 'Bitcoin peaks at $230.00'

                    },
                    {
                        x: Date.UTC(2017, 11, 16),
                        title: '2017',
                        text: 'Bitcoin peaks at $19,345.49'
                    }
                    ],
                    onSeries: urls[0],
                    shape: 'squarepin',
                    includeInDataExport: false
                }, {
                    type: 'flags',
                    name: 'Gold peaks',
                    data: [
                        { x: Date.UTC(1980, 0, 15), title: '1980' },
                        { x: Date.UTC(2011, 10, 15), title: '2011' },
                        // {x : Date.UTC(2020, 7, 7), title : '2020'}

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
                id: urls[k]
            };


            seriesCounter += 1;

            if (seriesCounter === urls.length) {

                createChart();
            }
        })
            .fail(function () {
                handleError('chart3');
            });
    });
});
