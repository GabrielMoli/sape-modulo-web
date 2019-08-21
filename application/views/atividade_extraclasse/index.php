<div class="pull-right">
	<a href="<?php echo site_url('atividade_extraclasse/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Remuneracao</th>
		<th>Titulo</th>
		<th>Duracao</th>
		<th>Area Conhecimento Id</th>
		<th>Tipo Atividade Id</th>
		<th>Actions</th>
    </tr>
	<?php foreach($atividade_extraclasse as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['remuneracao']; ?></td>
		<td><?php echo $a['titulo']; ?></td>
		<td><?php echo $a['duracao']; ?></td>
		<td><?php echo $a['area_conhecimento_id']; ?></td>
		<td><?php echo $a['tipo_atividade_id']; ?></td>
		<td>
            <a href="<?php echo site_url('atividade_extraclasse/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('atividade_extraclasse/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
