$('#unavailable').modal('show');
Cookies.set('modalAppear', 'disabled', { expires: 1 });

// $(function () {
//
//     seriesOptions = [];
//     var seriesCounter = 0;
//     var urls = ['/data-gold/', '/data-silver/', '/data-mining-stocks/', '/data-xau/'];
//     var names = ['Gold', 'Silver', 'BGMI', 'XAU'];
//     var colors = ['gold', 'silver', 'black', 'blue'];
//
//
//     $.getJSON('/data-mining-stocks-to-gold-ratio/', function (data) { // Variable heisst data
//
//         $('#chart2').highcharts('StockChart', {
//
//             title: {
//                 text: 'BGMI / Gold Ratio',
//             },
//
//             rangeSelector: {
//                 buttons: [{
//                     type: 'year',
//                     count: 1,
//                     text: '1y'
//                 }, {
//                     type: 'year',
//                     count: 5,
//                     text: '5y'
//                 }, {
//                     type: 'year',
//                     count: 10,
//                     text: '10y'
//                 }, {
//                     type: 'year',
//                     count: 30,
//                     text: '30y'
//                 }, {
//                     type: 'all',
//                     text: 'All'
//                 }],
//                 inputEnabled: true,
//                 selected: 4 // all
//             },
//
//             credits: {
//                 text: 'Longtermtrends.net',
//                 href: 'http://www.longtermtrends.net'
//             },
//
//             xAxis: {
//                 ordinal: false
//             },
//
//             yAxis: {
//                 title: { text: 'BGMI/Gold' },
//             },
//
//             series:
//                 [
//                     {
//                         name: 'BGMI/Gold',
//                         data: hcFormat(data),
//                         id: 'bgmi-gold-ratio',
//                         color: 'black',
//                         tooltip: { valueDecimals: 2 },
//                         dataGrouping: { enabled: true }
//                     }
//                 ]
//         });
//     })
//         .fail(function () {
//             handleError('chart2');
//         });
//
//     $.getJSON('/data-mining-stocks-to-gold-ratio2/', function (data) { // Variable heisst data
//
//         $('#chart4').highcharts('StockChart', {
//
//             title: {
//                 text: 'BGMI&XAU / Gold Ratio',
//             },
//
//             rangeSelector: {
//                 buttons: [{
//                     type: 'year',
//                     count: 1,
//                     text: '1y'
//                 }, {
//                     type: 'year',
//                     count: 5,
//                     text: '5y'
//                 }, {
//                     type: 'year',
//                     count: 10,
//                     text: '10y'
//                 }, {
//                     type: 'year',
//                     count: 30,
//                     text: '30y'
//                 }, {
//                     type: 'all',
//                     text: 'All'
//                 }],
//                 inputEnabled: true,
//                 selected: 4 // all
//             },
//
//             credits: {
//                 text: 'Longtermtrends.net',
//                 href: 'http://www.longtermtrends.net'
//             },
//
//             xAxis: {
//                 ordinal: false,
//                 plotLines:
//                     [{
//                         value: Date.UTC(2005, 8, 19),
//                         color: 'blue',
//                         dashStyle: 'shortdash',
//                         width: 1,
//                         label: { text: 'XAU data' }
//                     }],
//             },
//
//             yAxis: {
//                 title: { text: 'BGMI&XAU / Gold' },
//
//             },
//
//
//             series:
//                 [
//                     {
//                         name: 'BGMI&XAU / Gold',
//                         data: hcFormat(data),
//                         id: 'xau-gold-ratio',
//                         color: 'blue',
//                         tooltip: { valueDecimals: 2 },
//                         dataGrouping: { enabled: true }
//                     }
//                 ]
//         });
//     })
//         .fail(function () {
//             handleError('chart4');
//         });
//
//     $.getJSON('/data-xau-to-gold-ratio/', function (data) { // Variable heisst data
//
//
//
//         $('#chart3').highcharts('StockChart', {
//
//             title: {
//                 text: 'XAU / Gold Ratio',
//             },
//
//             rangeSelector: {
//                 buttons: [{
//                     type: 'year',
//                     count: 1,
//                     text: '1y'
//                 }, {
//                     type: 'year',
//                     count: 5,
//                     text: '5y'
//                 }, {
//                     type: 'year',
//                     count: 10,
//                     text: '10y'
//                 }, {
//                     type: 'year',
//                     count: 30,
//                     text: '30y'
//                 }, {
//                     type: 'all',
//                     text: 'All'
//                 }],
//                 inputEnabled: true,
//                 selected: 4 // all
//             },
//
//             credits: {
//                 text: 'Longtermtrends.net',
//                 href: 'http://www.longtermtrends.net'
//             },
//
//             xAxis: {
//                 ordinal: false
//             },
//
//             yAxis: {
//                 title: { text: 'XAU/Gold' }
//             },
//
//
//             series:
//                 [
//                     {
//                         name: 'XAU/Gold',
//                         data: hcFormat(data),
//                         id: 'xau-gold-ratio',
//                         color: 'blue',
//                         tooltip: { valueDecimals: 2 },
//                         dataGrouping: { enabled: true }
//                     }
//                 ]
//         });
//     })
//         .fail(function () {
//             handleError('chart3');
//         });
//
//     function createChart() {
//
//         $('#chart').highcharts('StockChart', {
//
//             title: {
//                 text: 'BGMI vs. XAU vs. Gold vs. Silver',
//             },
//             rangeSelector: {
//                 buttons: [{
//                     type: 'year',
//                     count: 1,
//                     text: '1y'
//                 }, {
//                     type: 'year',
//                     count: 5,
//                     text: '5y'
//                 }, {
//                     type: 'year',
//                     count: 10,
//                     text: '10y'
//                 }, {
//                     type: 'year',
//                     count: 30,
//                     text: '30y'
//                 }, {
//                     type: 'all',
//                     text: 'All'
//                 }],
//                 // inputEnabled: true,
//                 selected: 3 // 30 years
//             },
//
//             credits: {
//                 text: 'Longtermtrends.net',
//                 href: 'http://www.longtermtrends.net'
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
//             // xAxis: {
//             //       plotLines: [{
//             //         color: 'red', // Color value
//             //         dashStyle: 'longdashdot', // Style of the plot line. Default to solid
//             //         value: Date.UTC(2008, 5, 6), // Value of where the line will appear
//             //         width: 2 // Width of the line
//             //       }]
//             // },
//
//             plotOptions: {
//                 series: {
//                     compare: 'percent',
//                     showInNavigator: true
//                 }
//             },
//
//             tooltip: {
//                 pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
//                 valueDecimals: 2,
//                 dataGrouping: { enabled: false },
//                 split: true
//             },
//
//             series: seriesOptions
//         });
//     }
//
//     $.each(urls, function (k, url) {
//
//         $.getJSON(url, function (data) {
//
//
//             seriesOptions[k] = {
//                 data: hcFormat(data),
//                 name: names[k],
//                 color: colors[k],
//                 id: urls[k]
//             };
//
//             // As we're loading the data asynchronously, we don't know what order it will arrive. So
//             // we keep a counter and create the chart when all the data is loaded.
//             seriesCounter += 1;
//
//             if (seriesCounter === urls.length) {
//                 // build flag
//                 // seriesOptions.push({
//                 //     'type': 'flags',
//                 //     'data': [{x : Date.UTC(2008, 6, 18), title : '2008', text : 'Until 2008 the mining stocks and the metals performed similarly.'}],
//                 //     'shape': 'squarepin',
//                 //     'onSeries': '/data-mining-stocks/',
//                 // });
//                 createChart();
//             }
//         })
//             .fail(function () {
//                 handleError('chart');
//             });
//     });
//
// });
