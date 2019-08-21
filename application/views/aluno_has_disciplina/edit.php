<?php echo form_open('aluno_has_disciplina/edit/'.$aluno_has_disciplina['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="aluno_id" class="col-md-4 control-label">Aluno Id</label>
		<div class="col-md-8">
			<input type="text" name="aluno_id" value="<?php echo ($this->input->post('aluno_id') ? $this->input->post('aluno_id') : $aluno_has_disciplina['aluno_id']); ?>" class="form-control" id="aluno_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="disciplina_id" class="col-md-4 control-label">Disciplina Id</label>
		<div class="col-md-8">
			<input type="text" name="disciplina_id" value="<?php echo ($this->input->post('disciplina_id') ? $this->input->post('disciplina_id') : $aluno_has_disciplina['disciplina_id']); ?>" class="form-control" id="disciplina_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="codigo" class="col-md-4 control-label">Codigo</label>
		<div class="col-md-8">
			<input type="text" name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $aluno_has_disciplina['codigo']); ?>" class="form-control" id="codigo" />
		</div>
	</div>
	<div class="form-group">
		<label for="ano" class="col-md-4 control-label">Ano</label>
		<div class="col-md-8">
			<input type="text" name="ano" value="<?php echo ($this->input->post('ano') ? $this->input->post('ano') : $aluno_has_disciplina['ano']); ?>" class="form-control" id="ano" />
		</div>
	</div>
	<div class="form-group">
		<label for="periodo" class="col-md-4 control-label">Periodo</label>
		<div class="col-md-8">
			<input type="text" name="periodo" value="<?php echo ($this->input->post('periodo') ? $this->input->post('periodo') : $aluno_has_disciplina['periodo']); ?>" class="form-control" id="periodo" />
		</div>
	</div>
	<div class="form-group">
		<label for="nota" class="col-md-4 control-label">Nota</label>
		<div class="col-md-8">
			<input type="text" name="nota" value="<?php echo ($this->input->post('nota') ? $this->input->post('nota') : $aluno_has_disciplina['nota']); ?>" class="form-control" id="nota" />
		</div>
	</div>
	<div class="form-group">
		<label for="frequencia" class="col-md-4 control-label">Frequencia</label>
		<div class="col-md-8">
			<input type="text" name="frequencia" value="<?php echo ($this->input->post('frequencia') ? $this->input->post('frequencia') : $aluno_has_disciplina['frequencia']); ?>" class="form-control" id="frequencia" />
		</div>
	</div>
	<div class="form-group">
		<label for="situacao" class="col-md-4 control-label">Situacao</label>
		<div class="col-md-8">
			<input type="text" name="situacao" value="<?php echo ($this->input->post('situacao') ? $this->input->post('situacao') : $aluno_has_disciplina['situacao']); ?>" class="form-control" id="situacao" />
		</div>
	</div>
	<div class="form-group">
		<label for="hash_aluno" class="col-md-4 control-label">Hash Aluno</label>
		<div class="col-md-8">
			<input type="text" name="hash_aluno" value="<?php echo ($this->input->post('hash_aluno') ? $this->input->post('hash_aluno') : $aluno_has_disciplina['hash_aluno']); ?>" class="form-control" id="hash_aluno" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>