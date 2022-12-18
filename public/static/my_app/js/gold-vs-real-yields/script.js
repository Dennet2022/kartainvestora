
var seriesOptions = [],
    seriesCounter = 0,
    urls = ['/data-gold-since-1792/', '/data-real-yield/'];
names = ['Gold Price', 'Real 10-Year Treasury Yield'];
colors = ['gold', 'black'];

function createChart() {

    $('#chart1').highcharts('StockChart', {

        title: {
            text: 'Gold vs. (inverted) Real 10-Year Treasury Yield',
        },

        rangeSelector: {
            buttons: [{
                type: 'year',
                count: 3,
                text: '3y'
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
                count: 15,
                text: '15y'
            }, {
                type: 'year',
                count: 20,
                text: '20y'
            }, {
                type: 'all',
                text: 'All'
            }],
            inputEnabled: true,
            selected: 0
        },

        credits: {
            text: 'Longtermtrends.net',
            href: 'http://www.longtermtrends.net'
        },


        yAxis: [
            {
                title: { text: 'Gold', },
                opposite: false,
                labels: { format: '{value} $' },
                reversed: false,
            },
            {
                labels: { format: '{value} %' },
                title: { text: 'Real Yield (inverted)' },
                reversed: true,
            },
        ],

        xAxis: {
            ordinal: false
        },

        plotOptions: {
            series: {
                // compare: 'percent',
                showInNavigator: true
            }
        },

        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
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

        const name = names[k];
        seriesOptions[k] = {
            data: hcFormat(data),
            name: name,
            color: colors[k],
            id: urls[k],
            yAxis: name === 'Gold Price' ? 0 : 1,
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



var seriesOptions2 = [],
    seriesCounter2 = 0,
    urls2 = ['/data-gold-since-1792/', '/data-real-interest-rate/', '/data-real-10-year-yield/',];
names2 = ['Gold Price', 'Real 1-Year Treasury Yield', 'Real 10-Year Treasury Yield'];
colors2 = ['gold', 'grey', 'black'];

function createChart2() {

    $('#chart2').highcharts('StockChart', {

        title: {
            text: 'Gold vs. (inverted) Real Yields',
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
                count: 15,
                text: '15y'
            }, {
                type: 'year',
                count: 20,
                text: '20y'
            }, {
                type: 'year',
                count: 50,
                text: '50y'
            }, {
                type: 'year',
                count: 100,
                text: '100y'
            }, {
                type: 'year',
                count: 150,
                text: '150y'
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


        yAxis: [
            {
                title: { text: 'Gold (log)', },
                opposite: false,
                labels: { format: '{value} $' },
                reversed: false,
                type: 'logarithmic',
                gridLineWidth: 0,
            },
            {
                labels: { format: '{value} %' },
                title: { text: 'Real Yield (inverted)' },
                reversed: true,
            },
        ],

        xAxis: {
            ordinal: false
        },

        plotOptions: {
            series: {
                // compare: 'percent',
                showInNavigator: true
            }
        },

        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
            valueDecimals: 2,
            dataGrouping: {
                enabled: false
            },
            split: true
        },

        series: seriesOptions2
    });
}

$.each(urls2, function (k, url) {

    $.getJSON(url, function (data) {

        const name = names2[k];
        seriesOptions2[k] = {
            data: hcFormat(data),
            name: name,
            color: colors2[k],
            id: urls2[k],
            yAxis: name === 'Gold Price' ? 0 : 1,
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
