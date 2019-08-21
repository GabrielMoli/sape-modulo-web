<?php echo form_open('docente/edit/'.$docente['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="efetivo" class="col-md-4 control-label">Efetivo</label>
		<div class="col-md-8">
			<input type="checkbox" name="efetivo" value="1" <?php echo ($docente['efetivo']==1 ? 'checked="checked"' : ''); ?> id='efetivo' />
		</div>
	</div>
	<div class="form-group">
		<label for="codigo" class="col-md-4 control-label">Codigo</label>
		<div class="col-md-8">
			<input type="text" name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $docente['codigo']); ?>" class="form-control" id="codigo" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>