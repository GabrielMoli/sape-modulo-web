<div class="pull-right">
	<a href="<?php echo site_url('aluno_has_disciplina/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Aluno Id</th>
		<th>Disciplina Id</th>
		<th>Codigo</th>
		<th>Ano</th>
		<th>Periodo</th>
		<th>Nota</th>
		<th>Frequencia</th>
		<th>Situacao</th>
		<th>Hash Aluno</th>
		<th>Actions</th>
    </tr>
	<?php foreach($aluno_has_disciplina as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['aluno_id']; ?></td>
		<td><?php echo $a['disciplina_id']; ?></td>
		<td><?php echo $a['codigo']; ?></td>
		<td><?php echo $a['ano']; ?></td>
		<td><?php echo $a['periodo']; ?></td>
		<td><?php echo $a['nota']; ?></td>
		<td><?php echo $a['frequencia']; ?></td>
		<td><?php echo $a['situacao']; ?></td>
		<td><?php echo $a['hash_aluno']; ?></td>
		<td>
            <a href="<?php echo site_url('aluno_has_disciplina/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('aluno_has_disciplina/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
