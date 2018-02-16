<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield("title")</title>

	{{-- Styles --}}
	@yield("styles")
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('/open-iconic/font/css/open-iconic.css') }}" rel="stylesheet">
	<link href="{{ asset('/open-iconic/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/open-iconic/font/css/open-iconic-foundation.css') }}" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"></head>
<body>
	<header id="header" class="navbar navbar-expand" style="background: #fff;">
		<div class="container-fluid">
			<a href="/teste" title="Home">
				<img src="https://assets-cdn.github.com/images/modules/open_graph/github-mark.png" alt="" style="width: 120px;">
			</a>
			<div class="navbar-nav-scroll social">
				<table>
					<tbody>
						<tr>
							<td>
								<ul class="navbar-nav">
									<li class="nav-item">
										<span class="small">
											<i class="fab fa-facebook-square fa-2x" style="color:#40589b;"></i>
										</span>
									</li>
									<li class="nav-item">
										<span class="small">
											<i class="fab fa-whatsapp-square fa-2x" style="color:green;"></i>
										</span>
									</li>
									<li class="nav-item">
										<span class="small">
											<i class="fab fa-google-plus-square fa-2x" style="color:#d84834;"></i>
										</span>
									</li>
									<li class="nav-item">
										<span class="small">
											<i class="fab fa-twitter-square fa-2x" style="color:#3ca1f6;"></i>
										</span>
									</li>
									<li class="nav-item">
										<span class="small">
											<i class="fab fa-telegram fa-2x" style="color:#3a89eb;"></i>
										</span>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<ul class="navbar-nav">
									<li class="nav-item userli full-width">
										<a href="/login" title="Login" class="full-width"> 
											<button type="buttton" class="userbutton full-width">
												<span class="small user-icon">
													<i class="fas fa-user fa-2x small"></i> 
												</span>
												<span> Login </span> 
											</button>
										</a>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
				{{-- <ul class="navbar-nav">
					<li class="nav-item userli">
						<a href="/login" title="Login" class=""> 
							<button type="buttton" class="userbutton">
								<span class="small user-icon">
									<i class="fas fa-user fa-2x small"></i> 
								</span>
								<span> Login </span> 
							</button>
						</a>
					</li>
					<li class="nav-item">
						<span class="small">
							<i class="fab fa-facebook-square fa-2x" style="color:#40589b;"></i>
						</span>
					</li>
					<li class="nav-item">
						<span class="small">
							<i class="fab fa-whatsapp-square fa-2x" style="color:green;"></i>
						</span>
					</li>
					<li class="nav-item">
						<span class="small">
							<i class="fab fa-google-plus-square fa-2x" style="color:#d84834;"></i>
						</span>
					</li>
					<li class="nav-item">
						<span class="small">
							<i class="fab fa-twitter-square fa-2x" style="color:#3ca1f6;"></i>
						</span>
					</li>
				</ul> --}}
			</div>	
		</div>
		
	</header>
	@yield('content')
	<script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


    <!-- Scripts -->
    @yield('scripts')
</body>
</html>