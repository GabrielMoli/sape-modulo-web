<div class="pull-right">
	<a href="<?php echo site_url('atividade_extraclasse_has_docente/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Atividade Extraclasse Id</th>
		<th>Docente Id</th>
		<th>Actions</th>
    </tr>
	<?php foreach($atividade_extraclasse_has_docente as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['atividade_extraclasse_id']; ?></td>
		<td><?php echo $a['docente_id']; ?></td>
		<td>
            <a href="<?php echo site_url('atividade_extraclasse_has_docente/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('atividade_extraclasse_has_docente/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
