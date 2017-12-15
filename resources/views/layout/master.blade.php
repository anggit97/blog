<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	@include('include.libs')
	@yield('meta-tag');
</head>
<body>
	@include('include.navbar')
	@yield('content')
	@include('include.footer')
</body>
</html>