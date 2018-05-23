<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="{{asset('assets/js/angular/angular164.min.js')}}"></script>
<script src="{{asset('assets/js/angular/angular-route164.min.js')}}"></script>
<script src="{{asset('assets/js/angular/angular-sanitize164.min.js')}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>

<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
{{-- <link href="{{asset('assets/css/bootstrap-datepicker3.css')}}" rel="stylesheet" /> --}}

<link href="{{asset('assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/medifyhospitalv1.0.css')}}" rel="stylesheet"/>
<script data-require="ui-bootstrap@*" data-semver="0.12.1" src="{{asset('assets/js/ui-bootstrap-tpls-0.12.1.min.js')}}"></script>

<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="{{asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

@yield('css')
<link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
<style>
tr.clickable-row {
	cursor: pointer;
}
</style>
<link href="{{asset('assets/css/bootstrap-datepaginator.css')}}" rel="stylesheet" />