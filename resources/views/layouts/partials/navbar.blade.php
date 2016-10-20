<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ action('PostsController@index') }}">Dreddit.dev</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if (Auth::check())
                    <li><a href="{{ action('UsersController@show', Auth::id()) }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
                    <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
                @else
                    <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
                    <li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
                @endif
                    <li><a href="{{ action('PostsController@index') }}">Posts</a></li>
                    <li><a href="{{ action('UsersController@index') }}">Users</a></li>
            </ul>
            <form class="navbar-form navbar-right collapse navbar-collapse" method="GET" action="{{ action('PostsController@index') }}">
                <div class="form-group">
                    <input input id= "search" type="search" class="form-control" placeholder="Search Posts" name="search">
                </div>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>