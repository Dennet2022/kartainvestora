$(function () {
    $.getJSON('/data-ndx-to-spx-ratio/', function (data) {


        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'Nasdaq / S&P 500',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 5,
                    text: '5y'
                }, {
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 20,
                    text: '20y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'year',
                    count: 40,
                    text: '40y'
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
                title: { text: 'Nasdaq / S&P 500' },
            },


            series:
                [
                    {
                        name: 'Nasdaq / S&P 500',
                        data: hcFormat(data),
                        id: 'data-ndx-to-spx-ratio',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: true }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [{
                            x: Date.UTC(2000, 2, 9),
                            title: '2000', text: 'Dot-com Bubble'
                        }
                        ],
                        onSeries: 'data-ndx-to-spx-ratio',
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
        urls2 = ['/data-nasdaq-composite-index/', '/data-sp500-since-1970/'];
    names2 = ['Nasdaq Composite', 'S&P 500'];
    colors2 = ['Black', 'red',];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Nasdaq Composite vs. S&P 500',
            },

            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 5,
                    text: '5y'
                }, {
                    type: 'year',
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 20,
                    text: '20y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
                }, {
                    type: 'year',
                    count: 40,
                    text: '40y'
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

});
