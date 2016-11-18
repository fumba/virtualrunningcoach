<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"> <i class="fa fa-calendar"></i> virtual running coach</a>
        </div>

        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
				<li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>

						@if (Auth::check())
							@role('manager')
								<li><a href="/admin">Admin</a></li>
							@endrole
							<li><a href="/users/logout">Logout</a></li>
						@else
							<li><a href="/users/register">Register</a></li>
							<li><a href="/users/login">Login</a></li>
						@endif

            </ul>
        </div>
    </div>
</nav>