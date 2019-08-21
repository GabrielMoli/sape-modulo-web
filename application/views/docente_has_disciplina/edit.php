<?php echo form_open('docente_has_disciplina/edit/'.$docente_has_disciplina['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="docente_id" class="col-md-4 control-label">Docente Id</label>
		<div class="col-md-8">
			<input type="text" name="docente_id" value="<?php echo ($this->input->post('docente_id') ? $this->input->post('docente_id') : $docente_has_disciplina['docente_id']); ?>" class="form-control" id="docente_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="disciplina_id" class="col-md-4 control-label">Disciplina Id</label>
		<div class="col-md-8">
			<input type="text" name="disciplina_id" value="<?php echo ($this->input->post('disciplina_id') ? $this->input->post('disciplina_id') : $docente_has_disciplina['disciplina_id']); ?>" class="form-control" id="disciplina_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="codigo" class="col-md-4 control-label">Codigo</label>
		<div class="col-md-8">
			<input type="text" name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $docente_has_disciplina['codigo']); ?>" class="form-control" id="codigo" />
		</div>
	</div>
	<div class="form-group">
		<label for="ano" class="col-md-4 control-label">Ano</label>
		<div class="col-md-8">
			<input type="text" name="ano" value="<?php echo ($this->input->post('ano') ? $this->input->post('ano') : $docente_has_disciplina['ano']); ?>" class="form-control" id="ano" />
		</div>
	</div>
	<div class="form-group">
		<label for="periodo" class="col-md-4 control-label">Periodo</label>
		<div class="col-md-8">
			<input type="text" name="periodo" value="<?php echo ($this->input->post('periodo') ? $this->input->post('periodo') : $docente_has_disciplina['periodo']); ?>" class="form-control" id="periodo" />
		</div>
	</div>
	<div class="form-group">
		<label for="vagas" class="col-md-4 control-label">Vagas</label>
		<div class="col-md-8">
			<input type="text" name="vagas" value="<?php echo ($this->input->post('vagas') ? $this->input->post('vagas') : $docente_has_disciplina['vagas']); ?>" class="form-control" id="vagas" />
		</div>
	</div>
	<div class="form-group">
		<label for="alunos" class="col-md-4 control-label">Alunos</label>
		<div class="col-md-8">
			<input type="text" name="alunos" value="<?php echo ($this->input->post('alunos') ? $this->input->post('alunos') : $docente_has_disciplina['alunos']); ?>" class="form-control" id="alunos" />
		</div>
	</div>
	<div class="form-group">
		<label for="docente_codigo" class="col-md-4 control-label">Docente Codigo</label>
		<div class="col-md-8">
			<input type="text" name="docente_codigo" value="<?php echo ($this->input->post('docente_codigo') ? $this->input->post('docente_codigo') : $docente_has_disciplina['docente_codigo']); ?>" class="form-control" id="docente_codigo" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>