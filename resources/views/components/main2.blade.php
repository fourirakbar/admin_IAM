<!doctype html>
<html lang="en" class="no-focus" ng-app="medifyApp">
<head>
	@include('nutrition.components.header')
	<style type="text/css">
		header{
			background-color: #3bab83;
			color: white;
		}
		#page-header{
			background-color: #3bab83;
			color: white;
		}
		#page-header a{
			color: white;
		}
		#page-header button{
			color: white;
		}
		.content{
			background-color: #edf2f6;
			padding-top: 100px;
		}
	</style>
</head>
<body>
	@include('layouts.components2.svg')
	<div id="page-container" class="page-header-fixed main-content-boxed">	
		@include('nutrition.components.navbar')
		@yield('content')
	</div>

	@include('layouts.components2.footer')
	@include('layouts.components2.js')
</body>
</html>
