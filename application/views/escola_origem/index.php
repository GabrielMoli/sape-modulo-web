<div class="pull-right">
	<a href="<?php echo site_url('escola_origem/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($escola_origem as $e){ ?>
    <tr>
		<td><?php echo $e['id']; ?></td>
		<td><?php echo $e['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('escola_origem/edit/'.$e['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('escola_origem/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
