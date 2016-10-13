<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
	@include('layouts.partials.navbar')
    <div class="container">
    	@if(session()->has('SUCCESS_MESSAGE'))
			<div class="alert alert-success">
				<p>{{ session('SUCCESS_MESSAGE') }}</p>
			</div>
    	@endif
        @yield('content')
    </div>
    @include('layouts.partials.footer')
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
