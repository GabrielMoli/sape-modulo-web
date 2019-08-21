<?php echo form_open('/sape/disciplina/edit/'.$disciplina['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $disciplina['nome']); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch" class="col-md-4 control-label">Ch</label>
		<div class="col-md-8">
			<input type="text" name="ch" value="<?php echo ($this->input->post('ch') ? $this->input->post('ch') : $disciplina['ch']); ?>" class="form-control" id="ch" />
		</div>
	</div>
	<div class="form-group">
		<label for="codigo" class="col-md-4 control-label">Codigo</label>
		<div class="col-md-8">
			<input type="text" name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $disciplina['codigo']); ?>" class="form-control" id="codigo" />
		</div>
	</div>
	<div class="form-group">
		<label for="tipo" class="col-md-4 control-label">Tipo</label>
		<div class="col-md-8">
			<input type="text" name="tipo" value="<?php echo ($this->input->post('tipo') ? $this->input->post('tipo') : $disciplina['tipo']); ?>" class="form-control" id="tipo" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>