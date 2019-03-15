<div class="pull-right">
	<a href="<?php echo site_url('luas_wilayah/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Desa</th>
		<th>Luas Wilayah</th>
		<th>Tanah Sawah</th>
		<th>Tanah Kering</th>
		<th>Tahun</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_luas_wilayah as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_desa']; ?></td>
		<td><?php echo $t['luas_wilayah']; ?></td>
		<td><?php echo $t['tanah_sawah']; ?></td>
		<td><?php echo $t['tanah_kering']; ?></td>
		<td><?php echo $t['tahun']; ?></td>
		<td>
            <a href="<?php echo site_url('luas_wilayah/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('luas_wilayah/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
