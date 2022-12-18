<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/longtermtrends-in-the-news', function () {
    return view('longtermtrends-in-the-news');
});

Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});

Route::get('/newsletter', function () {
    return view('newsletter');
});

//

Route::get('/sp500-price-earnings-shiller-pe-ratio/', function () {
    return view('sp500-price-earnings-shiller-pe-ratio');
});

Route::get('/market-cap-to-gdp-the-buffett-indicator', function () {
    return view('market-cap-to-gdp-the-buffett-indicator');
});

Route::get('/stocks-vs-gold-comparison', function () {
    return view('stocks-vs-gold-comparison');
});

Route::get('/stocks-vs-bonds', function () {
    return view('stocks-vs-bonds');
});

Route::get('/stocks-to-real-estate-ratio', function () {
    return view('stocks-to-real-estate-ratio');
});

Route::get('/dow-gold-ratio', function () {
    return view('dow-gold-ratio');
});

Route::get('/growth-stocks-vs-value-stocks', function () {
    return view('growth-stocks-vs-value-stocks');
});

Route::get('/large-cap-vs-small-cap', function () {
    return view('large-cap-vs-small-cap');
});

Route::get('/nasdaq-vs-sp500', function () {
    return view('nasdaq-vs-sp500');
});

Route::get('/msci-usa-vs-the-world', function () {
    return view('msci-usa-vs-the-world');
});

Route::get('/emerging-vs-developed-markets', function () {
    return view('emerging-vs-developed-markets');
});

Route::get('/bitcoin-vs-gold', function () {
    return view('bitcoin-vs-gold');
});

Route::get('/real-estate-gold-ratio', function () {
    return view('real-estate-gold-ratio');
});

Route::get('/copper-gold-ratio', function () {
    return view('copper-gold-ratio');
});

Route::get('/oil-gold-ratio', function () {
    return view('oil-gold-ratio');
});

Route::get('/gold-silver-ratio', function () {
    return view('gold-silver-ratio');
});

Route::get('/us-debt-to-gdp', function () {
    return view('us-debt-to-gdp');
});

Route::get('/m2-money-supply-vs-inflation', function () {
    return view('m2-money-supply-vs-inflation');
});

Route::get('/real-interest-rate', function () {
    return view('real-interest-rate');
});

Route::get('/gold-vs-real-yields', function () {
    return view('gold-vs-real-yields');
});

Route::get('/us-treasury-yield-curve', function () {
    return view('us-treasury-yield-curve');
});

Route::get('/bond-yield-credit-spreads', function () {
    return view('bond-yield-credit-spreads');
});

Route::get('/sp500-dividend-yield', function () {
    return view('sp500-dividend-yield');
});

Route::get('/stocks-commodities-ratio', function () {
    return view('stocks-commodities-ratio');
});

Route::get('/commodity-futures-prices', function () {
    return view('commodity-futures-prices');
});

Route::get('/us-sectors-relative-strength', function () {
    return view('us-sectors-relative-strength');
});

Route::get('/national-stock-markets-comparison', function () {
    return view('national-stock-markets-comparison');
});

Route::get('/mining-stocks-vs-gold-and-silver', function () {
    return view('mining-stocks-vs-gold-and-silver');
});

Route::get('/ethereum-vs-bitcoin', function () {
    return view('ethereum-vs-bitcoin');
});

Route::get('/home-price-median-annual-income-ratio', function () {
    return view('home-price-median-annual-income-ratio');
});

Route::get('/home-price-vs-inflation', function () {
    return view('home-price-vs-inflation');
});

Route::get('/home-price-vs-inflation', function () {
    return view('home-price-vs-inflation');
});
