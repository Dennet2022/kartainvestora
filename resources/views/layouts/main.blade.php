<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Silvan Frank">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-77251751-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-77251751-1');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ENKD55Y0RD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-ENKD55Y0RD');
    </script>

    <link rel="shortcut icon" href="/static/my_app/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/static/my_app/images/touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/my_app/images/touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/my_app/images/touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/my_app/images/touch-icon-144x144.png">
    <title>Longtermtrends | Find the most interesting financial charts!</title>
    <meta name="description" content="Our mission is to find the most interesting and educational charts with rich historical data, and
to make these charts available online.">

    <meta property="og:image" content="/static/my_app/images/longtermtrends-preview-image.png">
    <!-- link Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- link Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/static/my_app/bootstrap/css/custom2.css">
    <!-- link Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="/static/my_app/bootstrap/font-awesome/css/font-awesome.css">
    <!-- scripts are linked at the end of the document -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="light">

<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <form class="mail modal-form">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="newsletter-img">
                    <img src="/static/my_app/images/newsletter.svg" class="news-image" alt="Subscribe to newsletter">
                </div>
                <div class="news-content">
          <span class="close-modal" id="closemodal">
            <img src="/static/my_app/images/black-x.svg" class="close" alt="close">
          </span>
                    <h3>Subscribe to newsletter</h3>
                    <p>Every month we send out an email about the latest developement in the charts</p>
                    <form id="form-modal">

                        <input type="text" id="email-subscribe-input-modal" onkeydown="validationModal()" name=""
                               value="" placeholder="E-mail address">
                        <span class="" id="verify-msg-modal" style="display:none;"></span>
                        <button id="email-subscribe-submit-modal" type="submit" class="button news-button"
                                name="button">Subscribe
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </form>

</div>

@include('components.header')

@yield('content')

<hr>

@include('components.footer')

<div id="incompatible-browser-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <h4 class="modal-title">Your browser is out of date!</h4>

            <div class="modal-para">
                <p>You are using an out of date browser that is missing certain Javascript features. For this reason,
                    the charts
                    cannot be displayed.</p>
                <p>Please update to a modern browser: a list is available <a href="https://browsehappy.com/">here</a>.
                </p>
            </div>

            <button type="button" data-dismiss="modal" class="more-charts modal-btn mod-close">Close</button>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/my_app/js/jquery.iframetracker.min.js"></script>
<script type="text/javascript" src="/static/my_app/js/event_tracking.js"></script>
<script type="text/javascript" src="/static/my_app/js/handle_error.js"></script>
<script type="text/javascript" src="/static/my_app/js/utils.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.js"></script>

<div id="error_staff">
    <img id="error_msg" src="/static/my_app/images/close.png" alt="Error" height="48" width="48">
    <br>
    <div id="error_txt" style="text-align: center;">
        <p>An error appeared while loading the data.
            Maybe there is a technical problem with the data source. Please let me know if this happens regularly <a
                href="https://twitter.com/@silvan_frank">@silvan_frank</a>.</p>
    </div>
</div>
<script type="text/javascript">
    // **************************DARK MODE
    // check for saved 'darkMode' in localStorage
    let darkMode = localStorage.getItem('darkMode');

    const darkModeToggle = document.querySelector('#dark-mode-toggle');

    const enableDarkMode = () => {
        // 1. Add the class to the body
        document.body.classList.add('darkmode');
        // Change the moon logo
        document.getElementById("moon").src = "/static/my_app/images/moon-dark.svg";
        //change the footer links
        document.getElementById("globe").src = "/static/my_app/images/globe-dark.svg";
        document.getElementById("twitter").src = "/static/my_app/images/twitter-dark.svg";
        document.getElementById("globe-res").src = "/static/my_app/images/globe-dark.svg";
        document.getElementById("twitter-res").src = "/static/my_app/images/twitter-dark.svg";
        document.getElementById("closemodal").src = "/static/my_app/images/white-x.svg";


        // 2. Update darkMode in localStorage
        localStorage.setItem('darkMode', 'enabled');
    };

    const disableDarkMode = () => {
        // 1. Remove the class from the body
        document.body.classList.remove('darkmode');
        // Change the moon logo
        document.getElementById("moon").src = "/static/my_app/images/moon.svg";
        //change the footer links
        document.getElementById("globe").src = "/static/my_app/images/globe.svg";
        document.getElementById("twitter").src = "/static/my_app/images/twitter.svg";
        document.getElementById("globe-res").src = "/static/my_app/images/globe.svg";
        document.getElementById("twitter-res").src = "/static/my_app/images/twitter.svg";
        document.getElementById("closemodal").src = "/static/my_app/images/black-x.svg";


        // 2. Update darkMode in localStorage
        localStorage.setItem('darkMode', null);
    };

    // If the user already visited and enabled darkMode
    // start things off with it on
    if (darkMode === 'enabled') {
        enableDarkMode();
    }

    // When someone clicks the button
    darkModeToggle.addEventListener('click', () => {
        // get their darkMode setting
        darkMode = localStorage.getItem('darkMode');

        // if it not current enabled, enable it
        if (darkMode !== 'enabled') {

            enableDarkMode();
            // if it has been enabled, turn it off
        } else {
            disableDarkMode();
        }
    });

