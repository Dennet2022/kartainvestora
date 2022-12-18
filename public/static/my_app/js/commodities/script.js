$(function () {

    var seriesOptions = [],
        seriesCounter = 0,

        urls = [
            '/data-oda-gold/',
            '/data-oda-silver/',
            '/data-palladium/',
            '/data-platinum/',
        ];

    names = [
        'Gold',
        'Silver',
        'Paladium',
        'Platinum',
    ];

    colors = [
        'gold',
        'silver',
        'black'
    ];

    var seriesOptions2 = [],
        seriesCounter2 = 0,
        urls2 = [
            '/data-aluminum/',
            '/data-copper/',
            '/data-iron-ore/',
            '/data-lead/',
            '/data-nickel/',
            '/data-tin/',
            '/data-zinc/',
        ];

    names2 = [
        'Aluminum',
        'Copper',
        'Iron Ore',
        'Lead',
        'Nickel',
        'Tin',
        'Zinc',
    ];

    var seriesOptions3 = [],
        seriesCounter3 = 0,
        urls3 = [
            '/data-barley/',
            '/data-rice/',
            '/data-wheat/',
            '/data-oats/',
            '/data-soybeans/',
            '/data-soybean-meal/',
        ];

    names3 = [
        'Barley',
        'Rice',
        'Wheat',
        'Oats',
        'Soybeans',
        'Soybeans Meal',
    ];

    var seriesOptions4 = [],
        seriesCounter4 = 0,
        urls4 = [
            '/data-cattle-beef/',
            '/data-poultry-chicken/',
            '/data-pork/',
            '/data-lamb/',
            '/data-milk/',
        ];

    names4 = [
        'Cattle Beef',
        'Poultry Chicken',
        'Pork',
        'Lamb',
        'Milk',
    ];

    var seriesOptions5 = [],
        seriesCounter5 = 0,
        urls5 = [
            '/data-salmon/',
            '/data-shrimp/',
            '/data-wool/',
            '/data-cattle-hides/',
        ];

    names5 = [
        'Salmon',
        'Shrimp',
        'Wool',
        'Hides',
    ];

    var seriesOptions6 = [],
        seriesCounter6 = 0,
        urls6 = [
            '/data-WTI-crude-oil/',
            '/data-germany-natural-gas/',
            '/data-coal/',
            '/data-uranium/',
        ];

    names6 = [
        'Crude Oil',
        'Natural Gas',
        'Coal',
        'Uranium',
    ];

    var seriesOptions7 = [],
        seriesCounter7 = 0,
        urls7 = [
            '/data-arabica-coffee/',
            '/data-robusta-coffee/',
            '/data-cocoa-beans/',
            '/data-tea/',
            '/data-sugar/',
        ];

    names7 = [
        'Ariabica Coffee',
        'Robusta Coffee',
        'Cocoa Beans',
        'Tea',
        'Sugar',
    ];

    // colors7 = [
    // 'rgb(0, 0, 0)',
    // 'rgb(255, 0, 0)',
    // 'rgb(0, 255, 0)',
    // 'rgb(0, 0, 255)',
    // ];

    var seriesOptions8 = [],
        seriesCounter8 = 0,
        urls8 = [
            '/data-groundnuts/',
            '/data-oranges/',
            '/data-bananas/',
            '/data-tomatoes/',
        ];

    names8 = [
        'Groundnuts (Peanuts)',
        'Oranges',
        'Bananas',
        'Tomatoes (EUR)',
    ];

    var seriesOptions9 = [],
        seriesCounter9 = 0,
        urls9 = [
            '/data-rapseed-oil/',
            '/data-sunflower-oil/',
            '/data-olive-oil/',
            '/data-palm-oil/',
            '/data-soybean-oil/',
        ];

    names9 = [
        'Rapseed Oil',
        'Sunflower Oil',
        'Olive Oil',
        'Palm Oil',
        'Soybean Oil',
    ];

    var seriesOptions10 = [],
        seriesCounter10 = 0,
        urls10 = [
            '/data-hard-logs/',
            '/data-soft-logs/',
            '/data-soft-sawnwood/',
            '/data-hard-sawnwood/',
            '/data-rubber/',
            '/data-cotton/',
        ];

    names10 = [
        'Hard Logs',
        'Soft Logs',
        'Soft Sawnwood',
        'Hard Sawnwood',
        'Rubber',
        'Cotton',
    ];


    function createChart() {

        $('#chart1').highcharts('StockChart', {

            title: {
                text: 'Precious Metals',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
                selected: 5
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
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}$</b> ({point.change}%)<br/>',
                valueDecimals: 2,
                dataGrouping: { enabled: true },
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
                text: 'Base Metals',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                ordinal: false
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
                dataGrouping: { enabled: true },
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
                //color: colors2[k],
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

    function createChart3() {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Grain Prices',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                ordinal: false
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
                dataGrouping: { enabled: true },
                split: true
            },

            series: seriesOptions3
        });
    }

    $.each(urls3, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions3[k] = {
                data: hcFormat(data),
                name: names3[k],
                // color: colors3[k],
                id: urls3[k],
            };

            seriesCounter3 += 1;

            if (seriesCounter3 === urls3.length) {

                createChart3();
            }
        })
            .fail(function () {
                handleError('chart3');
            });
    });


    function createChart4() {

        $('#chart4').highcharts('StockChart', {

            title: {
                text: 'Farms and Fishery Prices #1',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                ordinal: false
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
                dataGrouping: { enabled: true },
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
                //color: colors4[k],
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

    function createChart5() {

        $('#chart5').highcharts('StockChart', {

            title: {
                text: 'Farms and Fishery Prices #2',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                ordinal: false
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
                dataGrouping: { enabled: true },
                split: true
            },

            series: seriesOptions5
        });
    }

    $.each(urls5, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions5[k] = {
                data: hcFormat(data),
                name: names5[k],
                //color: colors5[k],
                id: urls5[k],
            };

            seriesCounter5 += 1;

            if (seriesCounter5 === urls5.length) {

                createChart5();
            }
        })
            .fail(function () {
                handleError('chart5');
            });
    });

    function createChart6() {

        $('#chart6').highcharts('StockChart', {

            title: {
                text: 'Energy Prices',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                ordinal: false
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
                dataGrouping: { enabled: true },
                split: true
            },

            series: seriesOptions6
        });
    }

    $.each(urls6, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions6[k] = {
                data: hcFormat(data),
                name: names6[k],
                //color: colors6[k],
                id: urls6[k],
            };

            seriesCounter6 += 1;

            if (seriesCounter6 === urls6.length) {

                createChart6();
            }
        })
            .fail(function () {
                handleError('chart6');
            });
    });

    function createChart7() {

        $('#chart7').highcharts('StockChart', {

            title: {
                text: 'Agriculture Soft Prices',
            },
            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
                selected: 5
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
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}$</b> ({point.change}%)<br/>',
                valueDecimals: 2,
                dataGrouping: { enabled: true },
                split: true
            },

            series: seriesOptions7
        });
    }

    $.each(urls7, function (k, url) {

        $.getJSON(url, function (data) {


            seriesOptions7[k] = {
                data: hcFormat(data),
                name: names7[k],
                //color: colors7[k],
                id: urls7[k],
            };

            seriesCounter7 += 1;

            if (seriesCounter7 === urls7.length) {

                createChart7();
            }
        })
            .fail(function () {
                handleError('chart7');
            });
    });


    function createChart8() {

        $('#chart8').highcharts('StockChart', {

            title: {
                text: 'Fruits and Nuts',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                dataGrouping: { enabled: true },
                split: true
            },

            series: seriesOptions8
        });
    }

    $.each(urls8, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions8[k] = {
                data: hcFormat(data),
                name: names8[k],
                // color: colors8[k],
                id: urls8[k],
            };

            seriesCounter8 += 1;

            if (seriesCounter8 === urls8.length) {

                createChart8();
            }
        })
            .fail(function () {
                handleError('chart8');
            });
    });


    function createChart9() {

        $('#chart9').highcharts('StockChart', {

            title: {
                text: 'Vegetable Oil Prices',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                ordinal: false
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
                dataGrouping: { enabled: true },
                split: true
            },

            series: seriesOptions9
        });
    }

    $.each(urls9, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions9[k] = {
                data: hcFormat(data),
                name: names9[k],
                //color: colors9[k],
                id: urls9[k],
            };

            seriesCounter9 += 1;

            if (seriesCounter9 === urls9.length) {

                createChart9();
            }
        })
            .fail(function () {
                handleError('chart9');
            });
    });

    function createChart10() {

        $('#chart10').highcharts('StockChart', {

            title: {
                text: 'Fibres and Textiles',
            },

            rangeSelector: {
                buttons: [
                    {
                        type: 'year',
                        count: 3,
                        text: '3y'
                    }, {
                        type: 'year',
                        count: 5,
                        text: '5y'
                    }, {
                        type: 'year',
                        count: 8,
                        text: '8y'
                    }, {
                        type: 'year',
                        count: 13,
                        text: '13y'
                    }, {
                        type: 'year',
                        count: 21,
                        text: '21y'
                    }, {
                        type: 'year',
                        count: 34,
                        text: '34y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                // inputEnabled: true,
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
                ordinal: false
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
                dataGrouping: { enabled: true },
                split: true
            },

            series: seriesOptions10
        });
    }

    $.each(urls10, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions10[k] = {
                data: hcFormat(data),
                name: names10[k],
                //color: colors9[k],
                id: urls10[k],
            };

            seriesCounter10 += 1;

            if (seriesCounter10 === urls10.length) {

                createChart10();
            }
        })
            .fail(function () {
                handleError('chart9');
            });
    });

});
