<div class="pull-right">
	<a href="<?php echo site_url('tr_kependudukan_umur/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Kependudukan</th>
		<th>Umur</th>
		<th>Jenis Kelamin</th>
		<th>Jumlah</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tr_kependudukan_umur as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_kependudukan']; ?></td>
		<td><?php echo $t['umur']; ?></td>
		<td><?php echo $t['jenis_kelamin']; ?></td>
		<td><?php echo $t['jumlah']; ?></td>
		<td>
            <a href="<?php echo site_url('tr_kependudukan_umur/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tr_kependudukan_umur/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
