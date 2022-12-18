$(function () {
    $.getJSON('/data-msci-usa-to-world-ratio/', function (data) {


        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'MSCI USA / MSCI World',
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
                title: { text: 'USA / World' },
            },


            series:
                [
                    {
                        name: 'USA / World',
                        data: hcFormat(data),
                        id: 'data-msci-usa-to-world-ratio',
                        tooltip: { valueDecimals: 2 },
                        dataGrouping: { enabled: false }
                    },
                    {
                        type: 'flags',
                        name: 'Flags on series',
                        data: [{
                            x: Date.UTC(1971, 4),
                            title: '1971', text: '1971'
                        }, {
                            x: Date.UTC(1976, 10),
                            title: '1976', text: '1976'
                        }, {
                            x: Date.UTC(1982, 10),
                            title: '1982', text: '1982'
                        }, {
                            x: Date.UTC(1993, 0),
                            title: '1993', text: '1993'
                        }, {
                            x: Date.UTC(2002, 1),
                            title: '2002', text: 'Dot-com Bubble'
                        }, {
                            x: Date.UTC(2008, 2),
                            title: '2008', text: 'Financial Crisis of 2008'
                        }
                        ],
                        onSeries: 'data-msci-usa-to-world-ratio',
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
        urls2 = ['/data-msci-usa/', '/data-msci-world/'];
    names2 = ['MSCI USA', 'MSCI World Index'];
    colors2 = ['red', 'black'];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'MSCI USA vs. MSCI World',
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

    $.getJSON('/data-msci-usa-to-acwi-ratio/', function (data) {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'MSCI USA / ACWI',
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

            xAxis: {
                ordinal: false
            },

            yAxis: {
                title: {
                    text: 'USA / ACWI'
                },
            },

            series: [{
                name: 'USA / ACWI',
                data: hcFormat(data),
                id: 'data-msci-usa-to-acwi-ratio',
                tooltip: {
                    valueDecimals: 2
                },
                dataGrouping: { enabled: false },
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [{
                    x: Date.UTC(2021, 7, 31),
                    title: '2021', text: 'The United States make up 59.84% of the MSCI ACWI'
                },
                ],
                onSeries: 'data-msci-usa-to-acwi-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart3');
        });


    var seriesOptions4 = [],
        seriesCounter4 = 0,
        // urls2 = ['/data-sp500-total-return/', '/data-total-return-bond-index/','/data-sp500-since-1896/', '/data-dow-jones/',];
        // names2 = ['Total Return Stock Index', 'Total Return Bond Index','S&P 500', 'Dow Jones',];
        // colors2 = ['black', 'orange','red', 'blue',];
        urls4 = ['/data-msci-usa/', '/data-acwi/'];
    names4 = ['MSCI USA', 'MSCI ACWI Index'];
    colors4 = ['red', 'blue'];

    function createChart4() {

        $('#chart4').highcharts('StockChart', {

            title: {
                text: 'MSCI USA vs. ACWI',
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

            series: seriesOptions4
        });
    }

    $.each(urls4, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions4[k] = {
                data: hcFormat(data),
                name: names4[k],
                color: colors4[k],
                id: urls4[k],
            };

            seriesCounter4 += 1;

            if (seriesCounter4 === urls4.length) {

                createChart4();
            }
        })
            .fail(function () {
                handleError('chart4');
            });
    });

});
