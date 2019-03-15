<?php echo form_open('user/edit/'.$tb_user['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $tb_user['password']); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $tb_user['username']); ?>" class="form-control" id="username" />
		</div>
	</div>
	<div class="form-group">
		<label for="nip" class="col-md-4 control-label">Nip</label>
		<div class="col-md-8">
			<input type="text" name="nip" value="<?php echo ($this->input->post('nip') ? $this->input->post('nip') : $tb_user['nip']); ?>" class="form-control" id="nip" />
		</div>
	</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $tb_user['nama']); ?>" class="form-control" id="nama" />
		</div>
	</div>
	<div class="form-group">
		<label for="nomor_seri_karpeg" class="col-md-4 control-label">Nomor Seri Karpeg</label>
		<div class="col-md-8">
			<input type="text" name="nomor_seri_karpeg" value="<?php echo ($this->input->post('nomor_seri_karpeg') ? $this->input->post('nomor_seri_karpeg') : $tb_user['nomor_seri_karpeg']); ?>" class="form-control" id="nomor_seri_karpeg" />
		</div>
	</div>
	<div class="form-group">
		<label for="pangkat_golongan" class="col-md-4 control-label">Pangkat Golongan</label>
		<div class="col-md-8">
			<input type="text" name="pangkat_golongan" value="<?php echo ($this->input->post('pangkat_golongan') ? $this->input->post('pangkat_golongan') : $tb_user['pangkat_golongan']); ?>" class="form-control" id="pangkat_golongan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tempat_lahir" value="<?php echo ($this->input->post('tempat_lahir') ? $this->input->post('tempat_lahir') : $tb_user['tempat_lahir']); ?>" class="form-control" id="tempat_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $tb_user['tanggal_lahir']); ?>" class="form-control" id="tanggal_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="pendidikan" class="col-md-4 control-label">Pendidikan</label>
		<div class="col-md-8">
			<input type="text" name="pendidikan" value="<?php echo ($this->input->post('pendidikan') ? $this->input->post('pendidikan') : $tb_user['pendidikan']); ?>" class="form-control" id="pendidikan" />
		</div>
	</div>
	<div class="form-group">
		<label for="jabatan" class="col-md-4 control-label">Jabatan</label>
		<div class="col-md-8">
			<input type="text" name="jabatan" value="<?php echo ($this->input->post('jabatan') ? $this->input->post('jabatan') : $tb_user['jabatan']); ?>" class="form-control" id="jabatan" />
		</div>
	</div>
	<div class="form-group">
		<label for="unit_kerja" class="col-md-4 control-label">Unit Kerja</label>
		<div class="col-md-8">
			<input type="text" name="unit_kerja" value="<?php echo ($this->input->post('unit_kerja') ? $this->input->post('unit_kerja') : $tb_user['unit_kerja']); ?>" class="form-control" id="unit_kerja" />
		</div>
	</div>
	<div class="form-group">
		<label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>
		<div class="col-md-8">
			<input type="text" name="jenis_kelamin" value="<?php echo ($this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $tb_user['jenis_kelamin']); ?>" class="form-control" id="jenis_kelamin" />
		</div>
	</div>
	<div class="form-group">
		<label for="level" class="col-md-4 control-label">Level</label>
		<div class="col-md-8">
			<input type="text" name="level" value="<?php echo ($this->input->post('level') ? $this->input->post('level') : $tb_user['level']); ?>" class="form-control" id="level" />
		</div>
	</div>
	<div class="form-group">
		<label for="pass_status" class="col-md-4 control-label">Pass Status</label>
		<div class="col-md-8">
			<input type="text" name="pass_status" value="<?php echo ($this->input->post('pass_status') ? $this->input->post('pass_status') : $tb_user['pass_status']); ?>" class="form-control" id="pass_status" />
		</div>
	</div>
	<div class="form-group">
		<label for="data_status" class="col-md-4 control-label">Data Status</label>
		<div class="col-md-8">
			<input type="text" name="data_status" value="<?php echo ($this->input->post('data_status') ? $this->input->post('data_status') : $tb_user['data_status']); ?>" class="form-control" id="data_status" />
		</div>
	</div>
	<div class="form-group">
		<label for="ka_bag" class="col-md-4 control-label">Ka Bag</label>
		<div class="col-md-8">
			<input type="text" name="ka_bag" value="<?php echo ($this->input->post('ka_bag') ? $this->input->post('ka_bag') : $tb_user['ka_bag']); ?>" class="form-control" id="ka_bag" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>