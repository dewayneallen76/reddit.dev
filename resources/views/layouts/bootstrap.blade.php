<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        @yield('top-script')
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
	{{-- @include('partials.navbar') --}}
    <div class="container">
        @yield('content')
    </div>
    {{-- @include('partials.footer') --}}
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
