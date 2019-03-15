<?php echo form_open('jarak_desa/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_desa_awal" class="col-md-4 control-label">Id Desa Awal</label>
		<div class="col-md-8">
			<select name="id_desa_awal" class="form-control">
				<option value="">select</option>
				<?php 
				$id_desa_awal_values = array(
				);

				foreach($id_desa_awal_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('id_desa_awal')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_desa_akhir" class="col-md-4 control-label">Id Desa Akhir</label>
		<div class="col-md-8">
			<select name="id_desa_akhir" class="form-control">
				<option value="">select</option>
				<?php 
				$id_desa_akhir_values = array(
				);

				foreach($id_desa_akhir_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('id_desa_akhir')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jarak" class="col-md-4 control-label">Jarak</label>
		<div class="col-md-8">
			<input type="text" name="jarak" value="<?php echo $this->input->post('jarak'); ?>" class="form-control" id="jarak" />
			<span class="text-danger"><?php echo form_error('jarak');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="tahun" class="col-md-4 control-label">Tahun</label>
		<div class="col-md-8">
			<input type="text" name="tahun" value="<?php echo $this->input->post('tahun'); ?>" class="form-control" id="tahun" />
			<span class="text-danger"><?php echo form_error('tahun');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>