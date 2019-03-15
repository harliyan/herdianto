<div class="pull-right">
	<a href="<?php echo site_url('pln_pdam/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Desa</th>
		<th>ID</th>
		<th>Rumah Tangga</th>
		<th>Pelanggan Pln</th>
		<th>Pelanggan Pdam</th>
		<th>Tahun</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_pln_pdam as $t){ ?>
    <tr>
		<td><?php echo $t['id_desa']; ?></td>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['rumah_tangga']; ?></td>
		<td><?php echo $t['pelanggan_pln']; ?></td>
		<td><?php echo $t['pelanggan_pdam']; ?></td>
		<td><?php echo $t['tahun']; ?></td>
		<td>
            <a href="<?php echo site_url('pln_pdam/edit/'.$t['']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pln_pdam/remove/'.$t['']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
