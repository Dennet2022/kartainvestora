$(function () {
    $.getJSON('/data-real-estate-gold-ratio/', function (data) { // Variable heisst data



        $('#chart').highcharts('StockChart', {

            title: {
                text: 'Shiller Case Home Price Index / Gold Ratio',
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
                ordinal: false
            },

            yAxis: {
                title: { text: 'Real Estate / Gold' },
            },
            series:
                [
                    {
                        name: 'Home Price Index / Gold',
                        data: hcFormat(data),
                        id: 'home-price-gold-ratio',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: false }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [
                            { x: Date.UTC(1971, 7, 14), title: '1971', text: 'Gold became free trading and started to rise after The United States left the Bretton Woods system' },
                            { x: Date.UTC(1980, 0, 15), title: '1980', text: 'In 1980 an average single family home only cost 114 ounces of gold.' },
                            { x: Date.UTC(2001, 3, 15), title: '2001', text: 'In 2001 the ratio peaked and an average single family home cost 771 ounces of gold.' },
                            { x: Date.UTC(2011, 10, 15), title: '2011', text: 'In 2011 an average single family home cost 139 ounces of gold.' },
                        ],
                        onSeries: 'home-price-gold-ratio',
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
            '/data-us-home-price/',
        ];

    names = [
        'Gold',
        'Case-Shiller Home Price Index (* 1800$)',
    ];

    colors = [
        'gold',
        'rgb(0, 0, 0)',
    ];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Gold vs. Home Prices',
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

            series: [
                ...seriesOptions,
                {
                    type: 'flags',
                    name: 'Housing Bubble',
                    data: [{
                        x: Date.UTC(2006, 8, 15),
                        title: '2006', text: 'Housing Bubble'
                    }
                    ],
                    onSeries: urls[1],
                    shape: 'squarepin',
                    includeInDataExport: false
                }, {
                    type: 'flags',
                    name: 'Gold peaks',
                    data: [
                        { x: Date.UTC(1980, 0, 15), title: '1980', text: 'In 1980 an average single family home only cost 84 ounces of gold.' },
                        { x: Date.UTC(2011, 10, 15), title: '2011', text: 'In 2011 an average single family home cost 102 ounces of gold.' }
                    ],
                    onSeries: urls[0],
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
