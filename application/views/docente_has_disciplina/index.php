<div class="pull-right">
	<a href="<?php echo site_url('docente_has_disciplina/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Docente Id</th>
		<th>Disciplina Id</th>
		<th>Codigo</th>
		<th>Ano</th>
		<th>Periodo</th>
		<th>Vagas</th>
		<th>Alunos</th>
		<th>Docente Codigo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($docente_has_disciplina as $d){ ?>
    <tr>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['docente_id']; ?></td>
		<td><?php echo $d['disciplina_id']; ?></td>
		<td><?php echo $d['codigo']; ?></td>
		<td><?php echo $d['ano']; ?></td>
		<td><?php echo $d['periodo']; ?></td>
		<td><?php echo $d['vagas']; ?></td>
		<td><?php echo $d['alunos']; ?></td>
		<td><?php echo $d['docente_codigo']; ?></td>
		<td>
            <a href="<?php echo site_url('docente_has_disciplina/edit/'.$d['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('docente_has_disciplina/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
