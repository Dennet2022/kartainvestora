$(function () {
  // Show modal if user is using an incompatible browser.
  // Note that this JS must itself work in out of date browsers.
  var ua = navigator.userAgent;
  // MSIE: Old versions of Internet Explorer.
  // Trident: New versions of Internet Explorer.
  if (
    ua.indexOf('MSIE ') > -1 ||
    ua.indexOf('Trident/') > -1 ||
    ua.indexOf('Opera Mini') > -1
  ) {
    $('#incompatible-browser-modal').modal('show');
  }
});

function handleError(chart_id) {
  $('#loading-animation').remove();
  $('#' + chart_id).has('#error_staff').length
    ? null
    : $('#error_staff')
      .clone()
      .css('display', 'block')
      .appendTo('#' + chart_id);
}
