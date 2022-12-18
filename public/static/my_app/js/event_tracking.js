

$("#dwnload_btn").click(function () {
	console.log('dwnload_btn click');
	gtag('event', 'click', {
		'event_category': 'download',
		'event_label': 'click on dwnload_btn'
	});

});

$("#buy_btn").click(function () {
	console.log('buy_btn click');
	gtag('event', 'click', {
		'event_category': 'buy',
		'event_label': 'click on buy_btn'
	});

});

$("#youtube-link").click(function () {
	console.log('youtube_link click');
	gtag('event', 'click', {
		'event_category': 'watch',
		'event_label': 'click on youtube link'
	});

});


$("#tradingview_banner_link").click(function () {
	console.log('tradingview_banner_link click');
	gtag('event', 'click', {
		'event_category': 'banner_click',
		'event_label': 'click on tradingview banner'
	});

});

$("#tradingview_text_link").click(function () {
	console.log('tradingview_text_link click');
	gtag('event', 'click', {
		'event_category': 'text_ad_click',
		'event_label': 'click on tradingview text ad'
	});

});

$("#greencrypto").click(function () {
	console.log('greencrypto click');
	gtag('event', 'click', {
		'event_category': 'banner_click',
		'event_label': 'click on greencrypto'
	});

});

$("#moon").click(function () {
	console.log('dark mode click');
	gtag('event', 'click', {
		'event_category': 'moon_click',
		'event_label': 'click on moon'
	});

});
