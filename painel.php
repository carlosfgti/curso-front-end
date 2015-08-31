<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Painel | EspecializaTi</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/especializati.css">
	<link rel="stylesheet" type="text/css" href="css/especializati-responsivo.css">

	<!--JQuery-->
	<script src="js/jquery.js"></script>
</head>
<body class="bg-padrao">

	<header>
		<h1 class="oculta">Painel | EspecializaTi</h1>
	</header>

	<section class="painel">
		<h1 class="oculta">Painel | EspecializaTi</h1>

		<div class="topo-painel col-md-12">
			<a href="" class="icon-acoes-painel">
				<i class="fa fa-expand"></i>
			</a>

			<img src="imgs/logo-especializati.png" class="logo-painel" alt="Logo EspecializaTi" title="Painel EspecializaTi">


			<select class="acoes-painel">
				<option>Usuário Logado</option>
				<option class="sair">Sair</option>
			</select>
		</div>
		<!--End Top-->

		<div class="clear"></div>


		<div class="menu-painel col-md-2">
			<ul class="menu-painel-ul">
				<li>
					<a href=""><i class="fa fa-tachometer"></i> Dashboard</a>
				</li>
				<li>
					<a href=""><i class="fa fa-user-secret"></i> Meu Perfil</a>
				</li>
				<li>
					<a href=""><i class="fa fa-user"></i> Alunos</a>
				</li>
				<li>
					<a href=""><i class="fa fa-user-times"></i> Pais</a>
				</li>
				<li>
					<a href=""><i class="fa fa-users"></i> Usuários</a>
				</li>
				<li>
					<a href="?pag=produtos"><i class="fa fa-diamond"></i> Produtos</a>
				</li>
				<li>
					<a href=""><i class="fa fa-sign-out"></i> Sair</a>
				</li>
			</ul>
		</div>
		<!--End menu-->

		<section class="conteudo col-md-10">
			<div class="cont">
				<?php
					if( !isset($_GET) ){
						include('pags/relatorios.php');
					}elseif( isset($_GET['pag']) && file_exists("pags/{$_GET['pag']}.php") ){
						include("pags/{$_GET['pag']}.php");
					}else{
						echo 'Página Não Encontrada!';
					}
				?>
			</div>
		</section>
		<!--End Conteúdo-->
	</section>


	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>