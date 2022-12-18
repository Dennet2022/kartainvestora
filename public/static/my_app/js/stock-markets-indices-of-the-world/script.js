$(function () {

    // American Stock Indices (converted into US Dollars)
    var seriesOptions2 = [],
        seriesCounter2 = 0,
        urls2 = [
            '/data-sp500-since-1991/',
            '/data-tsx-in-dollar/',
            '/data-ipc-in-dollar/',
        ];

    names2 = [
        'US S&P 500',
        'Canadian TSX',
        'Mexican IPC',
    ];

    colors2 = [
        'rgb(60, 59, 110)',
        'rgb(255,0,0)',
        'rgb(0, 107, 71)',
    ];

    var seriesOptions2b = [],
        seriesCounter2b = 0,
        urls2b = [
            '/data-bovespa-in-dollar/',
            '/data-ipsa-in-dollar/',
            '/data-mrv-in-dollar/',
        ];

    names2b = [
        'Brazilian BOVESPA',
        'Chilenian IPSA',
        'Argentinian Merval',
    ];

    colors2b = [
        'rgb(0, 156, 59)',
        'rgb(213, 43, 30)',
        'rgb(116, 172, 223)',
    ];

    // third chart. Major Asian Stock Indices (converted into US Dollars)
    var seriesOptions3 = [],
        seriesCounter3 = 0,
        urls3 = [
            '/data-shanghai-composite-in-dollar/',
            '/data-nikkei-225-in-dollar/',
            '/data-sensex-30-in-dollar/',
        ];

    names3 = [
        'Chinese Shanghai Composite',
        'Japanese Nikkei 225',
        'Indian SENSEX 30',
    ];

    colors3 = [
        'rgb(255, 223, 0)',
        'rgb(188, 0, 45)',
        'rgb(80,158,47)',
    ];


    // third chart. Major Asian Stock Indices (converted into US Dollars)
    var seriesOptions3b = [],
        seriesCounter3b = 0,
        urls3b = [
            '/data-kospi-in-dollar/',
            '/data-klci-in-dollar/',
            '/data-jci-in-dollar/',
            '/data-psei-in-dollar/',
        ];

    names3b = [
        'South Korean KOSPI',
        'Malaysian KLCI',
        'Indonesian JCI',
        'Philippines PSEi',
    ];

    colors3b = [
        'rgb(0, 0, 0)',
        'rgb(255, 0, 0)',
        'rgb(0, 255, 0)',
        'rgb(0, 0, 255)',
    ];

    // 4th chart. Other Asian Stock Indices (converted into US Dollars)
    var seriesOptions4 = [],
        seriesCounter4 = 0,
        urls4 = [
            // '/data-shanghai-composite-in-dollar/',
            // '/data-nikkei-225-in-dollar/',
            '/data-set-in-dollar/',
            '/data-hang-seng-in-dollar/',
            // '/data-kospi-in-dollar/',
            // '/data-sensex-30-in-dollar/',
            '/data-straits-in-dollar/',
            // '/data-klci-in-dollar/',
            // '/data-jci-in-dollar/',
            '/data-twse-in-dollar/',
            // '/data-psei-in-dollar/',
        ];

    names4 = [
        // 'Shanghai Composite',
        // 'Nikkei 225',
        'Thai SET',
        'Hang Seng Index',
        // 'South Korean KOSPI',
        // 'Indian SENSEX 30',
        'Singaporean Straits',
        // 'Malaysian KLCI',
        // 'Indonesian JCI',
        'Taiwanese TAIEX',
        // 'Philippines PSEi',
    ];

    colors4 = [
        'rgb(0, 0, 0)',
        'rgb(255, 0, 0)',
        'rgb(0, 255, 0)',
        'rgb(0, 0, 255)',
        'rgb(128, 0, 128)',
        'rgb(0, 255, 255)',
        // 'rgb(255, 0, 255)',
        // 'rgb(192, 192, 192)',
        // 'rgb(255,165,0)',
        // 'rgb(250,128,114)',
        // 'rgb(173,255,47)',
        // 'rgb(255,20,147)',
        // 'rgb(47, 79, 79)',
        // 'rgb(176,196,222)',
        // 'rgb(0, 0, 128)',
        // 'rgb(139, 69, 19)',
        // 'rgb(127, 255, 212)',
    ];

    // 4th chart. Other Asian Stock Indices (converted into US Dollars)
    var seriesOptions4b = [],
        seriesCounter4b = 0,
        urls4b = [
            // '/data-shanghai-composite-in-dollar/',
            // '/data-nikkei-225-in-dollar/',
            '/data-aor-in-dollar/',
            // '/data-kospi-in-dollar/',
            // '/data-sensex-30-in-dollar/',
            '/data-nz50-in-dollar/',
            // '/data-psei-in-dollar/',
        ];

    names4b = [
        // 'Shanghai Composite',
        // 'Nikkei 225',
        'Australian AOR',
        'New Zealand NZX 50',
        // 'Malaysian KLCI',
    ];


    // 5th chart. European Indices (converted into US Dollars)
    var seriesOptions5 = [],
        seriesCounter5 = 0,
        urls5 = [
            // '/data-sp500-since-1991/',
            '/data-dax-in-dollar/',
            '/data-uk100-in-dollar/',
            '/data-cac-in-dollar/',
        ];

    names5 = [
        // 'USA S&P 500',
        'German DAX',
        'British UK100',
        // 'Canadian TSX',
        // 'Shanghai Composite',
        // 'Nikkei 225',

        // 'Australian ASX 200',
        // 'Thailand SET',
        'French CAC',
        // 'Hang Seng Index',
        // 'South Korean KOSPI',
        // 'Brasilian BOVESPA',
        // 'Indian SENSEX 30',
        // 'Mexican IPC',
        // 'Singaporean Straits',
    ];

    colors5 = [
        'black',
        'red',
        'blue',
    ];

    // 5th chart. European Indices (converted into US Dollars)
    var seriesOptions5b = [],
        seriesCounter5b = 0,
        urls5b = [
            '/data-moex-in-dollar/',
            '/data-xu100-in-dollar/',
            '/data-ibex-in-dollar/',
            '/data-fmib-in-dollar/',
        ];

    names5b = [
        'Russian MOEX',
        'Turkish BIST',
        'Spanish IBEX',
        'Italian FMIB',
    ];

    colors5b = [
        'rgb(0, 0, 0)',
        'rgb(255, 0, 0)',
        'rgb(0, 255, 0)',
        'rgb(0, 0, 255)',
        'rgb(128, 0, 128)',
        'rgb(0, 255, 255)',
        'rgb(255, 0, 255)',
        // 'rgb(192, 192, 192)',
        // 'rgb(255,165,0)',
        // 'rgb(250,128,114)',
        // 'rgb(173,255,47)',
        // 'rgb(255,20,147)',
        // 'rgb(47, 79, 79)',
        // 'rgb(176,196,222)',
        // 'rgb(0, 0, 128)',
        // 'rgb(139, 69, 19)',
        // 'rgb(127, 255, 212)',
    ];

    // 6th chart. More European Indices (converted into US Dollars)
    var seriesOptions6 = [],
        seriesCounter6 = 0,
        urls6 = [
            '/data-smi-in-dollar/',
            '/data-oseax-in-dollar/',
            '/data-omsx-in-dollar/',
            '/data-bel20-in-dollar/',
            '/data-aex-in-dollar/',
            // '/data-sp500-since-1991/',
            // '/data-dax-in-dollar/',
            // '/data-uk100-in-dollar/',
            // '/data-tsx-in-dollar/',
            // '/data-shanghai-composite-in-dollar/',
            // '/data-nikkei-225-in-dollar/',
            // '/data-smi-in-dollar/',
            // '/data-aor-in-dollar/',
            // '/data-set-in-dollar/',
            // '/data-moex-in-dollar/',
            // '/data-xu100-in-dollar/',
            // '/data-hang-seng-in-dollar/',
            // '/data-kospi-in-dollar/',
            // '/data-bovespa-in-dollar/',
            // '/data-sensex-30-in-dollar/',
            // '/data-ipc-in-dollar/',
            // '/data-straits-in-dollar/',
        ];

    names6 = [
        'Swiss SMI',
        'Norwegean OSEAX',
        'Swedish OMXS',
        'Belgian BEL20',
        'Dutch AEX',
        // 'USA S&P 500',
        // 'German DAX',
        // 'UK FTSE',
        // 'Canadian TSX',
        // 'Shanghai Composite',
        // 'Nikkei 225',
        // 'Swiss SMI',
        // 'Australian ASX 200',
        // 'Thailand SET',
        // 'Russian MOEX',
        // 'Turkish BIST',
        // 'Hang Seng Index',
        // 'South Korean KOSPI',
        // 'Brasilian BOVESPA',
        // 'Indian SENSEX 30',
        // 'Mexican IPC',
        // 'Singaporean Straits',
    ];

    colors6 = [
        'rgb(0, 0, 0)',
        'rgb(255, 0, 0)',
        'rgb(0, 255, 0)',
        'rgb(0, 0, 255)',
        'rgb(128, 0, 128)',
        'rgb(0, 255, 255)',
        'rgb(255, 0, 255)',
        'rgb(192, 192, 192)',
        'rgb(255,165,0)',
        'rgb(250,128,114)',
        'rgb(173,255,47)',
        // 'rgb(255,20,147)',
        // 'rgb(47, 79, 79)',
        // 'rgb(176,196,222)',
        // 'rgb(0, 0, 128)',
        // 'rgb(139, 69, 19)',
        // 'rgb(127, 255, 212)',
    ];

    // 6th chart. More European Indices (converted into US Dollars)
    var seriesOptions6b = [],
        seriesCounter6b = 0,
        urls6b = [
            '/data-wig20-in-dollar/',
            '/data-px-in-dollar/',
            '/data-bux-in-dollar/',
            '/data-psi20-in-dollar/',
            '/data-ath-in-dollar/',
            '/data-atx-in-dollar/',
            // '/data-sp500-since-1991/',
            // '/data-dax-in-dollar/',
            // '/data-uk100-in-dollar/',
            // '/data-tsx-in-dollar/',
            // '/data-shanghai-composite-in-dollar/',
            // '/data-nikkei-225-in-dollar/',
            // '/data-smi-in-dollar/',
            // '/data-aor-in-dollar/',
            // '/data-set-in-dollar/',
            // '/data-moex-in-dollar/',
            // '/data-xu100-in-dollar/',
            // '/data-hang-seng-in-dollar/',
            // '/data-kospi-in-dollar/',
            // '/data-bovespa-in-dollar/',
            // '/data-sensex-30-in-dollar/',
            // '/data-ipc-in-dollar/',
            // '/data-straits-in-dollar/',
        ];

    names6b = [
        'Polish WIG20',
        'Czech PX',
        'Hunarian BUX',
        'Portuguese PSI20',
        'Greek ATH',
        'Austrian ATX',
        // 'USA S&P 500',
        // 'German DAX',
        // 'UK FTSE',
        // 'Canadian TSX',
        // 'Shanghai Composite',
        // 'Nikkei 225',
        // 'Swiss SMI',
        // 'Australian ASX 200',
        // 'Thailand SET',
        // 'Russian MOEX',
        // 'Turkish BIST',
        // 'Hang Seng Index',
        // 'South Korean KOSPI',
        // 'Brasilian BOVESPA',
        // 'Indian SENSEX 30',
        // 'Mexican IPC',
        // 'Singaporean Straits',
    ];

    colors6b = [
        'rgb(0, 0, 0)',
        'rgb(255, 0, 0)',
        'rgb(0, 255, 0)',
        'rgb(0, 0, 255)',
        'rgb(128, 0, 128)',
        'rgb(0, 255, 255)',
        'rgb(255, 0, 255)',
        'rgb(192, 192, 192)',
        'rgb(255,165,0)',
        'rgb(250,128,114)',
        'rgb(173,255,47)',
        // 'rgb(255,20,147)',
        // 'rgb(47, 79, 79)',
        // 'rgb(176,196,222)',
        // 'rgb(0, 0, 128)',
        // 'rgb(139, 69, 19)',
        // 'rgb(127, 255, 212)',
    ];

    // 7th chart. Currency Trubled Nations (converted into US Dollars)
    // var seriesOptions7 = [],
    // seriesCounter7 = 0,
    // urls7 = [
    // // '/data-sp500-since-1991/',
    // // '/data-dax-in-dollar/',
    // // '/data-uk100-in-dollar/',
    // // '/data-tsx-in-dollar/',
    // // '/data-shanghai-composite-in-dollar/',
    // // '/data-nikkei-225-in-dollar/',
    // // '/data-smi-in-dollar/',
    // // '/data-aor-in-dollar/',
    // // '/data-set-in-dollar/',
    // // '/data-moex-in-dollar/',
    // // '/data-xu100-in-dollar/',
    // // '/data-hang-seng-in-dollar/',
    // // '/data-kospi-in-dollar/',
    // // '/data-bovespa-in-dollar/',
    // // '/data-sensex-30-in-dollar/',
    // // '/data-ipc-in-dollar/',
    // // '/data-straits-in-dollar/',
    // ];
    //
    // names7 = [
    // // 'USA S&P 500',
    // // 'German DAX',
    // // 'UK FTSE',
    // // 'Canadian TSX',
    // // 'Shanghai Composite',
    // // 'Nikkei 225',
    // // 'Swiss SMI',
    // // 'Australian ASX 200',
    // // 'Thailand SET',
    // // 'Russian MOEX',
    // // 'Turkish BIST',
    // // 'Hang Seng Index',
    // // 'South Korean KOSPI',
    // // 'Brasilian BOVESPA',
    // // 'Indian SENSEX 30',
    // // 'Mexican IPC',
    // // 'Singaporean Straits',
    // ];
    //
    // colors7 = [
    // // 'rgb(0, 0, 0)',
    // // 'rgb(255, 0, 0)',
    // // 'rgb(0, 255, 0)',
    // // 'rgb(0, 0, 255)',
    // // 'rgb(128, 0, 128)',
    // // 'rgb(0, 255, 255)',
    // // 'rgb(255, 0, 255)',
    // // 'rgb(192, 192, 192)',
    // // 'rgb(255,165,0)',
    // // 'rgb(250,128,114)',
    // // 'rgb(173,255,47)',
    // // 'rgb(255,20,147)',
    // // 'rgb(47, 79, 79)',
    // // 'rgb(176,196,222)',
    // // 'rgb(0, 0, 128)',
    // // 'rgb(139, 69, 19)',
    // // 'rgb(127, 255, 212)',
    // ];

    // function createChart() {
    //
    //     $('#chart1').highcharts('StockChart', {
    //
    //       rangeSelector : {
    //           buttons: [
    //             {
    //             				type: 'ytd',
    //             				text: 'YTD'
    //             			},
    //             {
    //                   type: 'year',
    //                   count: 1,
    //                   text: '1y'
    //               }, {
    //                   type: 'year',
    //                   count: 3,
    //                   text: '3y'
    //               }, {
    //                   type: 'year',
    //                   count: 5,
    //                   text: '5y'
    //               }, {
    //                   type: 'year',
    //                   count: 8,
    //                   text: '8y'
    //               }, {
    //                   type: 'year',
    //                   count: 13,
    //                   text: '13y'
    //               }, {
    //                   type: 'year',
    //                   count: 21,
    //                   text: '21y'
    //               }],
    //               // inputEnabled: true,
    //               selected : 4
    //           },
    //
    //         yAxis: {
    //             labels: {
    //                 formatter: function () {
    //                     return (this.value > 0 ? ' + ' : '') + this.value + '%';
    //                 }
    //             },
    //         },
    //
    //         xAxis: {
    //             ordinal: false
    //         },
    //
    //         plotOptions: {
    //             series: {
    //                 compare: 'percent',
    //                 showInNavigator: true
    //             }
    //         },
    //
    //         tooltip: {
    //             pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
    //             valueDecimals: 2,
    //             dataGrouping: {enabled: true},
    //             split: true
    //         },
    //
    //         series: seriesOptions
    //     });
    // }
    //
    // $.each(urls, function (k, url) {
    //
    //     $.getJSON(url, function (data) {
    //
    //
    //         seriesOptions[k] = {
    //             data: hcFormat(data),
    //             name: names[k],
    //             color: colors[k],
    //             id: urls[k]
    //         };
    //
    //
    //         seriesCounter += 1;
    //
    //         if (seriesCounter === urls.length) {
    //
    //             createChart();
    //         }
    //     })
    //     .fail(function() {
    //         handleError('chart1');
    //     });
    // });

    function createChart2() {

        $('#chart2').highcharts('StockChart', {

            title: {
                text: 'North American Indices (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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


    function createChart2b() {

        $('#chart2b').highcharts('StockChart', {

            title: {
                text: 'South American Indices (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

            series: seriesOptions2b
        });
    }

    $.each(urls2b, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions2b[k] = {
                data: hcFormat(data),
                name: names2b[k],
                color: colors2b[k],
                id: urls2b[k],
            };

            seriesCounter2b += 1;

            if (seriesCounter2b === urls2b.length) {

                createChart2b();
            }
        })
            .fail(function () {
                handleError('chart2b');
            });
    });

    function createChart3() {

        $('#chart3').highcharts('StockChart', {

            title: {
                text: 'Asian Indices #1 (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

            series: seriesOptions3
        });
    }

    $.each(urls3, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions3[k] = {
                data: hcFormat(data),
                name: names3[k],
                color: colors3[k],
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

    function createChart3b() {

        $('#chart3b').highcharts('StockChart', {

            title: {
                text: 'Asian Indices #2 (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

            series: seriesOptions3b
        });
    }

    $.each(urls3b, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions3b[k] = {
                data: hcFormat(data),
                name: names3b[k],
                // color: colors3b[k],
                id: urls3b[k],
            };

            seriesCounter3b += 1;

            if (seriesCounter3b === urls3b.length) {

                createChart3b();
            }
        })
            .fail(function () {
                handleError('chart3b');
            });
    });

    function createChart4() {

        $('#chart4').highcharts('StockChart', {

            title: {
                text: 'Asian Indices #3 (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

    function createChart4b() {

        $('#chart4b').highcharts('StockChart', {

            title: {
                text: 'Australia & NZ (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

            series: seriesOptions4b
        });
    }

    $.each(urls4b, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions4b[k] = {
                data: hcFormat(data),
                name: names4b[k],
                //color: colors4[k],
                id: urls4b[k],
            };

            seriesCounter4b += 1;

            if (seriesCounter4b === urls4b.length) {

                createChart4b();
            }
        })
            .fail(function () {
                handleError('chart4b');
            });
    });

    function createChart5() {

        $('#chart5').highcharts('StockChart', {

            title: {
                text: 'European Indices #1 (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

            series: seriesOptions5
        });
    }

    $.each(urls5, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions5[k] = {
                data: hcFormat(data),
                name: names5[k],
                color: colors5[k],
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

    function createChart5b() {

        $('#chart5b').highcharts('StockChart', {

            title: {
                text: 'European Indices #2 (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

            series: seriesOptions5b
        });
    }

    $.each(urls5b, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions5b[k] = {
                data: hcFormat(data),
                name: names5b[k],
                //color: colors5[k],
                id: urls5b[k],
            };

            seriesCounter5b += 1;

            if (seriesCounter5b === urls5b.length) {

                createChart5b();
            }
        })
            .fail(function () {
                handleError('chart5b');
            });
    });


    function createChart6() {

        $('#chart6').highcharts('StockChart', {

            title: {
                text: 'European Indices #3 (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

    function createChart6b() {

        $('#chart6b').highcharts('StockChart', {

            title: {
                text: 'European Indices #4 (in USD)',
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
                    }],
                // inputEnabled: true,
                selected: 4
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

            series: seriesOptions6b
        });
    }

    $.each(urls6b, function (k, url) {

        $.getJSON(url, function (data) {



            seriesOptions6b[k] = {
                data: hcFormat(data),
                name: names6b[k],
                //color: colors6[k],
                id: urls6b[k],
            };

            seriesCounter6b += 1;

            if (seriesCounter6b === urls6b.length) {

                createChart6b();
            }
        })
            .fail(function () {
                handleError('chart6b');
            });
    });

    //
    // function createChart7() {
    //
    //       $('#chart7').highcharts('StockChart', {
    //
    //         rangeSelector : {
    //             buttons: [
    //               {
    //               				type: 'ytd',
    //               				text: 'YTD'
    //               			},
    //               {
    //                     type: 'year',
    //                     count: 1,
    //                     text: '1y'
    //                 }, {
    //                     type: 'year',
    //                     count: 3,
    //                     text: '3y'
    //                 }, {
    //                     type: 'year',
    //                     count: 5,
    //                     text: '5y'
    //                 }, {
    //                     type: 'year',
    //                     count: 8,
    //                     text: '8y'
    //                 }, {
    //                     type: 'year',
    //                     count: 13,
    //                     text: '13y'
    //                 }, {
    //                     type: 'year',
    //                     count: 21,
    //                     text: '21y'
    //                 }],
    //                 // inputEnabled: true,
    //                 selected : 4
    //             },
    //
    //             yAxis: {
    //                 labels: {
    //                     formatter: function () {
    //                         return (this.value > 0 ? ' + ' : '') + this.value + '%';
    //                     }
    //                 },
    //             },
    //
    //             xAxis: {
    //                 ordinal: false
    //             },
    //
    //             plotOptions: {
    //                 series: {
    //                     compare: 'percent',
    //                     showInNavigator: true
    //                 }
    //             },
    //
    //           tooltip: {
    //               pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
    //               valueDecimals: 2,
    //               dataGrouping: {enabled: true},
    //               split: true
    //           },
    //
    //           series: seriesOptions7
    //       });
    //   }
    //
    //   $.each(urls7, function (k, url) {
    //
    //       $.getJSON(url, function (data) {
    //
    //
    //           seriesOptions7[k] = {
    //               data: hcFormat(data),
    //               name: names7[k],
    //               color: colors7[k],
    //               id: urls7[k],
    //           };
    //
    //           seriesCounter7 += 1;
    //
    //           if (seriesCounter7 === urls7.length) {
    //
    //               createChart7();
    //           }
    //       })
    //       .fail(function() {
    //           handleError('chart7');
    //       });
    //   });

});
