<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield("title") | {{ env("APP_NAME") }}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <script src="{{ asset("js/vendors/color-modes.js") }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plyr.css') }}">
    <link href="{{ asset("css/main.css") }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @include('sweetalert::alert')
    <div class="screen-overlay"></div>

    @include("components.includes.admin.sidebar")

    <main class="main-wrap">
        @include("components.includes.admin.header")

        @yield("content")

        @include("components.includes.admin.footer")

    </main>
    <script src="{{ asset("js/vendors/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("js/vendors/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("js/vendors/select2.min.js") }}"></script>
    <script src="{{ asset("js/vendors/perfect-scrollbar.js") }}"></script>
    <script src="{{ asset("js/vendors/jquery.fullscreen.min.js") }}"></script>
    <script src="{{ asset("js/vendors/chart.js") }}"></script>
    <script src="{{ asset('js/plyr.min.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset("js/main.js") }}" type="text/javascript"></script>
    <script src="{{ asset("js/custom-chart.js") }}" type="text/javascript"></script>
    @stack('scripts')
</body>

</html>
