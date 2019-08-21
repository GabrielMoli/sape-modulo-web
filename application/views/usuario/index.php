
<!DOCTYPE html>
<html>
<head>
	<title>SAPE - Logado</title>

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
			      <a class="nav-item nav-link" href="/sape/logado">Cadastro Dados</a>
			      <a class="nav-item nav-link" href="/sape/usuario/sair">Sair </a>    
			    </div>
			  </div>
			</nav>
		</div>
	</div>

<div class="container">

	<div class="row">
		
		<div class="pull-right">
			<a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success">Add</a> 
		</div>

		<table class="table table-striped table-bordered">
		    <tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Senha</th>
				<th>Funcao</th>
				<th>Cpf</th>
				<th>Actions</th>
		    </tr>
			<?php foreach($usuario as $u){ ?>
		    <tr>
				<td><?php echo $u['id']; ?></td>
				<td><?php echo $u['nome']; ?></td>
				<td><?php echo $u['email']; ?></td>
				<td><?php echo $u['senha']; ?></td>
				<td><?php echo $u['funcao']; ?></td>
				<td><?php echo $u['cpf']; ?></td>
				<td>
		            <a href="<?php echo site_url('/sape/usuario/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
		            <a href="<?php echo site_url('/sape/usuario/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
		        </td>
		    </tr>
			<?php } ?>
		</table>
		
	</div>


</div>

</body>

</html>




