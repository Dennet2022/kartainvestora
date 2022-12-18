var seriesOptions = [],
    seriesCounter = 0,
    urls = ['/data-sp500-since-1896/', '/data-dow-jones/', '/data-gold2/', '/data-silver2/'];
names = ['S&P 500', 'Dow Jones', 'Gold', 'Silver'];
colors = ['red', 'blue', 'gold', 'silver'];

// American Stock Indices (converted into US Dollars)
var seriesOptions2 = [],
    seriesCounter2 = 0,
    urls2 = ['/data-sp500-total-return/', '/data-sp500-since-1896/', '/data-dow-jones/', '/data-gold2/', '/data-silver2/'];
names2 = ['Total Return Index', 'S&P 500', 'Dow Jones', 'Gold', 'Silver'];
colors2 = ['black', 'red', 'blue', 'gold', 'silver'];

$(function () {
    function createChart() {

        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'SP500 vs. Dow Jones vs. Gold vs. Silver',
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
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
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
                handleError('chart1');
            });
    });

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'Total Return Stock Index vs. Gold & Silver',
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
                    count: 80,
                    text: '80y'
                }, {
                    type: 'year',
                    count: 100,
                    text: '100y'
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
                plotLines:
                    [{
                        value: Date.UTC(1978, 5, 29),
                        color: 'black',
                        dashStyle: 'shortdash',
                        width: 1,
                        label: { text: 'Wilshire Large-Cap data' }
                    }],
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
