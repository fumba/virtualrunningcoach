<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"> <i class="fa fa-calendar"></i>
				virtual running coach
			</a>
		</div>

		<!-- Navbar Right -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li
					class="{{ Request::is('/') || Request::is('home') ? 'active' : '' }}"><a
					href="/">Home</a></li> @if (Auth::check())
				@if(Auth::user()->plan_type != '')
				<li><a href="/plan"
					class="{{ Request::is('plan') ? 'active' : '' }}">Current Plan ({!! $curr_plan->name  !!}) </a></li>
				@endif @role('manager')
				<li><a href="/admin"
					class="{{ Request::is('admin') ? 'active' : '' }}">Admin</a></li>
				@endrole
				<li><a href="/users/logout">Logout</a></li> @else
				<li><a href="/users/register"
					class="{{ Request::is('/users/register') ? 'active' : '' }}">Register</a></li>
				<li><a href="/users/login"
					class="{{ Request::is('/users/login') ? 'active' : '' }}">Login</a></li>
				@endif

			</ul>
		</div>
	</div>
</nav>