<?php echo form_open('atividade_extraclasse_has_docente/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="atividade_extraclasse_id" class="col-md-4 control-label">Atividade Extraclasse Id</label>
		<div class="col-md-8">
			<input type="text" name="atividade_extraclasse_id" value="<?php echo $this->input->post('atividade_extraclasse_id'); ?>" class="form-control" id="atividade_extraclasse_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="docente_id" class="col-md-4 control-label">Docente Id</label>
		<div class="col-md-8">
			<input type="text" name="docente_id" value="<?php echo $this->input->post('docente_id'); ?>" class="form-control" id="docente_id" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>