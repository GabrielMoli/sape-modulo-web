<div class="pull-right">
	<a href="<?php echo site_url('cor_raca/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($cor_raca as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('cor_raca/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('cor_raca/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
