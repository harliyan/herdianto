<div class="pull-right">
	<a href="<?php echo site_url('desa/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Desa</th>
		<th>Nama Desa</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_desa as $t){ ?>
    <tr>
		<td><?php echo $t['id_desa']; ?></td>
		<td><?php echo $t['nama_desa']; ?></td>
		<td>
            <a href="<?php echo site_url('desa/edit/'.$t['id_desa']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('desa/remove/'.$t['id_desa']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
