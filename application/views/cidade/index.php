<div class="pull-right">
	<a href="<?php echo site_url('cidade/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($cidade as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('cidade/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('cidade/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
