<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon.png">
    <title>Kartainvestora | Найдите самые интересные финансовые графики!!</title>
    <meta name="description" content="Наша миссия состоит в том, чтобы найти наиболее интересные и познавательные графики с богатыми историческими данными и сделать их доступными для вас.">


    <!-- Bootstrap CSS -->
    <link href="{{ url("assets/css/bootstrap.min.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/css/bootstrap-extended.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/css/style.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/css/icons.css") }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ url("assets/css/pace.min.css") }}" rel="stylesheet" />

    <!--plugins-->
    <link href="{{ url("assets/plugins/simplebar/css/simplebar.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/plugins/vectormap/jquery-jvectormap-2.0.2.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/plugins/datatable/css/dataTables.bootstrap5.min.css") }}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ url("assets/css/dark-theme.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/css/light-theme.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/css/semi-dark.css") }}" rel="stylesheet" />
    <link href="{{ url("assets/css/header-colors.css") }}" rel="stylesheet" />
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
