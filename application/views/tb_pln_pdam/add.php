<?php echo form_open('pln_pdam/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_desa" class="col-md-4 control-label">Id Desa</label>
		<div class="col-md-8">
			<select name="id_desa" class="form-control">
				<option value="">select</option>
				<?php 
				$id_desa_values = array(
				);

				foreach($id_desa_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('id_desa')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id" class="col-md-4 control-label">ID</label>
		<div class="col-md-8">
			<input type="text" name="id" value="<?php echo $this->input->post('id'); ?>" class="form-control" id="id" />
		</div>
	</div>
	<div class="form-group">
		<label for="rumah_tangga" class="col-md-4 control-label">Rumah Tangga</label>
		<div class="col-md-8">
			<input type="text" name="rumah_tangga" value="<?php echo $this->input->post('rumah_tangga'); ?>" class="form-control" id="rumah_tangga" />
		</div>
	</div>
	<div class="form-group">
		<label for="pelanggan_pln" class="col-md-4 control-label">Pelanggan Pln</label>
		<div class="col-md-8">
			<input type="text" name="pelanggan_pln" value="<?php echo $this->input->post('pelanggan_pln'); ?>" class="form-control" id="pelanggan_pln" />
		</div>
	</div>
	<div class="form-group">
		<label for="pelanggan_pdam" class="col-md-4 control-label">Pelanggan Pdam</label>
		<div class="col-md-8">
			<input type="text" name="pelanggan_pdam" value="<?php echo $this->input->post('pelanggan_pdam'); ?>" class="form-control" id="pelanggan_pdam" />
		</div>
	</div>
	<div class="form-group">
		<label for="tahun" class="col-md-4 control-label">Tahun</label>
		<div class="col-md-8">
			<input type="text" name="tahun" value="<?php echo $this->input->post('tahun'); ?>" class="form-control" id="tahun" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>