<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>

	<!-- Global stylesheets -->
	<link href="{{ asset('assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    {{-- FONT --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Popins&display=swap">

	<!-- Core JS files -->
	<script src="{{ asset('assets/demo/demo_configurator.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/visualization/d3/d3_tooltip.js') }}"></script>

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/demo/pages/dashboard.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/streamgraph.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/sparklines.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/lines.js') }}"></script>	
	<script src="{{ asset('assets/demo/charts/pages/dashboard/areas.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/donuts.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/bars.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/progress.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/heatmaps.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/pies.js') }}"></script>
	<script src="{{ asset('assets/demo/charts/pages/dashboard/bullets.js') }}"></script>
	<!-- /theme JS files -->

    <style>
        #content {
            /* ON CENTER LAYOUT */
            margin: auto auto;
            width: 507px;
            font-family: 'Poppins';
        }
        .btn-primary {
            background-color: #013FA1;
        }
        .btn-block{
            width: 100%;
        }
        .title{
            font-style: normal;
            font-weight: 600;
            font-size: 40px;
            line-height: 35px;
            color: #000000;
        }
        .sub-title{
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 36px;
            /* identical to box height */

            color: #9A9A9A;
            margin-bottom: 45px;
        }
        label{
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 24px;
            /* identical to box height */

            color: #9A9A9A;
        }
        .form-control{
            border: unset;
            border-bottom: 1px solid #9A9A9A;
            border-radius: 0px;
        }
    </style>
</head>
<body>
    <div id="content">
        @yield('content')
    </div>
</body>
</html>