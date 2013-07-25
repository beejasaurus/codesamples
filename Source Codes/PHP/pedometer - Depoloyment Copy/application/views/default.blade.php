<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('http://code.jquery.com/jquery-1.9.1.min.js') }}
	@yield('extraheader')
	
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			
			@if(Auth::user())
				{{ HTML::link('/', $thisuser->name . " (" . $thisuser->team . ")", array('class'=>'brand')) }}
			@else
				{{ HTML::link('/', 'Pedometer Metrics', array('class'=>'brand')) }}
			@endif
			<ul class="nav pull-right">
				@if(Auth::user())
					<li>{{ HTML::link('profile', 'View Profile') }}</li>
					<li>{{ HTML::link('logout', 'Logout') }}</li>
				@else
					<li>{{ HTML::link('login', 'Login') }} </li>
					<li>{{ HTML::link('register', 'Register') }}</li>
				@endif
			</ul>
		</div>
	</div>
	<div class="container">
		
		@if(Session::has('message'))
			<p style='color: green;'>{{ Session::get('message') }}</p>
		@endif
		
		@include('plugins.status')
		@yield('content')
	</div>
</body>
</html>
