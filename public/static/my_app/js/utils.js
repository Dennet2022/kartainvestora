/**
 * Creates a chart with the provided options.
 * Example usage:
 *
 * createChart({
 *   elId: 'chart1',
 *   title: 'UK house price index vs. consumer price inflation',
 *   yLabel: 'House Price Index vs. CPI',
 *   yMax: 1.4,
 *   compare: 'percent',
 *   years: [5, 10, 50, 100],
 *   selectedYear: 2,
 *   series: [
 *     {
 *       name: 'House price index (2015=100)',
 *       data: hcFormat(housePriceIndexData),
 *       color: 'red',
 *     },
 *   ],
 * });
 */
function createChart(options) {
  const plotOptions = {};
  const yLabels = {};

  // Set the rangeSelector buttons. Use the provided years array or a default one.
  let years = [10, 20, 30, 50, 100];
  if (options.years) years = options.years;
  const buttons = [];
  for (const y of years) {
    buttons.push({ type: 'year', count: y, text: `${y}y` });
  }
  buttons.push({ type: 'year', text: 'All' });

  // Set the series on the chart (data + optional flags) using the provided options.
  if (options.series) {
    const isMultipleSeries =
      options.series.filter((s) => s.type !== 'flags').length > 1;
    if (isMultipleSeries) {
      // When a chart has multiple series, compare them by their percentage
      // change not absolute values. Keep the default behaviour (show absolute values)
      // for single series charts.
      plotOptions.series = { compare: 'percent' };
      yLabels.formatter = function () {
        return (this.value > 0 ? ' +' : '') + this.value + '%';
      };
    }
    for (const s of options.series) {
      if (s.type === 'flags') {
        s.shape = 'squarepin';
        s.includeInDataExport = false;
      } else {
        s.tooltip = { valueDecimals: 2 };
        if (isMultipleSeries) {
          s.tooltip.pointFormat =
            '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>';
        }
      }
    }
  }
  Highcharts.stockChart(options.elId, {
    title: { text: options.title },
    rangeSelector: {
      buttons,
      inputEnabled: true,
      selected: options.selectedYear || 2,
    },
    credits: {
      text: 'Longtermtrends.net',
      href: 'http://www.longtermtrends.net',
    },
    xAxis: { ordinal: false },
    yAxis: {
      title: { text: options.yLabel },
      labels: yLabels,
      max: options.yMax,
    },
    plotOptions,
    series: options.series,
  });
}

/**
 * Converts encrypted data (an array of arrays originating from JSON)
 * to the format accepted by HighCharts.
 */
function hcFormat(arr) {
  return arr.map((entry) => {
    const d = new Date(atob(entry[0]));
    const ts = Date.UTC(d.getFullYear(), d.getMonth(), d.getDate());
    return [ts, Number(atob(entry[1]))];
  });
}
