<div class="pull-right">
	<a href="<?php echo site_url('tr_luas_tanah_sawah/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Luas Wilayah</th>
		<th>Irigasi Teknis</th>
		<th>Irigasi Setengah Teknis</th>
		<th>Irigasi Sederhana</th>
		<th>Hujan Tadah</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tr_luas_tanah_sawah as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_luas_wilayah']; ?></td>
		<td><?php echo $t['irigasi_teknis']; ?></td>
		<td><?php echo $t['irigasi_setengah_teknis']; ?></td>
		<td><?php echo $t['irigasi_sederhana']; ?></td>
		<td><?php echo $t['hujan_tadah']; ?></td>
		<td>
            <a href="<?php echo site_url('tr_luas_tanah_sawah/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tr_luas_tanah_sawah/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
