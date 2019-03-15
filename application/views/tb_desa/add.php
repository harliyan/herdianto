<?php echo form_open('desa/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_desa" class="col-md-4 control-label">Nama Desa</label>
		<div class="col-md-8">
			<input type="text" name="nama_desa" value="<?php echo $this->input->post('nama_desa'); ?>" class="form-control" id="nama_desa" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>