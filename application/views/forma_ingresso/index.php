<div class="pull-right">
	<a href="<?php echo site_url('forma_ingresso/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($forma_ingresso as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('forma_ingresso/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('forma_ingresso/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
