<div class="pull-right">
	<a href="<?php echo site_url('tanah_bengkok/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Desa</th>
		<th>Bengkok Sawah</th>
		<th>Bengkok Lahan Kering</th>
		<th>Kas Sawah</th>
		<th>Kas Lahan Kering</th>
		<th>Tahun</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_tanah_bengkok as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_desa']; ?></td>
		<td><?php echo $t['bengkok_sawah']; ?></td>
		<td><?php echo $t['bengkok_lahan_kering']; ?></td>
		<td><?php echo $t['kas_sawah']; ?></td>
		<td><?php echo $t['kas_lahan_kering']; ?></td>
		<td><?php echo $t['tahun']; ?></td>
		<td>
            <a href="<?php echo site_url('tanah_bengkok/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tanah_bengkok/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
