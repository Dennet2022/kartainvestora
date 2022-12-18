$(function () {

    $.getJSON('/data-copper-gold-ratio/', function (data) { // Variable heisst data

        $('#chart').highcharts('StockChart', {

            title: {
                text: 'Copper / Gold Ratio',
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
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 110,
                    text: '110y'
                },
                {
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
                title: { text: 'Copper/Gold' },

            },


            series:
                [
                    {
                        name: 'Copper/Gold',
                        data: hcFormat(data),
                        id: 'copper-gold-ratio',
                        tooltip: { valueDecimals: 6 },
                        dataGrouping: { enabled: true },
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [
                            {
                                x: Date.UTC(1971, 7, 14),
                                title: '1971',
                                text: 'Gold became free trading and started to rise after The United States left the Bretton Woods system'
                            },
                            { x: Date.UTC(2008, 4), title: '2008', text: 'Financial Crisis of 2008' },
                        ],
                        onSeries: 'copper-gold-ratio',
                        shape: 'squarepin'
                    },

                ]
        });
    })
        .fail(function () {
            handleError('chart');
        });

    // second chart gold vs. copper comparison:

    var seriesOptions2 = [],
        seriesCounter2 = 0,
        urls2 = ['/data-gold-since-1850/', '/data-copper-since-1850/'];
    names2 = ['Gold', 'Copper'];
    colors2 = ['gold', 'orange'];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Gold vs. Copper',
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
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 110,
                    text: '110y'
                },
                {
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
                ordinal: false
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

    // third chart copper/gold ratio vs. interest rates:

    var seriesOptions = [],
        seriesCounter = 0,
        urls = ['/data-copper-gold-ratio/', '/data-interest-rates/'];
    names = ['Copper/Gold', '10-year US Treasury Bond Yield'];
    colors = ['orange', 'black']

    function createChart() {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Copper/Gold vs. Interest Rates',
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
                    count: 15,
                    text: '15y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                // inputEnabled: true,
                selected: 0 // 1 years
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
                ordinal: false
            },

            plotOptions: {
                series: {
                    compare: 'percent',
                    showInNavigator: true
                }
            },

            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
                valueDecimals: 6,
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

                createChart();
            }
        })
            .fail(function () {
                handleError('chart3');
            });
    });

});
