var seriesOptions = [],
    seriesCounter = 0,
    urls = ['/data-ethereum/', '/data-bitcoin/',];
names = ['Ether', 'Bitcoin'];
colors = ['black', 'gold'];

$(function () {
    $.getJSON('/data-ethereum-to-bitcoin-ratio/', function (data) {


        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'Ether / Bitcoin Ratio',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'ytd',
                        text: 'YTD'
                    },
                    {
                        type: 'year',
                        count: 1,
                        text: '1y'
                    }, {
                        type: 'year',
                        count: 2,
                        text: '2y'
                    }, {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
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
                title: {
                    text: 'Ether/Bitcoin'
                },
                // type: 'logarithmic',
                // min: 0.00008
            },


            series: [{
                name: 'Ether / Bitcoin Ratio',
                data: hcFormat(data),
                id: 'ether-bitcoin-ratio',
                tooltip: {
                    valueDecimals: 4
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
                        x: Date.UTC(2017, 5, 12),
                        title: '2017',
                        text: 'Ether peaks at 0.1485 BTC'
                    }
                ],
                onSeries: 'ether-bitcoin-ratio',
                shape: 'squarepin',
                includeInDataExport: false
            },
            ]
        });
    })
        .fail(function () {
            handleError('chart1');
        });


    function createChart() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Ether vs. Bitcoin',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'ytd',
                        text: 'YTD'
                    },
                    {
                        type: 'year',
                        count: 1,
                        text: '1y'
                    }, {
                        type: 'year',
                        count: 2,
                        text: '2y'
                    }, {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
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
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}$</b> ({point.change}%)<br/>',
                valueDecimals: 2,
                dataGrouping: { enabled: false },
                split: true
            },

            series: [
                ...seriesOptions,
                // {
                //   type: 'flags',
                //   name: 'Bitcoin peaks',
                //   data: [{
                //           x: Date.UTC(2011, 5, 8),
                //           title: '2011',
                //           text: 'Bitcoin peaks at $29.60'
                //       },
                //       {
                //           x: Date.UTC(2013, 11, 4),
                //           title: '2013',
                //           text: 'Bitcoin peaks at $230.00'
                //
                //       },
                //       {
                //           x: Date.UTC(2017, 11, 16),
                //           title: '2017',
                //           text: 'Bitcoin peaks at $19,345.49'
                //       }
                //   ],
                //   onSeries: urls[0],
                //   shape: 'squarepin',
                //   includeInDataExport: false
                //   },{
                //   type: 'flags',
                //   name: 'Gold peaks',
                //   data: [
                //     {x : Date.UTC(1980, 0, 15), title : '1980'},
                //     {x : Date.UTC(2011, 10, 15), title : '2011'},
                //     // {x : Date.UTC(2020, 7, 7), title : '2020'}
                //
                //   ],
                //   onSeries: urls[1],
                //   shape: 'squarepin',
                //   includeInDataExport: false
                //   },
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
                handleError('chart2');
            });
    });
});
