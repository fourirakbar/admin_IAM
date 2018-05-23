<!doctype html>
<html lang="en" class="no-focus" ng-app="medifyApp">
<head>
	@include('layouts.components2.header')
</head>
<body>
	@include('layouts.components2.svg')
	<div id="page-container" class="page-header-fixed main-content-boxed">	
		@include('layouts.components2.navbar')
		@yield('content')
	</div>

	@include('layouts.components2.footer')
	@include('layouts.components2.js')
</body>
</html>
