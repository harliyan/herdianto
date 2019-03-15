<div class="pull-right">
	<a href="<?php echo site_url('kependudukan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Desa</th>
		<th>Laki Laki</th>
		<th>Perempuan</th>
		<th>Tahun</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_kependudukan as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_desa']; ?></td>
		<td><?php echo $t['laki_laki']; ?></td>
		<td><?php echo $t['perempuan']; ?></td>
		<td><?php echo $t['tahun']; ?></td>
		<td>
            <a href="<?php echo site_url('kependudukan/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('kependudukan/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
