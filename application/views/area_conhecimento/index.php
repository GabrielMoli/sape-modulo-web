<div class="pull-right">
	<a href="<?php echo site_url('area_conhecimento/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Actions</th>
    </tr>
	<?php foreach($area_conhecimento as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['nome']; ?></td>
		<td>
            <a href="<?php echo site_url('area_conhecimento/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('area_conhecimento/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
