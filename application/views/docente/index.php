<div class="pull-right">
	<a href="<?php echo site_url('sape/docente/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Efetivo</th>
		<th>Codigo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($docente as $d){ ?>
    <tr>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['efetivo']; ?></td>
		<td><?php echo $d['codigo']; ?></td>
		<td>
            <a href="<?php echo site_url('/sape/docente/edit/'.$d['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('/sape/docente/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
