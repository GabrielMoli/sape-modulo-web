<!DOCTYPE html>
<html>
<head>
	<title>SPE - Logado</title>

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

<div class="container">
	<h3>SPE - Selecionar Variáveis</h3>
	<p>Relação Aluno X Atividade Extraclasse</p>	
	<div class="row">
		<div class="col-md-6">	
			<h5>Selecione os campos do aluno</h5>
			<form method="POST" action="/spe/Aluno_atividade/chamarWeka">
				<ul>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.ano_ingresso" name="checked[]">Ano Ingresso</label>
					</div>
					<div class="form-control ano_ingresso" >
						<label>
							Ano Ingresso:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.semestre_ingresso" name="checked[]">Semestre Ingresso</label>
					</div>
					<div class="form-control semestre_ingresso" >
						<label>
							Semestre Ingresso:
							<input type="text" placeholder="Informe 1 ou 2" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.ano_nascimento" name="checked[]">Ano de Nascimento</label>
					</div>
					<div class="form-control ano_nascimento">
						<label>
							Ano de Nascimento:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.sexo" name="checked[]">Sexo</label>
					</div>
					<div class="form-control">
						<label>
							Sexo:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.forma_ingresso_id" name="checked[]">Forma de Ingresso</label>
					</div>
					<div class="form-control">
						<label>
							Forma de Ingresso:
							<input type="text" name="input[]" >
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.tipo_cota_id" name="checked[]">Tipo de Cota</label>
					</div>
					<div class="form-control">
						<label>
							Tipo de Cota:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.cor_raca_id" name="checked[]">Etnia</label>
					</div>
					<div class="form-control">
						<label>
							Etnia:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.faixa_renda_familiar_id" name="checked[]">Faixa da Renda Familiar</label>
					</div>
					<div class="form-control">
						<label>
							Faixa da Renda Familiar:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.faixa_renda_pc_id" name="checked[]">Faixa da Renda Per Capta</label>
					</div>
					<div class="form-control">
						<label>
							Faixa da Renda Per Capta:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.escola_origem_id" name="checked[]">Escola de Origem</label>
					</div>
					<div class="form-control">
						<label>
							Escola de Origem:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.matriz_curricular_id" name="checked[]">Matriz Curricular</label>
					</div>
					<div class="form-control">
						<label>
							Matriz Curricular:
							<input type="text" name="input[]" >
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.distancia_km" name="checked[]">Distância em KM</label>
					</div>
					<div class="form-control">
						<label>
							Distância em KM:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.distancia_km" name="checked[]">Distância em KM</label>
					</div>
					<div class="form-control">
						<label>
							Distância em KM:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.horas_desloc" name="checked[]">Horas de Deslocamento</label>
					</div>
					<div class="form-control">
						<label>
							Horas de Deslocamento:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.min_desloc" name="checked[]">Minutos de Deslocamento</label>
					</div>
					<div class="form-control">
						<label>
							Minutos de Deslocamento:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.cidade_id" name="checked[]">Cidade</label>
					</div>
					<div class="form-control">
						<label>
							Cidade:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="aluno.percentual_frequencia" name="checked[]">Percentual de Frequencia</label>
					</div>
					<div class="form-control">
						<label>
							Percentual de Frequencia:
							<input type="text" name="input[]">
						</label>
					</div>
				</ul>
		</div>
		<div class="col-md-6">
			<h5>Selecione os campos da atividade</h5>
				<ul>
					<div class="checkbox">
					  <label><input type="checkbox" value="atividade_extraclasse.duracao" name="checked[]">Duração</label>
					</div>
					<div class="form-control">
						<label>
							Duração:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="atividade_extraclasse.remuneracao" name="checked[]">Remuneração</label>
					</div>
					<div class="form-control">
						<label>
							Remuneração:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="atividade_extraclasse.area_conhecimento_id" name="checked[]">Área do Conhecimento</label>
					</div>
					<div class="form-control">
						<label>
							Área do Conhecimento:
							<input type="text" name="input[]">
						</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="atividade_extraclasse.tipo_atividade_id" name="checked[]">Tipo de Atividade</label>
					</div>
					<div class="form-control">
						<label>
							Tipo de Atividade:
							<input type="text" name="input[]">
						</label>
					</div>
				</ul>
				<input type="submit" value="enviar">
			</form>
		</div>

	  </div>	
	</div>
</div>

</body>

</html>




