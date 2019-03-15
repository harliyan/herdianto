<div class="pull-right">
	<a href="<?php echo site_url('tr_luas_tanah_kering/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Luas Wilayah</th>
		<th>Perkarangan Bangunan</th>
		<th>Tegal Kebun</th>
		<th>Padang Gembala</th>
		<th>Tambak Kolam</th>
		<th>Hutan Negara</th>
		<th>Perkebunan Negara</th>
		<th>Lainnya</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tr_luas_tanah_kering as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_luas_wilayah']; ?></td>
		<td><?php echo $t['perkarangan_bangunan']; ?></td>
		<td><?php echo $t['tegal_kebun']; ?></td>
		<td><?php echo $t['padang_gembala']; ?></td>
		<td><?php echo $t['tambak_kolam']; ?></td>
		<td><?php echo $t['hutan_negara']; ?></td>
		<td><?php echo $t['perkebunan_negara']; ?></td>
		<td><?php echo $t['lainnya']; ?></td>
		<td>
            <a href="<?php echo site_url('tr_luas_tanah_kering/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tr_luas_tanah_kering/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
