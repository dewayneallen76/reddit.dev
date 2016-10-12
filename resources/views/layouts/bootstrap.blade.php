<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
	@include('layouts.partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.partials.footer')
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
