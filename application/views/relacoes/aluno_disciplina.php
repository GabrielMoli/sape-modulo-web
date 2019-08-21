<!DOCTYPE html>
<html>
<head>
	<title>SPE - Logado</title>
	
	<link rel="stylesheet" href="/sape/assets/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="/sape/assets/js/bootstrap.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="/spe/assets/js/dragndrop.js"></script>
  	<link rel="stylesheet" type="text/css" href="/sape/assets/css/estilointerno.css">

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
		<h2>Cenário: Aluno e Disciplina</h2>
	<div class="row">	
		<h3 class="col-md-6">Selecione Atributos e Arraste</h3>
		<h3 class="col-md-6">Solte Aqui</h3>
		<h4 id="mostraResult"></h4>
		<h4 id="mostraResult2"></h4>

	</div>

	<div class="row">

		<div class="d-flex flex-wrap campo-inicial col-md-6 ui-helper-reset ui-helper-clearfix" id="campoInicial">	
				
				<!-- Atributo da tabela disciplina -->

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo"> Disciplina </label>
						<input type="hidden" name="checked[]" value="disciplina.id">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="Código da Disciplina">
					</div>	


					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Ano de Ingresso</label>
						<input type="hidden" name="checked[]" value="aluno.ano_ingresso">
						<input class="inputAtributo" type="number" style="display: none;" name="input[]" placeholder="Ex: 2012">
					</div>

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Semestre Ingresso</label>
						<input type="hidden" name="checked[]" value="aluno.semestre_ingresso">
							<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="1">Primeiro</option>
							<option value="2">Segundo</option>
						</select>
					</div>
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Ano de Nascimento</label>
						<input type="hidden" name="checked[]" value="aluno.ano_nascimento">
						<input class="inputAtributo" type="number" style="display: none;" name="input[]">
					</div>	
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Sexo</label>
						<input type="hidden" name="checked[]" value="aluno.sexo">
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="0">Feminino</option>
							<option value="1">Masculino</option>
						</select>
					</div>	
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Forma de Ingresso</label>
						<input type="hidden" name="checked[]" value="aluno.forma_ingresso_id">
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="0">Regular</option>
							<option value="1">Transferência</option>
						</select>
					</div>	
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Cota</label>
						<input type="hidden" name="checked[]" value="aluno.tipo_cota_id">
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="1">Sem Cota</option>
							<option value="2">Ampla Concorrência</option>
							<option value="3">Aluno de Escola Pública com renda > 1,5 SM por pessoa</option>
							<option value="4">Aluno de Escola Pública com renda <= 1,5 SM por pessoa</option>
							<option value="5">Aluno de Escola Pública com renda <= 1,5 SM por pessoa, autodeclarado preto, pardo ou indígena</option>
							<option value="6">Alunos de Escola Pública, sem comprovação renda</option>
							<option value="7">Aluno de Escola Pública, com deficiência e com renda > 1,5 SM por pessoa, autodeclarado preto, pardo ou indígena</option>
							<option value="8">Aluno de Escola Pública, com deficiência e com renda <= 1,5 SM por pessoa</option>
							<option value="9">Alunos de Escola Pública, sem comprovação renda, autodeclarado preto, pardo ou indígena</option>
						</select>
					</div>	
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Etnia</label>
						<input type="hidden" name="checked[]" value="aluno.cor_raca_id">
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="1">Não dispõe da informação</option>
							<option value="2">Não declarou</option>
							<option value="3">Branco</option>
							<option value="4">Pardo</option>
							<option value="5">Preto</option>
						</select>
					</div>	
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Renda Familiar</label>
						<input type="hidden" name="checked[]" value="aluno.faixa_renda_familiar_id">
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="1">De 1 a 2 salários</option>
							<option value="3">De 2 a 3 salários</option>
							<option value="4">De 3 a 5 salários</option>
							<option value="5">De 5 a 10 salários</option>
							<option value="2">De 10 a 20 salários</option>
						</select>
					</div>	
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Renda Familiar Per Capta</label>
						<input type="hidden" name="checked[]" value="aluno.faixa_renda_pc_id">
						
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="5">RFP <= 0,5 SM</option>
							<option value="1">0,5 SM < RFP <= 1 SM</option>
							<option value="2">1 SM < RFP <= 1,5 SM</option>
							<option value="3">1,5 SM < RFP <= 2,5 SM</option>
							<option value="4">2,5 SM < RFP <= 3 SM</option>
							<option value="6">RFP > 3 SM</option>
						</select>

					</div>	
					
					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Escola de Origem</label>
						<input type="hidden" name="checked[]" value="aluno.escola_origem_id">
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="1">Filantrópica</option>
							<option value="2">Privada</option>
							<option value="3">Pública Estadual</option>
							<option value="4">Pública Federal</option>
							<option value="5">Pública Municipal</option>
							<option value="6">Supletivo</option>
						</select>
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Matriz Curricular</label>
						<input type="hidden" name="checked[]" value="aluno.matriz_curricular">
						<input class="inputAtributo" style="display: none;" name="input[]" type="text" placeholder="Insira o código da Matriz">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Distância em KM</label>
						<input type="hidden" name="checked[]" value="aluno.distancia_km">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="Insira o número de KM">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Horas de Deslocamento</label>
						<input type="hidden" name="checked[]" value="aluno.horas_desloc">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" placeholder="Insira o número de horas">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Minutos de Deslocamento</label>
						<input type="hidden" name="checked[]" value="aluno.min_desloc">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" placeholder="Insira o número de minutos">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Cidade de Origem</label>
						<input type="hidden" name="checked[]" value="aluno.cidade_id">
						<select class="inputAtributo" style="display: none;" name="input[]">
							<option value="1">Alvorada - RS</option>
							<option value="2">Arrorio dos Ratos - RS</option>
							<option value="3">Butia - RS</option>
							<option value="4">Canoas - RS</option>
							<option value="5">Charqueadas - RS</option>
							<option value="6">Eldorado do Sul - RS</option>
							<option value="7">Esteio - RS</option>
							<option value="8">General Camara - RS</option>
							<option value="9">Guaiba - RS</option>
							<option value="10">Minas do Leao - RS</option>
							<option value="11">Novo Hamburgo - RS</option>
							<option value="12">Porto Alegre - RS</option>
							<option value="13">Sao Jeronimo - RS</option>
							<option value="14">Sao leopoldo - RS</option>
							<option value="15">Sapucaia do Sul - RS</option>
							<option value="16">Triunfo - RS</option>
						</select>
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">Percentual de Frequência</label>
						<input type="hidden" name="checked[]" value="aluno.percentual_frequencia">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="Insira a Frequência">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">CH Obrigatória Exigida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_obr_exigida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH Obrigatória do curso">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo">CH Obrigatória Cumprida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_obr_cumprida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH OBR Cumprida">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo"> CH Estágio Exigida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_est_exigida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH Estágio exigida">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo"> CH Estágio Cumprida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_est_cumprida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH Estágio Cumprida">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo"> CH TCC Exigida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_tcc_exigida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH TCC Exigida">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo"> CH TCC Cumprida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_tcc_cumprida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH TCC Cumprida">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo"> CH Total Exigida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_tot_exigida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH Total Exigida">
					</div>	

					<div class="caixa_atributo drag">
	 					<label for="nomeAtributo"> CH Total Cumprida</label>
						<input type="hidden" name="checked[]" value="aluno.ch_tot_cumprida">
						<input class="inputAtributo" style="display: none;" name="input[]" type="number" step="any" placeholder="CH Total Cumprida">
					</div>	

		</div>

		
		<div class="col-md-6 campo-drop drop d-flex flex-wrap-reverse ui-widget-content ui-state-default" id="drop" name="campo-drop">
			<form action="/sape/Aluno_disciplina/chamarWeka" method="POST">
				<input style="display: none" type="submit" name="enviar" id="botao">
			</form>

 		</div>	
	</div>
</div>

	<?php 
    
    if (isset($_POST['enviar'])) {
	
		$this->load->library('session'); 

		$result = $_SESSION['saida'];
		$result2 = $_SESSION["saida2"]; 

		echo $result2;
    }
	
		?>
		<script type="text/javascript">
			var resultado = "<?php echo $result;?>";
			$('#mostraResult').html(resultado);

			var resultado2 = "<?php echo $result2;?>";
			$('#mostraResult2').html(resultado2);
		
		</script>

</body>

</html>


