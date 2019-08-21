
<html>

 <head>
  <title>Login SAPE</title>

	<link rel="stylesheet" href="/sape/assets/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="/sape/assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/sape/assets/css/login.css">

 </head>

<body> 
<div class="row">
	<div class="container formulario">
		<h1 class="logo"> <img src="/sape/assets/img/logo.png"><br>Sistema de Apoio à Evasão</h1>
		<h2> Acessar Painel </h2>
		<form action="<?php echo site_url('sape/Usuario/logar');?>" method="post">
			<div class="form-group">
				<label for="email" class="col-md-4 control-label"><span class="text-danger">*</span>E-mail</label>
				<div class="col-md-6">
					<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
					<span class="text-danger"><?php echo form_error('email');?></span>
				</div>
			</div>
			<div class="form-group">
				<label for="senha" class="col-md-4 control-label"><span class="text-danger">*</span>Senha</label>
				<div class="col-md-6">
					<input type="password" name="senha" value="<?php echo $this->input->post('senha'); ?>" class="form-control" id="senha" />
					<span class="text-danger"><?php echo form_error('senha');?></span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-success">Logar</button>
		        </div>
			</div>
		</form>	
	</div>
</div>
</body>

</html> 

