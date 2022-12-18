$(() => {
  $.getJSON('/data-us-home-price-cpi-ratio/').then(
    (data) => {
      const title = 'Case-Shiller Index / CPI';
      createChart({
        elId: 'chart1',
        title,
        years: [10, 30, 50, 80, 100],
        yLabel: 'Real US Home Prices',
        series: [
          {
            name: title,
            id: title,
            data: hcFormat(data),
            dataGrouping: { enabled: false }
          },
          {
            type: 'flags',
            data: [
              {
                x: Date.UTC(2007, 0),
                title: 'Housing Bubble',
                text:
                  'The Housing Bubble that led to the financial crisis of 2008/09',
              },
            ],
            onSeries: title,
          },
        ],
      });
    },
    () => {
      handleError('chart1');
    },
  );

  $.when($.getJSON('/data-us-home-price-index/'), $.getJSON('/data-cpi/')).then(
    (hpIndex, cpi) => {
      createChart({
        elId: 'chart2',
        title: 'Case-Shiller Index vs. CPI',
        years: [10, 30, 50, 80, 100],
        series: [
          {
            name: 'Case-Shiller Index (2000=100)',
            data: hcFormat(hpIndex[0]),
            color: 'red',
            dataGrouping: { enabled: false }
          },
          {
            name: 'CPI (1983=100)',
            data: hcFormat(cpi[0]),
            color: 'black',
          },
        ],
      });
    },
    () => {
      handleError('chart2');
    },
  );

  $.getJSON('/data-uk-house-price-cpi-ratio/').then(
    (data) => {
      const title = 'UK House Price Index / CPI';
      createChart({
        elId: 'chart3',
        title,
        years: [10, 30, 50, 80, 100],
        yLabel: 'Real UK House Prices',
        yMax: 1.4,
        series: [
          {
            name: title,
            id: title,
            data: hcFormat(data),
          },
          {
            type: 'flags',
            data: [
              {
                x: Date.UTC(1948),
                title: 'Post-war housing shortage',
                text:
                  'Prices rise during housing shortage caused by lack of building during the war and bomb damage',
              },
              {
                x: Date.UTC(1973),
                title: 'Barber Boom',
                text: 'Economic boom named after Chancellor Anthony Barber',
              },
              {
                x: Date.UTC(1989),
                title: 'Lawson Boom',
                text: 'Economic boom named after Chancellor Nigel Lawson',
              },
              {
                x: Date.UTC(2007, 8),
                title: 'Housing Bubble',
                text:
                  'Just like in the US, house prices rose to historic highs in the 2000s',
              },
            ],
            onSeries: title,
          },
        ],
      });
    },
    () => {
      handleError('chart3');
    },
  );

  $.when(
    $.getJSON('/data-uk-house-price-index/'),
    $.getJSON('/data-uk-cpi/'),
  ).then(
    (hpIndex, cpi) => {
      createChart({
        elId: 'chart4',
        title: 'UK House Price Index vs. CPI',
        years: [10, 30, 50, 80, 100],
        series: [
          {
            name: 'House Price Index (2015=100)',
            data: hcFormat(hpIndex[0]),
            color: 'red',
          },
          {
            name: 'CPI (2015=100)',
            data: hcFormat(cpi[0]),
            color: 'black',
          },
        ],
      });
    },
    () => {
      handleError('chart4');
    },
  );
});
