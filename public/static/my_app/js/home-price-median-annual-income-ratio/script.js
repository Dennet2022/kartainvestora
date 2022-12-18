$(() => {
  $.getJSON('/data-us-home-price-median-annual-income-ratio/').then(
    (data) => {
      const title = 'Home Price / Median Income Ratio';
      createChart({
        elId: 'chart1',
        title,
        yLabel: title,
        years: [10, 15, 30, 50, 70],
        selectedYear: 4,
        series: [
          {
            name: title,
            data: hcFormat(data),
            id: title,
            dataGrouping: { enabled: false }
          },
          {
            type: 'flags',
            data: [
              {
                x: Date.UTC(2005, 11),
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

  $.when(
    $.getJSON('/data-us-home-price'),
    $.getJSON('/data-us-median-household-income'),
  ).then(
    (hp, inc) => {
      createChart({
        elId: 'chart2',
        title: 'Case-Shiller Home Price Index vs. US Median Annual Income',
        years: [10, 15, 30, 50, 70],
        selectedYear: 4,
        series: [
          {
            name: 'Case-Shiller Home Price Index (* 1800$)',
            data: hcFormat(hp[0]),
            id: UK_HP_URL,
            color: 'red',
          },
          {
            name: 'Median Household Income ($)',
            data: hcFormat(inc[0]),
            color: 'black',
          },
        ],
      });
    },
    () => {
      handleError('chart2');
    },
  );

  $.getJSON('/data-uk-house-price-income-ratio/').then(
    (data) => {
      const title = 'UK House Price / Average Annual Income Ratio';
      createChart({
        elId: 'chart3',
        title,
        yLabel: 'House Price / Average Income',
        years: [10, 15, 30, 50, 80],
        selectedYear: 4,
        series: [
          {
            name: 'House Price / Average Income',
            id: title,
            data: hcFormat(data),
            dataGrouping: { enabled: false }
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
                x: Date.UTC(2007, 7),
                title: 'Housing Bubble',
                text:
                  'Just like in the US, house prices rose to historic heights in the 2000s',
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

  const UK_HP_URL = '/data-uk-house-price/';
  const UK_INCOME_URL = '/data-uk-income/';
  $.when($.getJSON(UK_HP_URL), $.getJSON(UK_INCOME_URL)).then(
    (hp, inc) => {
      createChart({
        elId: 'chart4',
        title: 'UK House Prices vs. Average Income',
        years: [10, 15, 30, 50, 70],
        selectedYear: 4,
        series: [
          {
            name: 'Average House Price (£)',
            data: hcFormat(hp[0]),
            id: UK_HP_URL,
            color: 'red',
          },
          {
            name: 'Average Annual Income (£)',
            data: hcFormat(inc[0]),
            color: 'black',
          },
          {
            type: 'flags',
            data: [{ x: Date.UTC(2007, 7), title: 'Housing Bubble' }],
            onSeries: UK_HP_URL,
          },
        ],
      });
    },
    () => {
      handleError('chart4');
    },
  );
});
