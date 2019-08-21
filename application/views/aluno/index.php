<div class="pull-right">
	<a href="<?php echo site_url('/sape/aluno/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Situacao Matricula Id</th>
		<th>Semestre Ingresso</th>
		<th>Sexo</th>
		<th>Forma Ingresso Id</th>
		<th>Tipo Cota Id</th>
		<th>Cor Raca Id</th>
		<th>Faixa Renda Familiar Id</th>
		<th>Faixa Renda Pc Id</th>
		<th>Escola Origem Id</th>
		<th>Matriz Curricular</th>
		<th>Cidade Id</th>
		<th>Ano Ingresso</th>
		<th>Ano Nascimento</th>
		<th>Distancia Km</th>
		<th>Horas Desloc</th>
		<th>Min Desloc</th>
		<th>Percentual Frequencia</th>
		<th>Ch Obr Exigida</th>
		<th>Ch Obr Cumprida</th>
		<th>Ch Opt Exigida</th>
		<th>Ch Opt Cumprida</th>
		<th>Ch Est Exigida</th>
		<th>Ch Est Cumprida</th>
		<th>Ch Com Exigida</th>
		<th>Ch Com Cumprida</th>
		<th>Ch Ele Exigida</th>
		<th>Ch Ele Cumprida</th>
		<th>Ch Tcc Exigida</th>
		<th>Ch Tcc Cumprida</th>
		<th>Ch Tot Exigida</th>
		<th>Ch Tot Cumprida</th>
		<th>Cr Tot Exigida</th>
		<th>Cr Tot Cumprida</th>
		<th>Hash</th>
		<th>Actions</th>
    </tr>
	<?php foreach($aluno as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['situacao_matricula_id']; ?></td>
		<td><?php echo $a['semestre_ingresso']; ?></td>
		<td><?php echo $a['sexo']; ?></td>
		<td><?php echo $a['forma_ingresso_id']; ?></td>
		<td><?php echo $a['tipo_cota_id']; ?></td>
		<td><?php echo $a['cor_raca_id']; ?></td>
		<td><?php echo $a['faixa_renda_familiar_id']; ?></td>
		<td><?php echo $a['faixa_renda_pc_id']; ?></td>
		<td><?php echo $a['escola_origem_id']; ?></td>
		<td><?php echo $a['matriz_curricular']; ?></td>
		<td><?php echo $a['cidade_id']; ?></td>
		<td><?php echo $a['ano_ingresso']; ?></td>
		<td><?php echo $a['ano_nascimento']; ?></td>
		<td><?php echo $a['distancia_km']; ?></td>
		<td><?php echo $a['horas_desloc']; ?></td>
		<td><?php echo $a['min_desloc']; ?></td>
		<td><?php echo $a['percentual_frequencia']; ?></td>
		<td><?php echo $a['ch_obr_exigida']; ?></td>
		<td><?php echo $a['ch_obr_cumprida']; ?></td>
		<td><?php echo $a['ch_opt_exigida']; ?></td>
		<td><?php echo $a['ch_opt_cumprida']; ?></td>
		<td><?php echo $a['ch_est_exigida']; ?></td>
		<td><?php echo $a['ch_est_cumprida']; ?></td>
		<td><?php echo $a['ch_com_exigida']; ?></td>
		<td><?php echo $a['ch_com_cumprida']; ?></td>
		<td><?php echo $a['ch_ele_exigida']; ?></td>
		<td><?php echo $a['ch_ele_cumprida']; ?></td>
		<td><?php echo $a['ch_tcc_exigida']; ?></td>
		<td><?php echo $a['ch_tcc_cumprida']; ?></td>
		<td><?php echo $a['ch_tot_exigida']; ?></td>
		<td><?php echo $a['ch_tot_cumprida']; ?></td>
		<td><?php echo $a['cr_tot_exigida']; ?></td>
		<td><?php echo $a['cr_tot_cumprida']; ?></td>
		<td><?php echo $a['hash']; ?></td>
		<td>
            <a href="<?php echo site_url('/sape/aluno/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('/sape/aluno/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
