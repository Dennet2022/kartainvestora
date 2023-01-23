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

    <link rel="shortcut icon" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon.png">
    <title>Kartainvestora | Найдите самые интересные финансовые графики!</title>
    <meta name="description" content="Наша миссия состоит в том, чтобы найти наиболее интересные и познавательные графики с богатыми историческими данными и сделать их доступными для вас.">

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
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</head>

<body class="light">

<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <form class="modal-form">

        <div class="modal-contents">
            <span class="close-modal" id="closemodal">
                    <img src="/static/my_app/images/black-x.svg" class="close" alt="close">
            </span>
            <div class="modal-up__content">
                <img src="/favicon.png" class="app-image" alt="app">
                <div>
                    <h3>У нас появилось приложение!</h3>
                </div>
            </div>
            <div class="modal-bottom__content">
                <div class="dwnld-app-container">
                    <p>
                        Для установки нажмите на иконку
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.6464 7.35355C14.8417 7.54882 15.1583 7.54882 15.3536 7.35355C15.5488 7.15829 15.5488 6.84171 15.3536 6.64645L14.6464 7.35355ZM12 4L12.3536 3.64645C12.2598 3.55268 12.1326 3.5 12 3.5C11.8674 3.5 11.7402 3.55268 11.6464 3.64645L12 4ZM8.64645 6.64645C8.45118 6.84171 8.45118 7.15829 8.64645 7.35355C8.84171 7.54882 9.15829 7.54882 9.35355 7.35355L8.64645 6.64645ZM11.5 15C11.5 15.2761 11.7239 15.5 12 15.5C12.2761 15.5 12.5 15.2761 12.5 15L11.5 15ZM15.3536 6.64645L12.3536 3.64645L11.6464 4.35355L14.6464 7.35355L15.3536 6.64645ZM11.6464 3.64645L8.64645 6.64645L9.35355 7.35355L12.3536 4.35355L11.6464 3.64645ZM12.5 15L12.5 4L11.5 4L11.5 15L12.5 15Z" fill="#1A1A1A"/>
                            <path d="M15.75 10L17.25 10C17.6642 10 18 10.2798 18 10.625L18 19.375C18 19.7202 17.6642 20 17.25 20L6.75 20C6.33579 20 6 19.7202 6 19.375L6 10.625C6 10.2798 6.33579 10 6.75 10L8.25 10" stroke="#1A1A1A" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <br>
                        и в меню выберите «На экран “Домой”»
                    </p>
                    <div class="animated-arrow-box">
                        <svg class="animated-arrow" viewBox="0 0 24 34">
                            <path d="M13.5 2C13.5 1.17157 12.8284 0.5 12 0.5C11.1716 0.5 10.5 1.17157 10.5 2L13.5 2ZM10.9393 33.0607C11.5251 33.6464 12.4749 33.6464 13.0607 33.0607L22.6066 23.5147C23.1924 22.9289 23.1924 21.9792 22.6066 21.3934C22.0208 20.8076 21.0711 20.8076 20.4853 21.3934L12 29.8787L3.51472 21.3934C2.92893 20.8076 1.97918 20.8076 1.3934 21.3934C0.807611 21.9792 0.807611 22.9289 1.3934 23.5147L10.9393 33.0607ZM10.5 2L10.5 32L13.5 32L13.5 2L10.5 2Z" fill="#8B9A93"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

@include('components.header')

@yield('content')

<hr>

@include('components.footer')

{{--<div id="incompatible-browser-modal" class="modal">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}

{{--            <h4 class="modal-title">Your browser is out of date!</h4>--}}

{{--            <div class="modal-para">--}}
{{--                <p>You are using an out of date browser that is missing certain Javascript features. For this reason,--}}
{{--                    the charts--}}
{{--                    cannot be displayed.</p>--}}
{{--                <p>Please update to a modern browser: a list is available <a href="https://browsehappy.com/">here</a>.--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <button type="button" data-dismiss="modal" class="more-charts modal-btn mod-close">Close</button>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

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
                href=""></a>.</p>
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

<script>
    $(document).ready(function() {
        $(window).resize(function() {
            let w = $(window).width()/100*90;
            if (w > 1600) {
                w = 1600;
            }
            $( "iframe" ).attr('width', w); // .attr('height', $(window).height()/100*90);
            console.log('window width');
            console.log(w);

        });
        let w = $(window).width()/100*90;
        if (w > 1600) {
            w = 1600;
        }
        $( "iframe" ).attr('width', w); // .attr('height', $(window).height()/100*90);
        console.log('window width');
        console.log(w);
    });
</script>

</body>

</html>
