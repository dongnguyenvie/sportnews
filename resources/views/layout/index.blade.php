<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports</title>
    <base href="{{asset('')}}">
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="web_asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="web_asset/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="web_asset/css/owl.carousel.css" rel="stylesheet">
	 <link href="web_asset/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Off Canvas Menu -->
    <link href="web_asset/css/offcanvas.min.css" rel="stylesheet">

    <!--Theme CSS -->
    <link href="web_asset/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="//cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js" type="text/javascript"></script>

    <script src='admin_asset\tinymce\tinymce.min.js'></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



  </head>
<body>
<div id="main-wrapper">

    <!-- Header Section -->
    @include('layout/header')


    @yield('content')

    <!-- Footer Section -->
    @include('layout/footer')

</div> <!--main-wrapper-->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="web_asset/js/jquery.min.js"></script>

<!-- Owl carousel -->
<script src="web_asset/js/owl.carousel.js"></script>

<!-- Bootstrap -->
<script src="web_asset/js/bootstrap.min.js"></script>

<!-- Theme Script File-->
<script src="web_asset/js/script.js"></script>

<!-- Off Canvas Menu -->
<script src="web_asset/js/offcanvas.min.js"></script>


<script type="text/javascript">
    $('document').ready(function () {
        var league_value = $('.league_select').val();
        $('.league_select').change(function () {
            league_value = $(this).val();
        })
    })


        setTimeout(function(){
            window.location.reload(1);
        }, 300000);

        tinymce.init({
                selector: '.myeditor'
        });


</script>

</body>
</html>
