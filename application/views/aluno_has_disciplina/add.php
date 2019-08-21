<?php echo form_open('aluno_has_disciplina/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="aluno_id" class="col-md-4 control-label">Aluno Id</label>
		<div class="col-md-8">
			<input type="text" name="aluno_id" value="<?php echo $this->input->post('aluno_id'); ?>" class="form-control" id="aluno_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="disciplina_id" class="col-md-4 control-label">Disciplina Id</label>
		<div class="col-md-8">
			<input type="text" name="disciplina_id" value="<?php echo $this->input->post('disciplina_id'); ?>" class="form-control" id="disciplina_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="codigo" class="col-md-4 control-label">Codigo</label>
		<div class="col-md-8">
			<input type="text" name="codigo" value="<?php echo $this->input->post('codigo'); ?>" class="form-control" id="codigo" />
		</div>
	</div>
	<div class="form-group">
		<label for="ano" class="col-md-4 control-label">Ano</label>
		<div class="col-md-8">
			<input type="text" name="ano" value="<?php echo $this->input->post('ano'); ?>" class="form-control" id="ano" />
		</div>
	</div>
	<div class="form-group">
		<label for="periodo" class="col-md-4 control-label">Periodo</label>
		<div class="col-md-8">
			<input type="text" name="periodo" value="<?php echo $this->input->post('periodo'); ?>" class="form-control" id="periodo" />
		</div>
	</div>
	<div class="form-group">
		<label for="nota" class="col-md-4 control-label">Nota</label>
		<div class="col-md-8">
			<input type="text" name="nota" value="<?php echo $this->input->post('nota'); ?>" class="form-control" id="nota" />
		</div>
	</div>
	<div class="form-group">
		<label for="frequencia" class="col-md-4 control-label">Frequencia</label>
		<div class="col-md-8">
			<input type="text" name="frequencia" value="<?php echo $this->input->post('frequencia'); ?>" class="form-control" id="frequencia" />
		</div>
	</div>
	<div class="form-group">
		<label for="situacao" class="col-md-4 control-label">Situacao</label>
		<div class="col-md-8">
			<input type="text" name="situacao" value="<?php echo $this->input->post('situacao'); ?>" class="form-control" id="situacao" />
		</div>
	</div>
	<div class="form-group">
		<label for="hash_aluno" class="col-md-4 control-label">Hash Aluno</label>
		<div class="col-md-8">
			<input type="text" name="hash_aluno" value="<?php echo $this->input->post('hash_aluno'); ?>" class="form-control" id="hash_aluno" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>