<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <!-- favcon -->
    <link rel="shortcut icon" href="/img/favicon.ico" />
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="/css/themify-icons.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/weather-icons.min.css" rel="stylesheet">
    <!-- Scripts -->
    @yield('scripts', '')
    <!-- Global Spark Object -->
    <script>
    window.Spark = <?php echo json_encode(array_merge(
            Spark::scriptVariables(), []
        )); ?>;
    </script>
</head>

<body class="skin-default">
    <div class="preloader">
        <div class="loader_img"><img src="/img/loader.gif" alt="loading..." height="64" width="64"></div>
    </div>
    <div id="spark-app" v-cloak>
        <!-- Navigation -->
        <header class="header">
            @if (Auth::check()) @include('spark::nav.user') @else @include('spark::nav.guest') @endif
        </header>
        <!-- Main Content -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            @if (Auth::check())
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar-->
                @include('spark::layouts.leftmenu')
                <!-- /.sidebar -->
            </aside>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('breadcrumb')
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </aside>
            @else
            <section class="content m-t-75">
                @yield('content')
            </section>
            @endif
        </div>
        <!-- Application Level Modals -->
        @if (Auth::check()) @include('spark::modals.notifications') @include('spark::modals.support') @include('spark::modals.session-expired') @endif
    </div>
    <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="/js/sweetalert.min.js"></script>
</body>

</html>
