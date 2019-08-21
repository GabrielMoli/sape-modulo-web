<div class="pull-right">
	<a href="<?php echo site_url('/sape/disciplina/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Ch</th>
		<th>Codigo</th>
		<th>Tipo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($disciplina as $d){ ?>
    <tr>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['nome']; ?></td>
		<td><?php echo $d['ch']; ?></td>
		<td><?php echo $d['codigo']; ?></td>
		<td><?php echo $d['tipo']; ?></td>
		<td>
            <a href="<?php echo site_url('/sape/disciplina/edit/'.$d['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('/sape/disciplina/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
