<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Dashboard | @yield('title')</title>

   <!-- vendor css -->
   <link href="{{asset('admin/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/lib/select2/css/select2.min.css')}}" rel="stylesheet">

   <!-- Bracket CSS -->
   <link rel="stylesheet" href="{{asset('admin/css/bracket.css')}}">
   <link rel="stylesheet" href="{{asset('admin/css/bracket.oreo.css')}}">
   <link href="{{asset('admin/lib/medium-editor/css/medium-editor.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/lib/medium-editor/css/themes/default.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">
 </head>
 <body>
    @include('admin-layouts.leftpanel')
    @yield('content')
   <script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('admin/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
   <script src="{{asset('admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('admin/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
   <script src="{{asset('admin/lib/moment/min/moment.min.js')}}"></script>
   <script src="{{asset('admin/lib/peity/jquery.peity.min.js')}}"></script>
   <script src="{{asset('admin/lib/rickshaw/vendor/d3.min.js')}}"></script>
   <script src="{{asset('admin/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
   <script src="{{asset('admin/lib/rickshaw/rickshaw.min.js')}}"></script>
   <script src="{{asset('admin/lib/jquery.flot/jquery.flot.js')}}"></script>
   <script src="{{asset('admin/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
   <script src="{{asset('admin/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
   <script src="{{asset('admin/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
   <script src="{{asset('admin/lib/echarts/echarts.min.js')}}"></script>
   <script src="{{asset('admin/lib/select2/js/select2.full.min.js')}}"></script>
   <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
   <script src="{{asset('admin/lib/gmaps/gmaps.min.js')}}"></script>
   <script src="{{asset('admin/lib/summernote/summernote-bs4.min.js')}}"></script>
   <script src="{{asset('admin/js/bracket.js')}}"></script>
   <script src="{{asset('admin/js/map.shiftworker.js')}}"></script>
   <script src="{{asset('admin/js/ResizeSensor.js')}}"></script>
   <script src="{{asset('admin/js/dashboard.js')}}"></script>
   <script src="{{asset('admin/lib/medium-editor/js/medium-editor.min.js')}}"></script>
   <script>
    $(function(){
      'use strict';

      // Inline editor
      var editor = new MediumEditor('.editable');

      // Summernote editor
      $('.summernote').summernote({
        height: 150,
        tooltip: false
      })
    });
  </script>
  </body>
</html>
