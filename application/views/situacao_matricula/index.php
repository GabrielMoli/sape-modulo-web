<div class="pull-right">
	<a href="<?php echo site_url('situacao_matricula/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($situacao_matricula as $s){ ?>
    <tr>
		<td><?php echo $s['id']; ?></td>
		<td><?php echo $s['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('situacao_matricula/edit/'.$s['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('situacao_matricula/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
