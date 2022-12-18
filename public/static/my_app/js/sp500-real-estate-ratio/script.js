$(() => {
  $.getJSON('/data-sp500-home-price-ratio/').then(
    (data) => {
      const label = 'S&P 500 / Home Price (log)';
      createChart({
        elId: 'chart1',
        title: 'S&P 500 Index / Case-Shiller Home Price Index (log)',
        yLabel: label,
        years: [10, 50, 70, 100],
        selectedYear: 3,
        series: [
          {
            name: label,
            data: hcFormat(data),
            id: label,
            dataGrouping: { enabled: false },
          },
          {
            type: 'flags',
            data: [
              {
                x: Date.UTC(1929, 7, 31),
                title: '1929',
                text: 'Stock market crash of 1929',
              },
              {
                x: Date.UTC(1999, 11, 27),
                title: '1999',
                text: 'Dot-com Bubble',
              },
              { x: Date.UTC(2007, 9, 29), title: '2007', text: 'Housing Bubble' },
            ],
            onSeries: label,
          },
        ],
      });
    },
    () => {
      handleError('chart1');
    },
  );

  $.when(
    $.getJSON('/data-sp500/'),
    $.getJSON('/data-us-home-price-index/'),
  ).then(
    (sp, hp) => {
      const hpLabel = 'Case-Shiller Home Price Index';
      createChart({
        elId: 'chart2',
        title: 'S&P 500 vs. Home Prices',
        years: [10, 50, 70, 100],
        selectedYear: 1,
        series: [
          { name: 'S&P 500', data: hcFormat(sp[0]), color: 'red' },
          { name: hpLabel, id: hpLabel, data: hcFormat(hp[0]), color: 'black' },
          {
            type: 'flags',
            name: 'Housing Bubble',
            data: [
              { x: Date.UTC(2006, 8, 15), title: '2006', text: 'Housing Bubble' },
            ],
            onSeries: hpLabel,
          },
        ],
      });
    },
    () => {
      handleError('chart2');
    },
  );
});
