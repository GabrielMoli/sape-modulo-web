<div class="pull-right">
	<a href="<?php echo site_url('tipo_atividade/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Setor Responsavel</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tipo_atividade as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['nome']; ?></td>
		<td><?php echo $t['setor_responsavel']; ?></td>
		<td><?php echo $t['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('tipo_atividade/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tipo_atividade/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
