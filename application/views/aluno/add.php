<?php echo form_open('/sape/aluno/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="situacao_matricula_id" class="col-md-4 control-label">Situacao Matricula Id</label>
		<div class="col-md-8">
			<select name="situacao_matricula_id" class="form-control">
				<option value="">select</option>
				<?php 
				$situacao_matricula_id_values = array(
					'6'=>'Evadido',
					'7'=>'Formado',
					'8'=>'Matriculado',
				);

				foreach($situacao_matricula_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('situacao_matricula_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="semestre_ingresso" class="col-md-4 control-label">Semestre Ingresso</label>
		<div class="col-md-8">
			<select name="semestre_ingresso" class="form-control">
				<option value="">select</option>
				<?php 
				$semestre_ingresso_values = array(
					'1'=>'Primeiro',
					'2'=>'Segundo',
				);

				foreach($semestre_ingresso_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('semestre_ingresso')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="sexo" class="col-md-4 control-label">Sexo</label>
		<div class="col-md-8">
			<select name="sexo" class="form-control">
				<option value="">select</option>
				<?php 
				$sexo_values = array(
					'0'=>'Feminino',
					'1'=>'Masculino',
				);

				foreach($sexo_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('sexo')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="forma_ingresso_id" class="col-md-4 control-label">Forma Ingresso Id</label>
		<div class="col-md-8">
			<select name="forma_ingresso_id" class="form-control">
				<option value="">select</option>
				<?php 
				$forma_ingresso_id_values = array(
					'0'=>'Regular',
					'1'=>'Transferência Externa',
				);

				foreach($forma_ingresso_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('forma_ingresso_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="tipo_cota_id" class="col-md-4 control-label">Tipo Cota Id</label>
		<div class="col-md-8">
			<select name="tipo_cota_id" class="form-control">
				<option value="">select</option>
				<?php 
				$tipo_cota_id_values = array(
					'0'=>'Não Possui',
					'1'=>'Ampla Concorrência',
				);

				foreach($tipo_cota_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('tipo_cota_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="cor_raca_id" class="col-md-4 control-label">Cor Raca Id</label>
		<div class="col-md-8">
			<select name="cor_raca_id" class="form-control">
				<option value="">select</option>
				<?php 
				$cor_raca_id_values = array(
					'1'=>'Não dispõe da informação',
					'2'=>'Não quis declarar',
					'3'=>'Branca',
					'4'=>'Parda',
					'5'=>'Preta',
				);

				foreach($cor_raca_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('cor_raca_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="faixa_renda_familiar_id" class="col-md-4 control-label">Faixa Renda Familiar Id</label>
		<div class="col-md-8">
			<select name="faixa_renda_familiar_id" class="form-control">
				<option value="">select</option>
				<?php 
				$faixa_renda_familiar_id_values = array(
					'1'=>'1 a 2 salários',
					'3'=>'2 a 3 salários',
					'4'=>'3 a 5 salários',
					'5'=>'5 a 10 salários',
					'2'=>'10 a 20 salários',
				);

				foreach($faixa_renda_familiar_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('faixa_renda_familiar_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="faixa_renda_pc_id" class="col-md-4 control-label">Faixa Renda Pc Id</label>
		<div class="col-md-8">
			<select name="faixa_renda_pc_id" class="form-control">
				<option value="">select</option>
				<?php 
				$faixa_renda_pc_id_values = array(
					'1'=>'0,5 SM < RFP <= 1 SM',
					'2'=>'1 SM < RFP <= 1,5 SM',
					'3'=>'1,5 SM < RFP <= 2,5 SM',
					'4'=>'2,5 SM < RFP <= 3 SM',
					'5'=>'RFP <= 0,5 SM',
					'6'=>'RFP > 3 SM',
				);

				foreach($faixa_renda_pc_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('faixa_renda_pc_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="escola_origem_id" class="col-md-4 control-label">Escola Origem Id</label>
		<div class="col-md-8">
			<select name="escola_origem_id" class="form-control">
				<option value="">select</option>
				<?php 
				$escola_origem_id_values = array(
					'1'=>'Filantrópica',
					'2'=>'Privada',
					'3'=>'Pública Estadual',
					'4'=>'Pública Federal',
					'5'=>'Pública Municipal',
					'6'=>'Supletivo',
				);

				foreach($escola_origem_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('escola_origem_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="matriz_curricular_id" class="col-md-4 control-label">Matriz Curricular Id</label>
		<div class="col-md-8">
			<select name="matriz_curricular_id" class="form-control">
				<option value="">select</option>
				<?php 
				$matriz_curricular_id_values = array(
					'3453'=>'Sistemas para a Internet (2011/1)',
					'4648'=>'Sistemas para a Internet (2011/1) - (2013/1)',
					'5074'=>'Sistemas para a Internet (2011/1) - (2013/2)',
					'5320'=>'Sistemas para a Internet (2011/1) - (2014/1)',
					'5494'=>'Sistemas para a Internet (2011/1) - (2014/2)',
					'6261'=>'Sistemas para a Internet (2015/1)',
				);

				foreach($matriz_curricular_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('matriz_curricular_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="cidade_id" class="col-md-4 control-label">Cidade Id</label>
		<div class="col-md-8">
			<select name="cidade_id" class="form-control">
				<option value="">select</option>
				<?php 
				$cidade_id_values = array(
					'1'=>'Alvorada - RS',
					'2'=>'Arroio dos Ratos - RS',
					'3'=>'Butia - RS',
					'4'=>'Canoas - RS',
					'5'=>'Charqueadas - RS',
					'6'=>'Eldorado do Sul - RS',
					'7'=>'Esteio - RS',
					'8'=>'General Câmara - RS',
					'9'=>'Guaiba - RS',
					'10'=>'Minas do Leão - RS',
					'11'=>'Novo Hamburgo - RS',
					'12'=>'Porto Alegre - RS',
					'13'=>'São Jerônimo - RS',
					'14'=>'São Leopoldo - RS',
					'15'=>'Sapucaia do Sul - RS',
					'16'=>'Triunfo - RS',
				);

				foreach($cidade_id_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('cidade_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="ano_ingresso" class="col-md-4 control-label">Ano Ingresso</label>
		<div class="col-md-8">
			<input type="text" name="ano_ingresso" value="<?php echo $this->input->post('ano_ingresso'); ?>" class="form-control" id="ano_ingresso" />
		</div>
	</div>
	<div class="form-group">
		<label for="ano_nascimento" class="col-md-4 control-label">Ano Nascimento</label>
		<div class="col-md-8">
			<input type="text" name="ano_nascimento" value="<?php echo $this->input->post('ano_nascimento'); ?>" class="form-control" id="ano_nascimento" />
		</div>
	</div>
	<div class="form-group">
		<label for="distancia_km" class="col-md-4 control-label">Distancia Km</label>
		<div class="col-md-8">
			<input type="text" name="distancia_km" value="<?php echo $this->input->post('distancia_km'); ?>" class="form-control" id="distancia_km" />
		</div>
	</div>
	<div class="form-group">
		<label for="horas_desloc" class="col-md-4 control-label">Horas Desloc</label>
		<div class="col-md-8">
			<input type="text" name="horas_desloc" value="<?php echo $this->input->post('horas_desloc'); ?>" class="form-control" id="horas_desloc" />
		</div>
	</div>
	<div class="form-group">
		<label for="min_desloc" class="col-md-4 control-label">Min Desloc</label>
		<div class="col-md-8">
			<input type="text" name="min_desloc" value="<?php echo $this->input->post('min_desloc'); ?>" class="form-control" id="min_desloc" />
		</div>
	</div>
	<div class="form-group">
		<label for="percentual_frequencia" class="col-md-4 control-label">Percentual Frequencia</label>
		<div class="col-md-8">
			<input type="text" name="percentual_frequencia" value="<?php echo $this->input->post('percentual_frequencia'); ?>" class="form-control" id="percentual_frequencia" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_obr_exigida" class="col-md-4 control-label">Ch Obr Exigida</label>
		<div class="col-md-8">
			<input type="text" name="ch_obr_exigida" value="<?php echo $this->input->post('ch_obr_exigida'); ?>" class="form-control" id="ch_obr_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_obr_cumprida" class="col-md-4 control-label">Ch Obr Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="ch_obr_cumprida" value="<?php echo $this->input->post('ch_obr_cumprida'); ?>" class="form-control" id="ch_obr_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_opt_exigida" class="col-md-4 control-label">Ch Opt Exigida</label>
		<div class="col-md-8">
			<input type="text" name="ch_opt_exigida" value="<?php echo $this->input->post('ch_opt_exigida'); ?>" class="form-control" id="ch_opt_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_opt_cumprida" class="col-md-4 control-label">Ch Opt Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="ch_opt_cumprida" value="<?php echo $this->input->post('ch_opt_cumprida'); ?>" class="form-control" id="ch_opt_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_est_exigida" class="col-md-4 control-label">Ch Est Exigida</label>
		<div class="col-md-8">
			<input type="text" name="ch_est_exigida" value="<?php echo $this->input->post('ch_est_exigida'); ?>" class="form-control" id="ch_est_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_est_cumprida" class="col-md-4 control-label">Ch Est Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="ch_est_cumprida" value="<?php echo $this->input->post('ch_est_cumprida'); ?>" class="form-control" id="ch_est_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_com_exigida" class="col-md-4 control-label">Ch Com Exigida</label>
		<div class="col-md-8">
			<input type="text" name="ch_com_exigida" value="<?php echo $this->input->post('ch_com_exigida'); ?>" class="form-control" id="ch_com_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_com_cumprida" class="col-md-4 control-label">Ch Com Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="ch_com_cumprida" value="<?php echo $this->input->post('ch_com_cumprida'); ?>" class="form-control" id="ch_com_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_ele_exigida" class="col-md-4 control-label">Ch Ele Exigida</label>
		<div class="col-md-8">
			<input type="text" name="ch_ele_exigida" value="<?php echo $this->input->post('ch_ele_exigida'); ?>" class="form-control" id="ch_ele_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_ele_cumprida" class="col-md-4 control-label">Ch Ele Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="ch_ele_cumprida" value="<?php echo $this->input->post('ch_ele_cumprida'); ?>" class="form-control" id="ch_ele_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_tcc_exigida" class="col-md-4 control-label">Ch Tcc Exigida</label>
		<div class="col-md-8">
			<input type="text" name="ch_tcc_exigida" value="<?php echo $this->input->post('ch_tcc_exigida'); ?>" class="form-control" id="ch_tcc_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_tcc_cumprida" class="col-md-4 control-label">Ch Tcc Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="ch_tcc_cumprida" value="<?php echo $this->input->post('ch_tcc_cumprida'); ?>" class="form-control" id="ch_tcc_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_tot_exigida" class="col-md-4 control-label">Ch Tot Exigida</label>
		<div class="col-md-8">
			<input type="text" name="ch_tot_exigida" value="<?php echo $this->input->post('ch_tot_exigida'); ?>" class="form-control" id="ch_tot_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="ch_tot_cumprida" class="col-md-4 control-label">Ch Tot Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="ch_tot_cumprida" value="<?php echo $this->input->post('ch_tot_cumprida'); ?>" class="form-control" id="ch_tot_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="cr_tot_exigida" class="col-md-4 control-label">Cr Tot Exigida</label>
		<div class="col-md-8">
			<input type="text" name="cr_tot_exigida" value="<?php echo $this->input->post('cr_tot_exigida'); ?>" class="form-control" id="cr_tot_exigida" />
		</div>
	</div>
	<div class="form-group">
		<label for="cr_tot_cumprida" class="col-md-4 control-label">Cr Tot Cumprida</label>
		<div class="col-md-8">
			<input type="text" name="cr_tot_cumprida" value="<?php echo $this->input->post('cr_tot_cumprida'); ?>" class="form-control" id="cr_tot_cumprida" />
		</div>
	</div>
	<div class="form-group">
		<label for="hash" class="col-md-4 control-label">Hash</label>
		<div class="col-md-8">
			<input type="text" name="hash" value="<?php echo $this->input->post('hash'); ?>" class="form-control" id="hash" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>