</script>
<script type="text/javascript" src="/static/my_app/js/base.js"></script>


<script>
    //Filter active button


    // $('.filter-btn').on('click', function () {
    //     //remove class
    //     $("span").removeClass("active");
    //     // add class to the one we clicked
    //     $(this).addClass("active");
    //     var filterTxt = $(this).text().toLowerCase();
    //     var stocksFilter = ['large-cap', 'dow jones', 's&p 500', 'market cap', 'stock market', 'stocks', 'emerging'];
    //     var realestateFilter = ['home', 'real estate', 'Mortgage'];
    //     var bondsFilter = ['bond', 'treasury', 'interest rate', 'debt', 'm2', 'copper to gold', 'yield'];
    //     var commoditiesFilter = ['commodities'];
    //     var cryptoFilter = ['bitcoin'];
    //
    //
    //     // hide all;
    //     $(".row:not(.not_select)").each(function () {
    //         $(this).hide();
    //         // hide top hr
    //         $(this).prev().hide();
    //     });
    //
    //     if (filterTxt == 'all') {
    //         $(".row:not(.not_select)").each(function () {
    //             $(this).show();
    //             $(this).prev().show();
    //         });
    //     } else if (filterTxt == 'real estate') {
    //         // show rows where we can find input text
    //         $(".row:not(.not_select)").each(function () {
    //             var div = $(this);
    //             var div_text = $(this).text().toLowerCase();
    //             $(realestateFilter).each(function () {
    //                 var realestateFilter = this.toLowerCase();
    //                 if (div_text.indexOf(realestateFilter) != -1) {
    //                     div.show();
    //                     div.prev().show();
    //                 }
    //             });
    //         });
    //     } else if (filterTxt == 'stocks') {
    //         // show rows where we can find input text
    //         $(".row:not(.not_select)").each(function () {
    //             var div = $(this);
    //             var div_text = $(this).text().toLowerCase();
    //             $(stocksFilter).each(function () {
    //                 var stocksFilter = this.toLowerCase();
    //                 if (div_text.indexOf(stocksFilter) != -1) {
    //                     div.show();
    //                     div.prev().show();
    //                 }
    //             });
    //         });
    //     } else if (filterTxt == 'bonds') {
    //         // show rows where we can find input text
    //         $(".row:not(.not_select)").each(function () {
    //             var div = $(this);
    //             var div_text = $(this).text().toLowerCase();
    //             $(bondsFilter).each(function () {
    //                 var bondsFilter = this.toLowerCase();
    //                 if (div_text.indexOf(bondsFilter) != -1) {
    //                     div.show();
    //                     div.prev().show();
    //                 }
    //             });
    //         });
    //     } else if (filterTxt == 'commodities') {
    //         // show rows where we can find input text
    //         $(".row:not(.not_select)").each(function () {
    //             var div = $(this);
    //             var div_text = $(this).text().toLowerCase();
    //             $(commoditiesFilter).each(function () {
    //                 var bondsFilter = this.toLowerCase();
    //                 if (div_text.indexOf(bondsFilter) != -1) {
    //                     div.show();
    //                     div.prev().show();
    //                 }
    //             });
    //         });
    //     } else if (filterTxt == 'crypto') {
    //         // show rows where we can find input text
    //         $(".row:not(.not_select)").each(function () {
    //             var div = $(this);
    //             var div_text = $(this).text().toLowerCase();
    //             $(cryptoFilter).each(function () {
    //                 var bondsFilter = this.toLowerCase();
    //                 if (div_text.indexOf(bondsFilter) != -1) {
    //                     div.show();
    //                     div.prev().show();
    //                 }
    //             });
    //         });
    //     } else {
    //         // show rows where we can find input text
    //         $(".row:not(.not_select)").each(function () {
    //             var div_text = $(this).text().toLowerCase();
    //             if (div_text.indexOf(filterTxt) != -1) {
    //                 $(this).show();
    //                 $(this).prev().show();
    //             }
    //         });
    //     }
    // });
</script>
<script>
    if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $("#real-estate-filter-button").hide();
    }
    if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $("#commodities-filter-button").hide();
    }
</script>
<script>
    $('button').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });


</script>


</body>

</html>
