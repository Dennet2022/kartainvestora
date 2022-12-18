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
  $.getJSON('/data-dividend-yield/', function (data) { // Variable heisst data

    var mean = findAverage(hcFormat(data));


    $('#chart').highcharts('StockChart', {

      title: {
        text: 'S&P 500 Dividend Yield (Inverted, logarithmic)',
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
        inputEnabled: true,
        selected: 5 // all
      },

      credits: {
        text: 'Longtermtrends.net',
        href: 'http://www.longtermtrends.net'
      },

      xAxis: {
        ordinal: false
      },

      yAxis: {
        min: 1,
        labels: { formatter: function () { return this.value + "%"; } },
        gridLineWidth: 0,
        reversed: true,
        title: { text: 'Dividend Yield (inverted)' },
        min: 0.9,
        type: 'logarithmic',
        plotLines: [
          {
            value: mean,
            dashStyle: 'shortdash',
            width: 1.5,
            label: { text: 'MEAN' }
          },
          {
            value: mean / 2,
            dashStyle: 'shortdash',
            width: 1,
            label: {
              text: '-50%'
            }
          }, {
            value: mean * 1.5,
            dashStyle: 'shortdash',
            width: 1,
            label: {
              text: '+50%'
            }
          }, {
            value: mean * 2,
            dashStyle: 'shortdash',
            width: 1,
            label: {
              text: '+100%'
            }
          }],
        plotBands:
          [
            {
              from: 0.01,
              to: mean / 2,
              color: 'rgba(255, 0, 0, 0.2)',
            },
            {
              from: mean / 2,
              to: mean * 1.5,
              color: 'rgba(255, 0, 0, 0.1)',
            },
            {
              from: mean * 1.5,
              to: mean * 2,
              color: 'rgba(255, 255, 0, 0.1)',
            },
            {
              from: mean * 2,
              to: 100,
              color: 'rgba(0, 255, 0, 0.1)',
            }
          ],
      },
      series:
        [
          {
            name: 'Dividend Yield',
            data: hcFormat(data),
            id: 'dividend-yield',
            tooltip: { valueDecimals: 2, pointFormat: '{series.name}</span>: <b>{point.y}%</b><br/>', },
            dataGrouping: { enabled: false }
          },
          {
            type: 'flags',
            name: 'Flags on series',
            data: [
              { x: Date.UTC(1929, 8, 30), title: '1929', text: 'Stock market crash of 1929' },
              { x: Date.UTC(2000, 8, 30), title: '2000', text: 'Dot-com Bubble' },
            ],
            onSeries: 'dividend-yield',
            shape: 'squarepin',
            includeInDataExport: false
          },
        ]
    });
  })
    .fail(function () {
      handleError('chart');
    });

});
