<!doctype html> 
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{config('app.name', 'muftiaf')}} - Personal Website</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/info.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-icon.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    @yield('content')
    <!-- Footer section -->
    @include('inc.footer')
    <!-- Footer section END--> 
    <!-- JS FILES --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script> 
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script> 
    <script src="{{ asset('js/retina.min.js') }}"></script> 
    <script src="{{ asset('js/modernizr.js') }}"></script> 
    <script src="{{ asset('js/main.js') }}"></script> 
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/9f89dbaa52.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.contact.js') }}"></script>
    <!--JS FILES END-->
</body>
</html>