<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css">
</head>
<body>
	@include('layouts.partials.navbar')
    <div class="container">
    	@if(session()->has('SUCCESS_MESSAGE'))
			<div class="alert alert-success">
				<p>{{ session('SUCCESS_MESSAGE') }}</p>
			</div>
    	@endif
    	@if(session()->has('ERROR_MESSAGE'))
    		<div class="alert alert-danger">
    			<p>{{ session('ERROR_MESSAGE') }}</p>
    		</div>
    	@endif
        @yield('content')
    </div>
    @include('layouts.partials.footer')
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
