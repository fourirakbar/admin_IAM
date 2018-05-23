
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<title>@yield('title')</title>

<meta name="description" content="Medify for Hospital">
<meta name="author" content="pixelcave">
<meta name="robots" content="noindex, nofollow">

<!-- Open Graph Meta -->
<meta property="og:title" content="Medify for Hospital">
<meta property="og:site_name" content="Medify for Hospital">
<meta property="og:description" content="Medify for Hospital">
<meta property="og:type" content="Medify for Hospital">
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="{{asset('assets/img/favicons/favicon.png')}}">
<link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/favicon-192x192.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon-180x180.png')}}">
<!-- END Icons -->

<!-- ANGULAR ITEMS -->
{{--
<script src="{{asset('assets/js/angular/angular164.min.js')}}"></script>
<script src="{{asset('assets/js/angular/angular-route164.min.js')}}"></script>
<script src="{{asset('assets/js/angular/angular-sanitize164.min.js')}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
<script data-require="ui-bootstrap@*" data-semver="0.12.1" src="{{asset('assets/js/ui-bootstrap-tpls-0.12.1.min.js')}}"></script>
--}}
<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/select2/select2-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/dropzonejs/min/dropzone.min.css')}}">


<link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick-theme.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/magnific-popup/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/lightgallery.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery-editable.css')}}">
<link href="{{asset('assets/css/bootstrap-datepaginator.min.css')}}" rel="stylesheet" />

<!-- Codebase framework -->
<link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/plugins/wickedpicker/wickedpicker.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('assets/css/medifyhospitalv2.0.css')}}">

@yield('css')