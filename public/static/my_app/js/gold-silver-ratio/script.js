$(function () {
    $.getJSON('/data-gold-silver-ratio/', function (data) { // Variable heisst data



        $('#chart').highcharts('StockChart', {

            title: {
                text: 'Gold / Silver Ratio since 1693',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 110,
                    text: '110y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 3
            },

            xAxis: {
                ordinal: false
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            yAxis: {
                title: { text: 'Gold/Silver' },
            },


            series:
                [
                    {
                        name: 'Gold/Silver',
                        data: hcFormat(data),
                        id: 'gold-silver-ratio',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: true }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [
                            { x: Date.UTC(1919, 11), title: '1919', text: 'End of WWI' },
                            { x: Date.UTC(1940, 11), title: '1940', text: 'Start of WWII' },
                            { x: Date.UTC(1968, 2, 14), title: '1968', text: '1968 Gold Crisis' },
                            { x: Date.UTC(1980, 0, 2), title: '1980', text: 'Inflation scare. Interest rates peak.' },
                            { x: Date.UTC(1991, 1, 25), title: '1991', text: '1st Gulf War' },
                            { x: Date.UTC(2020, 2, 19), title: '2020', text: 'Corona Crisis' },
                        ],
                        onSeries: 'gold-silver-ratio',
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
            '/data-gold-since-1792/',
            '/data-silver-since-1791/'
        ];

    names = [
        'Gold',
        'Silver',
    ];

    colors = [
        'gold',
        'silver',
    ];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {
            title: {
                text: 'Gold vs. Silver',
            },
            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 110,
                    text: '110y'
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
        urls2 = ['/data-gold-silver-ratio/', '/data-dollar-index/', '/data-dollar-index-old/'];
    names2 = ['Gold/Silver', 'US Dollar Index', 'US Dollar Index (Discontinued) + 16'];
    colors2 = ['#7cb5ec', 'black', 'black'];

    function createChart3() {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Gold/Silver vs. US Dollar Index',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'year',
                    count: 3,
                    text: '3y'
                }, {
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 15,
                    text: '15y'
                }, {
                    type: 'year',
                    count: 45,
                    text: '45y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                selected: 1
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },


            yAxis: [
                {
                    title: { text: 'Gold/Silver', },
                    opposite: false,
                    labels: { format: '{value}' },
                },
                {
                    labels: { format: '{value}' },
                    title: { text: 'US Dollar Index' },
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
                yAxis: name === 'Gold/Silver' ? 0 : 1,
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
