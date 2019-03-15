<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Password</th>
		<th>Username</th>
		<th>Nip</th>
		<th>Nama</th>
		<th>Nomor Seri Karpeg</th>
		<th>Pangkat Golongan</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Pendidikan</th>
		<th>Jabatan</th>
		<th>Unit Kerja</th>
		<th>Jenis Kelamin</th>
		<th>Level</th>
		<th>Pass Status</th>
		<th>Data Status</th>
		<th>Ka Bag</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_user as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['password']; ?></td>
		<td><?php echo $t['username']; ?></td>
		<td><?php echo $t['nip']; ?></td>
		<td><?php echo $t['nama']; ?></td>
		<td><?php echo $t['nomor_seri_karpeg']; ?></td>
		<td><?php echo $t['pangkat_golongan']; ?></td>
		<td><?php echo $t['tempat_lahir']; ?></td>
		<td><?php echo $t['tanggal_lahir']; ?></td>
		<td><?php echo $t['pendidikan']; ?></td>
		<td><?php echo $t['jabatan']; ?></td>
		<td><?php echo $t['unit_kerja']; ?></td>
		<td><?php echo $t['jenis_kelamin']; ?></td>
		<td><?php echo $t['level']; ?></td>
		<td><?php echo $t['pass_status']; ?></td>
		<td><?php echo $t['data_status']; ?></td>
		<td><?php echo $t['ka_bag']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
