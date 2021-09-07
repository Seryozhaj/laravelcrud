<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>@yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto w-100">
						@auth
							<li class="nav-item active">
								<a class="nav-link" href="{{ url('/home') }}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('products.index') }}">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
							</li>
						
							<li class="nav-item ml-auto">
								<a class="nav-link" href="{{ route('logout') }}">Logout</a>
							</li>
						@else
							<li class="nav-item ml-auto">
									<a class="nav-link" href="{{ route('login') }}">Login</a>
							</li>
							@if (Route::has('register'))
								<li class="nav-item">
										<a class="nav-link mr-sm-2" href="{{ route('register') }}">Register</a>
								</li>
							@endif
						@endauth
					</ul>
					<ul>
						
					</ul>
				</div>
			</div>
	</nav>
	
	<div class="container">
			@yield('content')
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
			$(function() {
				$('.alert-success').fadeOut(4000);
			});
	</script>
</body>
</html>