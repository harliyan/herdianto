<div class="pull-right">
	<a href="<?php echo site_url('pembagian_desa/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Desa</th>
		<th>Dukuh</th>
		<th>Dusun</th>
		<th>Rw</th>
		<th>Rt</th>
		<th>Tahun</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_pembagian_desa as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_desa']; ?></td>
		<td><?php echo $t['dukuh']; ?></td>
		<td><?php echo $t['dusun']; ?></td>
		<td><?php echo $t['rw']; ?></td>
		<td><?php echo $t['rt']; ?></td>
		<td><?php echo $t['tahun']; ?></td>
		<td>
            <a href="<?php echo site_url('pembagian_desa/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pembagian_desa/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
