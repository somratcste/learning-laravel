<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('src/css/bootstrap.min.css') }}">
	</head>
	<body>
		<div class="container">
			@include('includes.header')
			<div class="row">
				@yield('content')
			</div>
		</div>
	</body>
	@include('includes.footer')
</html>