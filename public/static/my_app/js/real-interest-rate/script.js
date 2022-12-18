$(function () {

    var seriesOptions = [],
        seriesCounter = 0,
        urls = ['/data-us01y/', '/data-inflation/', '/data-real-interest-rate/',];
    names = ['Nominal Interest Rate', 'Inflation Rate', 'Real Interest Rate'];
    colors = ['black', 'red', 'blue'];


    $(function () {
        function createChart() {

            $('#chart1').highcharts('StockChart', {

                title: {
                    text: 'Nominal vs. Real Interest Rate vs. Inflation',
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
                    labels: { format: '{value} %' },
                    plotBands:
                        [
                            {
                                from: -20,
                                to: 0,
                                color: 'rgba(255, 0, 0, 0.1)'
                            }
                        ],
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

    });
});
