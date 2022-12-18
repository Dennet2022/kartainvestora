$(function () {
    $.getJSON('/data-oil-gold-ratio/', function (data) { // Variable heisst data



        $('#chart').highcharts('StockChart', {

            title: {
                text: 'Oil / Gold Ratio',
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

            xAxis: {
                ordinal: false
            },

            yAxis: {
                title: { text: 'Oil/Gold' },
            },


            series:
                [
                    {
                        name: 'Oil/Gold',
                        data: hcFormat(data),
                        id: 'oil-gold-ratio',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: false }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [
                            { x: Date.UTC(2008, 5, 25), title: '2008', text: 'Financial Crisis of 2008' },
                            { x: Date.UTC(2020, 3, 20), title: '2020', text: 'COVID-19 Recession' },
                        ],
                        onSeries: 'oil-gold-ratio',
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
            '/data-gold2/',
            '/data-oil/'
        ];

    names = [
        'Gold',
        'Oil',
    ];

    colors = [
        'gold',
        'Black',
    ];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {
            title: {
                text: 'Oil vs. Gold',
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
                    name: 'WTI Crude Oil',
                    data: [
                        { x: Date.UTC(2008, 5, 25), title: '2008' },
                        { x: Date.UTC(2020, 3, 20), title: '2020' },
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
                handleError('chart2');
            });
    });

});
