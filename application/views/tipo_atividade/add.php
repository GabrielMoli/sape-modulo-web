<?php echo form_open('tipo_atividade/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="setor_responsavel" class="col-md-4 control-label">Setor Responsavel</label>
		<div class="col-md-8">
			<input type="text" name="setor_responsavel" value="<?php echo $this->input->post('setor_responsavel'); ?>" class="form-control" id="setor_responsavel" />
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>