// $('#myModal').modal('show');

$(function () {

    $.getJSON('/data-wilshire-us-large-cap-growth-vs-value/', function (data) {


        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'Wilshire Growth/Value',
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
                title: {
                    text: 'Growth/Value'
                },
            },


            series: [{
                name: 'Growth/Value Ratio',
                data: hcFormat(data),
                id: 'wilshire-us-large-cap-growth-vs-value',
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
                data: [
                    { x: Date.UTC(2000, 2, 9), title: '2000', text: 'Dot-com Bubble' },
                ],
                onSeries: 'wilshire-us-large-cap-growth-vs-value',
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
        urls = ['/data-wilshire-us-large-cap-growth/', '/data-wilshire-us-mid-cap-growth/', '/data-wilshire-us-small-cap-growth/', '/data-wilshire-us-large-cap-value/', '/data-wilshire-us-mid-cap-value/', '/data-wilshire-us-small-cap-value/'];
    names = ['Wilshire US Large-Cap Growth', 'Wilshire US Mid-Cap Growth', 'Wilshire US Small-Cap Growth', 'Wilshire US Large-Cap Value', 'Wilshire US Mid-Cap Value', 'Wilshire US Small-Cap Value',];
    colors = ['rgb(0,0,0)', 'rgb(47,79,79)', 'rgb(105,105,105)', 'rgb(255,0,0)', 'rgb(250,128,114)', 'rgb(255,160,122)']

    function createChart() {

        $('#chart2').highcharts('StockChart', {

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
                handleError('chart2');
            });
    });

});
