<div class="pull-right">
	<a href="<?php echo site_url('panen_produksi/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Desa</th>
		<th>ID</th>
		<th>Kuas Panen</th>
		<th>Rata Rata Produksi</th>
		<th>Produksi</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_panen_produksi as $t){ ?>
    <tr>
		<td><?php echo $t['id_desa']; ?></td>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['kuas_panen']; ?></td>
		<td><?php echo $t['rata_rata_produksi']; ?></td>
		<td><?php echo $t['produksi']; ?></td>
		<td>
            <a href="<?php echo site_url('panen_produksi/edit/'.$t['']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('panen_produksi/remove/'.$t['']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
