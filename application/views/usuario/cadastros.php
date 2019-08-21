<!DOCTYPE html>
<html>
<head>
	<title>SAPE - Cadastro de Dados</title>

	<link rel="stylesheet" href="/sape/assets/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="/sape/assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/sape/assets/css/logado.css">
</head>

<body>

		<div class="row menu">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">SAPE</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link" href="/sape/logado">Início</a>
			      <a class="nav-item nav-link" href="/sape/usuario/edit/<?php 	$this->load->library('session'); echo $_SESSION['id_usuario']; ?>">Editar Perfil</a>
			      <a class="nav-item nav-link" href="/sape/usuario/add">Cadastro Usuário</a>
			      <a class="nav-item nav-link" href="/sape/logado/cadastrar">Cadastro Dados</a>
			      <a class="nav-item nav-link" href="/sape/usuario/sair">Sair </a>    
			    </div>
			  </div>
			</nav>
		</div>
	</div>


<div class="container">
	<div class="row">
			<div class="col-md-12 conteudo">
				<h2>Cadastro de Dados</h2>
				<p>Nesta página você irá selecionar um link para ser redirecionado a uma página para o cadastro de novos dados no sistema.</p>
				<ul>
					<li><p><a href="/sape/aluno">Dados de Alunos</a></p></li>
					<li><p><a href="/sape/docente">Dados de Docentes</a></p></li>
					<li><p><a href="/sape/disciplina">Dados de Disciplinas</a></p></li>
					<li><p><a href="/sape/atividade_extraclasse">Dados de Atividades Extraclasse</a></p></li>
					<li><p><a href="/sape/cidades">Dados de Cidades</a></p></li>
				</ul>
			</div>		
	</div>
</div>

</body>

</html>