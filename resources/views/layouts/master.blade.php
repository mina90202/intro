<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Intro | @yield('title')</title>
		<link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
		 <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,500,700" rel="stylesheet">
		 <link rel="stylesheet" type="text/css" href="{{asset('asset/simple-line-icons-master/css/simple-line-icons.css')}}">

		<link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('asset/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/jquery.fancybox.min.css')}}">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')

</div></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{asset('asset/js/jquery.counterup.min.js')}}"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counte').counterUp({
            delay: 10,
            time: 2000
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('asset/js/bootstrap.min_0028c055ceaff1f8b7d449fbc8a58b31.js')}}"></script>
<script src ="{{asset('asset//js/jquery-ui_c2b0c2990b0899f3e3e3d0791bf33206.js')}}"></script>
<script src="{{asset('asset/slick/slick.js')}}" ></script>
<script src="{{asset('asset/js/main1.js')}}"></script>
<script src="{{asset('asset/js/jquery.fancybox.min.js')}}"></script>
</body>

</html>
