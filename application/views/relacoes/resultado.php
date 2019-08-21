<!DOCTYPE html>
<html>
<head>
	<title>SAPE - Logado</title>

	<link rel="stylesheet" href="/sape/assets/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="/sape/assets/js/bootstrap.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<link rel="stylesheet" type="text/css" href="/sape/assets/css/estilointerno.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	  
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
		<h1>Página de Resultados</h1>
		<p>Nesta página será mostrado um relatório com os resultados obtidos através do teste realizado.</p>

		<div id="alg1" class="col-md-6">
			<br>
			<h4>Algoritmo 1: </h4>
			<p> <b>Precisão: </b> <?php 
			
			echo substr($resultado_mlp[1],-10);  
			$size = strlen($resultado_mlp[10]);  ?> de chances de acerto.</p>
			
			<br>
			<p id="resultado_mlp"> <b>Probabilidade de evasão: </b> <?php echo $resultado_mlp[10]; ?> </p>
			<br>
			<p id="feedback_mlp"></p>
			<img id="icone_mlp">
			<script type="text/javascript">
				var $resultado = "<?php	echo substr($resultado_mlp[10],0,$size-1) ?>";
				
				if ($resultado < 50.0) {
					$('#resultado_mlp').css({color:"#008000" });
					$('#feedback_mlp').html("Segundo este algoritmo, a probabilidade do aluno testado evadir é inferior a 50% e isto é um bom indício!");
					$('#icone_mlp').attr('src', '/sape/assets/img/like.ico');
				}else{
					$('#resultado_mlp').css({color:"#ff0000" });
					$('#feedback_mlp').html("Segundo este algoritmo, a probabilidade do aluno testado evadir é superior a 50% e isto não é um bom indício!");
					$('#icone_mlp').attr('src', '/sape/assets/img/dislike.ico');
				}
			</script>
		</div>

		<div id="alg2" class="col-md-6">
			<br>
			<h4>Algoritmo 2: </h4>
			<p> <b>Precisão: </b> <?php echo substr($resultado_j48[1],-10);  
			$size = strlen($resultado_j48[10]);  ?> de chances de acerto.</p>
			<br>
			<p id="resultado_j48"> <b>Probabilidade de evasão: </b> <?php echo $resultado_j48[10]; ?> </p>
			<br>
			<p id="feedback_j48"></p>
			<img id="icone_j48">
			<script type="text/javascript">
				var $resultado = "<?php	echo substr($resultado_j48[10],0,$size-1) ?>";
				
				if ($resultado < 50.0) {
					$('#resultado_j48').css({color:"#008000" });
					$('#feedback_j48').html("Segundo este algoritmo, a probabilidade do aluno testado evadir é inferior a 50% e isto é um bom indício!");
					$('#icone_j48').attr('src', '/sape/assets/img/like.ico');
				}else{
					$('#resultado_j48').css({color:"#ff0000" });
					$('#feedback_j48').html("Segundo este algoritmo, a probabilidade do aluno testado evadir é superior a 50% e isto não é um bom indício!");
					$('#icone_j48').attr('src', '/sape/assets/img/dislike.ico');
				}
			</script>
		</div>
	</div>
</div>


</body>

</html>




