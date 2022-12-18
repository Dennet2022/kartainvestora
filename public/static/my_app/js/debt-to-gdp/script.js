$(function () {

    $.getJSON('/data-total-public-debt-to-gdp/', function (data) { // Variable heisst data

        $('#chart').highcharts('StockChart', {

            title: {
                text: '(Government) Total Public Debt / GDP Ratio',
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
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputenabled: false,
                selected: 5 // all
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            xAxis: {
                ordinal: false
            },

            yAxis: {
                labels: { format: '{value} %' }
            },

            series: [{
                name: 'Total Public Debt to GDP Ratio',
                data: hcFormat(data),
                id: 'data-total-public-debt-to-gdp',
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: ' %',
                },
                dataGrouping: {
                    enabled: false
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [
                    {
                        x: Date.UTC(1865, 0, 6),
                        title: 'US Civil War'
                    },
                    {
                        x: Date.UTC(1919, 0, 6),
                        title: 'World War 1'
                    },
                    {
                        x: Date.UTC(1946, 5, 27),
                        title: 'World War 2'
                    }
                ],
                onSeries: 'data-total-public-debt-to-gdp',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart');
        });

    $.getJSON('/data-corporate-debt-to-gdp/', function (data) { // Variable heisst data



        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Non-Financial Corporate Debt / GDP Ratio',
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
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 5 // all
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            xAxis: {
                ordinal: false
            },

            yAxis: {
                labels: { format: '{value} %' }
            },


            series: [{
                name: 'Corporate Debt to GDP Ratio',
                data: hcFormat(data),
                id: 'data-corporate-debt-to-gdp',
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: ' %',
                },
                dataGrouping: {
                    enabled: false
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [
                    {
                        x: Date.UTC(1990, 9, 0),
                        title: '1990', text: 'Late-1980s Boom'
                    },
                    {
                        x: Date.UTC(2001, 6, 0),
                        title: '2001', text: 'Dot-com Bubble'
                    },
                    {
                        x: Date.UTC(2009, 0, 0),
                        title: '2009', text: 'Housing Bubble'
                    },
                    {
                        x: Date.UTC(2020, 3),
                        title: '2020', text: 'COVID-19 Recession'
                    }
                ],
                onSeries: 'data-corporate-debt-to-gdp',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart2');
        });

    $.getJSON('/data-household-debt-to-gdp/', function (data) { // Variable heisst data

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Household Debt / GDP Ratio',
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
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 5 // all
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            xAxis: {
                ordinal: false
            },

            yAxis: {
                labels: { format: '{value} %' }
            },


            series: [{
                name: 'Household Debt to GDP Ratio',
                data: hcFormat(data),
                id: 'data-household-debt-to-gdp',
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: ' %',
                },
                dataGrouping: {
                    enabled: false
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [
                    {
                        x: Date.UTC(2008, 0, 0),
                        title: '2008', text: 'Housing Bubble'
                    }
                ],
                onSeries: 'data-household-debt-to-gdp',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart3');
        });


    var seriesOptions = [],
        seriesCounter = 0,
        urls = [
            '/data-total-public-debt/',
            '/data-corporate-debt/',
            '/data-household-debt/',
            '/data-gdp-since-1790/',
        ];

    names = [
        'Federal Debt',
        'Corporate Debt',
        'Household Debt',
        'GDP',
    ];

    colors = [
        'blue',
        'grey',
        'red',
        'black',
    ];

    function createChart4() {

        $('#chart4').highcharts('StockChart', {

            title: {
                text: 'Federal vs. Corporate vs. Household Debt vs. GDP',
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

                createChart4();
            }
        })
            .fail(function () {
                handleError('chart4');
            });
    });

});
