<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/backend')}}/images/favicon.ico" />

    <link rel="stylesheet" href="{{asset('/backend')}}/css/backend.min.css?v=1.0.0">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendor/@icon/dripicons/dripicons.css">

    <link rel='stylesheet' href='{{asset('/backend')}}/vendor/fullcalendar/core/main.css' />
    <link rel='stylesheet' href='{{asset('/backend')}}/vendor/fullcalendar/daygrid/main.css' />
    <link rel='stylesheet' href='{{asset('/backend')}}/vendor/fullcalendar/timegrid/main.css' />
    <link rel='stylesheet' href='{{asset('/backend')}}/vendor/fullcalendar/list/main.css' />
    <link rel="stylesheet" href="{{asset('/backend')}}/vendor/mapbox/mapbox-gl.css">  </head>
<body class="noteplus-layout  ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>

<!-- Wrapper Start -->
<div class="wrapper">
    @yield('content')
</div>
<!-- Wrapper End-->
{{--@include('backend.partials.footer')--}}
@yield('script')
<!-- Backend Bundle JavaScript -->
<script src="{{asset('/backend')}}/js/backend-bundle.min.js"></script>

<!-- Flextree Javascript-->
<script src="{{asset('/backend')}}/js/flex-tree.min.js"></script>
<script src="{{asset('/backend')}}/js/tree.js"></script>

<!-- Table Treeview JavaScript -->
<script src="{{asset('/backend')}}/js/table-treeview.js"></script>

<!-- Masonary Gallery Javascript -->
<script src="{{asset('/backend')}}/js/masonry.pkgd.min.js"></script>
<script src="{{asset('/backend')}}/js/imagesloaded.pkgd.min.js"></script>

<!-- Mapbox Javascript -->
<script src="{{asset('/backend')}}/js/mapbox-gl.js"></script>
<script src="{{asset('/backend')}}/js/mapbox.js"></script>

<!-- Fullcalender Javascript -->
<script src='{{asset('/backend')}}/vendor/fullcalendar/core/main.js'></script>
<script src='{{asset('/backend')}}/vendor/fullcalendar/daygrid/main.js'></script>
<script src='{{asset('/backend')}}/vendor/fullcalendar/timegrid/main.js'></script>
<script src='{{asset('/backend')}}/vendor/fullcalendar/list/main.js'></script>

<!-- SweetAlert JavaScript -->
<script src="{{asset('/backend')}}/js/sweetalert.js"></script>

<!-- Vectoe Map JavaScript -->
<script src="{{asset('/backend')}}/js/vector-map-custom.js"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('/backend')}}/js/customizer.js"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('/backend')}}/js/chart-custom.js"></script>

<!-- slider JavaScript -->
<script src="{{asset('/backend')}}/js/slider.js"></script>

<!-- app JavaScript -->
<script src="{{asset('/backend')}}/js/app.js"></script>
</body>
</html>
