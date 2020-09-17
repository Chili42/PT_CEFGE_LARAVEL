@extends('template.template')

@section('content')

		<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">
				<!-- Introdução  -->
				<section id="tm-section-1">
					@if (session('tituloMensagem'))
						<div class="card text-white bg-{{ session('corMensagem') }}">
							<div class="card-header">
								<div class="card-body">
									<h5 class="card-title"><strong>{{ session('tituloMensagem') }}</strong></h5>
									<br>
									<p class="card-text">{{ session('corpoMensagem') }}</p>
								</div>
							</div>
						</div>
					@endif
					<div class="row mb-6">
						<header class="col-xl-12"><h2 class="tm-text-shadow">Cadastra Empregado</h2></header>
						<form action="cadastra-empregado/envia-cadastro" method="POST" id="formCadastrar">
							@csrf
							<div class="form-group">
								<label for="inputMatricula">Matrícula</label>
								<input type="text" class="form-control" id="inputMatricula" name="cadastraMatricula" placeholder="exemplo - c999999" MAXLENGTH=7 minlength="7" required>
							</div>
							<div class="form-group">
								<label for="inputNome">Nome</label>
								<input type="text" class="form-control" id="inputNome" name="cadastraNome"  placeholder="Nome completo" MAXLENGTH=100 required>
							</div>
							<div class="form-group">
								<label for="inputCoordenacao">Coordenação</label>
								<input type="text" class="form-control" id="inputCoordenacao" name="cadastraCoordenacao" placeholder="Digite a coordenação" MAXLENGTH=100 required>
							</div>
							<div class="form-group">
								<label for="inputUnidade">Unidade</label>
								<input type="text" class="form-control" id="inputUnidade" name="cadastraUnidade" placeholder="Digite a unidade" MAXLENGTH=4 minlength="4" required>
							</div>
								<button type="submit" class="btn btn-primary">Salvar</button>
						</form>
					</div>
				</section>

				<!-- Lista Empregados -->
				<section id="tm-section-2" class="tm-section tm-section-carousel">
						<header class="mb-4"><h2 class="tm-text-shadow">Empregados Cadastrados</h2></header>
						<hr>		            
						<div class="tm-img-container">					
							<table class="table table-dark" id="tblEmpregados">
								<thead>
									<tr>
										<th scope="col">Matrícula</th>
										<th scope="col">Nome</th>
										<th scope="col">Coordenação</th>
										<th scope="col">Unidade</th>
										<th scope="col"></th>
									</tr>
								</thead>
								<tbody>
			
								</tbody>
								</table>
						</div>						            		                		          	
				</section>

				<div id="divModais">

				</div>

				<!-- Sobre mim -->
				<section id="tm-section-3" class="tm-section">
					<div class="fadeSW"></div>
					<div class="star-wars">
						<div class="crawl">
							<div class="title">
								<h1>Quem sou eu ?</h1>
							</div>
							<p><b>Lotado na GILIE-SP, faço parte do time que criou o <a href="https://portal.gilie.sp.caixa/" target="_blank" style="color: #3effbb;"><b>Portal GILIE</b></a></p>
							<p>O time de desenvolvimento do portal era inicialmente formado comigo (TBN), 01 Assist. Junior e 01 Assist. Pleno, porém com a saída dos dois assistentes não houve reposição e foi neste momento que tive a experiência que considero mais importante da minha vida profissional na caixa, da noite para o dia eu tive que sair da posição de aprendiz front-end para assumir o portal como desenvolvedor fullstack </p>
							<br>
							<p>Sou formado em Processos Gerenciais pela Anhembi Morumbi e Pós-graduado em - Gestão de TI,<br>
							possuo conhecimentos de HTML, CSS, PHP, Javascript, SQL, Python e um pouco de C.</p>
							<br>
							<p>Desenvolvi diversas ferramentas no portal GILIE, inclusive algo parecido com o que desenvolvi nesta produção tematica, criei a pagina de equipes GILIE <a href="https://portal.gilie.sp.caixa/equipe" target="_blank" style="color: #3effbb;">https://portal.gilie.sp.caixa/equipe</a><br>
							Dentro deste portal existe uma aba gerencial <span style="color: yellow;">(visivel apenas aos gestores das GILIEs)</span>, onde são definidas as atividades dos funcionarios no <a href="https://portal.gilie.sp.caixa/atende/abrir" target="_blank" style="color: #3effbb;">ATENDE GILIE</a> e isto é migrado para aba de equipes <span style="color: yellow;">(até o presentem momento, preenchido apenas pelos gestores da GILIE/SP e GILIE/BR)</span></b></p>				
						</p>
						</div>
					</div>
				<section id="tm-section-3" class="tm-section">
			</div>	<!-- .tm-content -->						
			<footer class="footer-link">
				<p class="tm-copyright-text">Rafael Pimentel Gonçalves - C098453 - PT/CEFGE/Completa </p>
			</footer>
		</div>	<!-- row -->			
	</div>

@endsection