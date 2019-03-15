<div class="pull-right">
	<a href="<?php echo site_url('jarak_desa/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Desa Awal</th>
		<th>Id Desa Akhir</th>
		<th>Jarak</th>
		<th>Tahun</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_jarak_desa as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_desa_awal']; ?></td>
		<td><?php echo $t['id_desa_akhir']; ?></td>
		<td><?php echo $t['jarak']; ?></td>
		<td><?php echo $t['tahun']; ?></td>
		<td>
            <a href="<?php echo site_url('jarak_desa/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jarak_desa/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
