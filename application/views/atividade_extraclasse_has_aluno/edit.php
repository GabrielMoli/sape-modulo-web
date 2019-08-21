<?php echo form_open('atividade_extraclasse_has_aluno/edit/'.$atividade_extraclasse_has_aluno['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="atividade_extraclasse_id" class="col-md-4 control-label">Atividade Extraclasse Id</label>
		<div class="col-md-8">
			<input type="text" name="atividade_extraclasse_id" value="<?php echo ($this->input->post('atividade_extraclasse_id') ? $this->input->post('atividade_extraclasse_id') : $atividade_extraclasse_has_aluno['atividade_extraclasse_id']); ?>" class="form-control" id="atividade_extraclasse_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="aluno_id" class="col-md-4 control-label">Aluno Id</label>
		<div class="col-md-8">
			<input type="text" name="aluno_id" value="<?php echo ($this->input->post('aluno_id') ? $this->input->post('aluno_id') : $atividade_extraclasse_has_aluno['aluno_id']); ?>" class="form-control" id="aluno_id" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>