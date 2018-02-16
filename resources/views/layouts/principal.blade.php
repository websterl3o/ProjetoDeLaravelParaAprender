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
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="/teste" title="Home">
							<img src="https://assets-cdn.github.com/images/modules/open_graph/github-mark.png" alt="" style="width: 120px;">
						</a>
					</div>
					<div class="col-8">
						<select name="cidades" class="custom-select" style="margin-top: 20px;">
							<option value="Governador Valadares">Governador Valadares</option>
							<option value="Tarumirim">Tarumirim</option>
							<option value="Inhapim">Inhapim</option>
							<option value="Caratinga">Caratinga</option>
						</select>
					</div>
					<div class="col">
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
						</div>
					</div>
				</div>	
			</div>
		</div>
	</header>
	<header id="sub-header" class="navbar navbar-expand" style="background: #ddd; padding: 0px;">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col">
						
					</div>
					<div class="col-8">
						<div class="navbar-nav-scroll">
							<div class="row" style="text-align: center;">
								<div class="col">
									<button class="btn btn-secondary" type="button" aria-haspopup="true">
										Pagina Inicial
									</button>
								</div>
								<div class="col">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Empresa
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button">Action</button>
											<button class="dropdown-item" type="button">Another action</button>
											<button class="dropdown-item" type="button">Something else here</button>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Planos
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button">Action</button>
											<button class="dropdown-item" type="button">Another action</button>
											<button class="dropdown-item" type="button">Something else here</button>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Meus Serviços
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button">Action</button>
											<button class="dropdown-item" type="button">Another action</button>
											<button class="dropdown-item" type="button">Something else here</button>
										</div>
									</div>
								</div>
								<div class="col">
									<button class="btn btn-secondary" type="button" aria-haspopup="true">
										Contato
									</button>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col">
						
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row flex-xl-nowrap">
			<div class="d-none d-xl-block col-xl-2 bd-toc">
				
			</div>
			<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" style="background: #fff;">
				@yield('content')
			</main>
			<div class="d-none d-xl-block col-xl-2 bd-toc">
				
			</div>
		</div>
	</div>
	<footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#">Voltar ao topo</a>
			</p>
			<br><br>
			<center>
				<p>Este é apenas um teste de footer a ser usado</p>
				<p>
					<span class="copyright">© Copyright 2018 by Leonardo Webster. 
					<br>Todos os direitos reservados.</span>
				</p>
			</center>
		</div>
	</footer>
	
	<script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


    <!-- Scripts -->
    @yield('scripts')
</body>
</html>