$(function () {

    var seriesOptions = [],
        seriesCounter = 0,
        urls = ['/data-m2-yoy/', '/data-inflation/'];
    names = ['M2 Growth Rate', 'Inflation Rate'];
    colors = ['black', 'red'];


    $(function () {
        function createChart() {

            $('#chart1').highcharts('StockChart', {

                title: {
                    text: 'M2 yearly growth vs. inflation',
                },

                rangeSelector: {
                    buttons: [{
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
                        count: 110,
                        text: '110y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                    // inputEnabled: true,
                    selected: 2 //50 years
                },

                credits: {
                    text: 'Longtermtrends.net',
                    href: 'http://www.longtermtrends.net'
                },

                yAxis: {
                    labels: { format: '{value} %' },
                },

                xAxis: {
                    ordinal: false,
                },


                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}%</b><br/>',
                    valueDecimals: 2,
                    dataGrouping: { enabled: false },
                    split: true
                },

                series: [
                    ...seriesOptions,
                    {
                        type: 'flags',
                        name: 'M2 Growth peaks',
                        data: [
                            { x: Date.UTC(1916, 11, 31), title: '1916', name: 'First World War' },
                            { x: Date.UTC(1943, 11, 31), title: '1943', name: 'Second World War' },
                            { x: Date.UTC(2001, 11, 1), title: '2001', name: 'Early 2000 Recession' },
                            { x: Date.UTC(2009, 0, 1), title: '2009', name: 'Great Recession' },
                            { x: Date.UTC(2021, 1), title: '2021', name: 'COVID-19 Recession' },
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
                    id: urls[k]
                };


                seriesCounter += 1;

                if (seriesCounter === urls.length) {

                    createChart();
                }
            })
                .fail(function () {
                    handleError('chart1');
                });
        });

    });

    var seriesOptions2 = [],
        seriesCounter2 = 0,
        urls2 = [
            '/data-m2-money-stock/',
            '/data-cpi/',
            /data-gdp/,
        ];

    names2 = [
        'M2 Money Stock',
        'Consumer Price Index',
        'GDP',
    ];

    colors2 = [
        'Black',
        'red',
        'blue',
    ];

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'M2 Money Supply vs. Consumer Price Index (CPI) vs. GDP',
            },
            rangeSelector: {
                buttons: [{
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
                    count: 110,
                    text: '110y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                // inputEnabled: true,
                selected: 2 //50 years
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

    $.getJSON('/data-gdp-m2-ratio/', function (data) { // Variable heisst data


        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Velocity of M2 Money Stock',
            },

            rangeSelector: {
                buttons: [{
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
                    count: 110,
                    text: '110y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                // inputEnabled: true,
                selected: 2 //50 years
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
                    text: 'GDP / M2'
                },
                type: 'linear',
            },


            series: [{
                name: 'M2 Velocity (GDP/M2 Money Stock)',
                data: hcFormat(data),
                id: 'data-gdp-m2-ratio',
                tooltip: {
                    valueDecimals: 3
                },
                dataGrouping: {
                    enabled: false
                }
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart3');
        });
});
