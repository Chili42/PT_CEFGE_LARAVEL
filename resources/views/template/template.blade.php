<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Produção Temática CEFGE JR</title>

    
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> 
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> 
    
    <script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		alert("Por favor, acesso de um navegador moderno, como Chrome ou Firefox..");
   		renderPage = false;
	}
    </script>
</head>

<body>
    	<!-- Carregamento -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- Conteúdo da pagina -->
	<div class="container-fluid tm-main">
        <img src="{{ asset('img/caixa.png') }}" alt="Italian Trulli" style="float: right; width:150px;height:50px;" class="pr-4 pt-4">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro"  id="tmNavLink1" class="scrolly active" data-bg-img="fundoCaixa.jpg"  data-page="#tm-section-1">
									<i class="fas fa-users tm-nav-fa-icon"></i>
									<span>Cadastro</span>
								</a>
							</li>
							<li>
								<a href="empregados" id="tmNavLink2" class="scrolly" data-page="#tm-section-2" data-bg-img="fundoCaixa.jpg">
									<i class="fas fa-list-alt tm-nav-fa-icon"></i>
									<span>Empregados</span>
								</a>
							</li>							
							<li>
								<a href="sobre" class="scrolly" data-bg-img="fundoNebulosa.jpg" data-page="#tm-section-3">
									<i class="far fa-address-card tm-nav-fa-icon"></i>
									<span>Sobre mim</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		@yield('content')
		
		<!-- Scripts -->
		<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
		<script src="{{ asset('slick/slick.min.js') }}"></script>
		<script src="{{ asset('js/template.js') }}"></script>
		<script src="{{ asset('js/cadastro/populaCadastro.js') }}"></script>
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


</body>

</html>