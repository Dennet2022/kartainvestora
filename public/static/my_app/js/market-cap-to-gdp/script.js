function findAverage(data) {
    // calculate the mean average.
    // from https://stackoverflow.com/questions/29544371/finding-the-average-of-an-array-using-js/29544442
    var values = new Array();
    var total = 0;
    for (i = 0; i < data.length; i++) {
        values.push(data[i][1])
    };
    for (i = 0; i < values.length; i++) {
        total += values[i];
    };
    var avg = total / values.length;
    return avg;
}

$(function () {

    $.getJSON('/data-wilshire-gdp-ratio/', function (data) { // Variable heisst data



        var mean = findAverage(hcFormat(data));
        // console.log(mean); //for debugging


        $('#chart').highcharts('StockChart', {

            title: {
                text: 'Total value of all publicly-traded stocks / GDP Ratio',
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
                    count: 10,
                    text: '10y'
                }, {
                    type: 'year',
                    count: 30,
                    text: '30y'
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
                labels: { format: '{value} %' },
                title: {
                    text: 'Wilshire 5000/GDP'
                },
                type: 'linear',
                plotLines: [{
                    value: mean,
                    dashStyle: 'shortdash',
                    width: 1.5,
                    label: {
                        text: 'MEAN'
                    }
                }],

            },


            series: [{
                name: 'Wilshire 5000 Total Market Index/GDP',
                data: hcFormat(data),
                color: 'orange',
                id: 'wilshire-to-gdp-ratio',
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: '%',
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [
                    {
                        x: Date.UTC(2000, 2, 24),
                        title: '2000', text: 'Dot-com Bubble'
                    },
                    {
                        x: Date.UTC(2007, 9, 12),
                        title: '2007', text: 'Housing Bubble'
                    }
                ],
                onSeries: 'wilshire-to-gdp-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart');
        });

    $.getJSON('/data-equities-gdp-ratio/', function (data) { // Variable heisst data


        var mean = findAverage(hcFormat(data));

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Total value of public and private corporate equities / GDP Ratio',
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
                    count: 30,
                    text: '30y'
                }, {
                    type: 'year',
                    count: 50,
                    text: '50y'
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
                labels: { format: '{value} %' },
                title: {
                    text: 'Equities/GDP'
                },
                floor: 25,
                type: 'linear',
                plotLines: [{
                    value: mean,
                    dashStyle: 'shortdash',
                    width: 1.5,
                    label: {
                        text: 'MEAN'
                    }
                }],
            },

            series: [{
                name: 'Total value of public and private equities/GDP',
                data: hcFormat(data),
                id: 'equities-to-gdp-ratio',
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: '%',
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
                        x: Date.UTC(2000, 0, 1),
                        title: '1999', text: 'Dot-com Bubble'
                    },
                    {
                        x: Date.UTC(2007, 6, 1),
                        title: '2007', text: 'Housing Bubble'
                    }
                ],
                onSeries: 'equities-to-gdp-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart2');
        });

    $.getJSON('/data-dow-gdp-ratio/', function (data) { // Variable heisst data




        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Dow Jones / GDP Ratio',
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
                    text: 'DOW/GDP'
                },
            },

            series: [{
                name: 'DOW/GDP',
                data: hcFormat(data),
                color: 'blue',
                id: 'dow-to-gdp-ratio',
                tooltip: {
                    valueDecimals: 3
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [{
                    x: Date.UTC(1929, 7, 31),
                    title: '1929', text: 'Stock market crash of 1929'
                },
                {
                    x: Date.UTC(1999, 11, 27),
                    title: '1999', text: 'Dot-com Bubble'
                },
                {
                    x: Date.UTC(2007, 9, 29),
                    title: '2007', text: "Housing Bubble"
                }
                ],
                onSeries: 'dow-to-gdp-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart3');
        });

    $.getJSON('/data-sp500-gdp-ratio/', function (data) { // Variable heisst data




        $('#chart4').highcharts('StockChart', {

            title: {
                text: 'SP500 / GDP Ratio',
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
                    text: 'SP500/GDP'
                },
            },

            series: [{
                name: 'SP500/GDP',
                data: hcFormat(data),
                color: 'red',
                id: 'sp500-to-gdp-ratio',
                tooltip: {
                    valueDecimals: 3
                },
                dataGrouping: {
                    enabled: true
                }
            },
            {
                type: 'flags',
                name: 'Flags on series',
                data: [{
                    x: Date.UTC(1929, 7, 31),
                    title: '1929', text: 'Stock market crash of 1929'
                },
                {
                    x: Date.UTC(1999, 11, 27),
                    title: '1999', text: 'Dotom Bubble'
                },
                {
                    x: Date.UTC(2007, 9, 29),
                    title: '2007', text: 'Housing Bubble'
                }
                ],
                onSeries: 'sp500-to-gdp-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart4');
        });

    // fifth chart S&P 500 vs. GDP:

    var seriesOptions = [],
        seriesCounter = 0,
        urls = ['/data-sp500-since-1871/', '/data-gdp/'];
    names = ['S&P 500', 'GDP'];
    colors = ['red', 'black'];

    function createChart() {

        $('#chart5').highcharts('StockChart', {
            title: {
                text: 'SP500 vs. GDP',
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
                dataGrouping: {
                    enabled: false
                },
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
                handleError('chart5');
            });
    });

});
