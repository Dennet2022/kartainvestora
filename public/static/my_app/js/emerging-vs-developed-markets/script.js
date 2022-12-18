$(function () {
    $.getJSON('/data-emerging-vs-developed-markets/', function (data) {


        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'MSCI Emering Markets / MSCI World',
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
                    type: 'all',
                    text: 'All'
                }],
                inputEnabled: true,
                selected: 5
            },

            credits: {
                text: 'Longtermtrends.net',
                href: 'http://www.longtermtrends.net'
            },

            xAxis: {
                ordinal: false
            },

            yAxis: {
                title: { text: 'EM / DM' },
            },


            series:
                [
                    {
                        name: 'MSCI Emering Markets / MSCI World',
                        data: hcFormat(data),
                        id: 'data-emerging-vs-developed-markets',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: false }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [{
                            x: Date.UTC(1994, 9),
                            title: '1994', text: '1994'
                        }, {
                            x: Date.UTC(2001, 9),
                            title: '2001', text: 'Dot-com Bubble'
                        }, {
                            x: Date.UTC(2010, 9),
                            title: '2010', text: '2010'
                        },
                        ],
                        onSeries: 'data-emerging-vs-developed-markets',
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
        // urls2 = ['/data-sp500-total-return/', '/data-total-return-bond-index/','/data-sp500-since-1896/', '/data-dow-jones/',];
        // names2 = ['Total Return Stock Index', 'Total Return Bond Index','S&P 500', 'Dow Jones',];
        // colors2 = ['black', 'orange','red', 'blue',];
        urls2 = ['/data-msci-emerging-markets/', '/data-msci-world/'];
    names2 = ['MSCI Emerging Markets', 'MSCI World (Developed Markets)'];
    colors2 = ['red', 'black'];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'MSCI Emerging vs. Developed Markets',
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
