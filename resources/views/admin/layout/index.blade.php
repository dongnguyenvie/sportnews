<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>

    {{-- important --}}
    <base href="{{asset('')}}">

    <link href="admin_asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin_asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="admin_asset/css/datepicker.css" rel="stylesheet">
	<link href="admin_asset/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
    <![endif]-->
    <script src='admin_asset\tinymce\tinymce.min.js'></script>
</head>
<body>

    {{-- navbar --}}
    @include('admin/layout/navbar')
    {{-- end-navbar --}}

    {{-- sidebar --}}
    @include('admin/layout/sidebar')
   {{-- .end-sidebar --}}


    {{-- main --}}
    @yield('content')
    {{-- end-main --}}









    <script src="admin_asset/js/jquery-1.11.1.min.js"></script>
	<script src="admin_asset/js/bootstrap.min.js"></script>
	<script src="admin_asset/js/bootstrap-datepicker.js"></script>
	<script src="admin_asset/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

	<script>
        //confirm-box
        var elems = document.getElementsByClassName('confirmation');
        var confirmIt = function (e) {
            if (!confirm('Are you sure?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }

        // tinymce editor
        tinymce.init({
            selector: '.myeditor'
        });

        //datepicker
        $('.datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        });
        $('.datepicker').datepicker("setDate", new Date());



	</script>
</body>
</html>
