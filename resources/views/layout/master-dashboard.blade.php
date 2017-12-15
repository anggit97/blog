<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	@include('include.libs-admin')
</head>
<body>
	@include('include.navbar')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				@include('include.sidebar')
			</div>
			<div class="col-sm-9">
				@yield('content')
			</div>	
		</div>
	</div>
</body>
</html>