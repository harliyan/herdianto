<?php echo form_open('pembagian_desa/add',array("class"=>"form-horizontal")); ?>

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
		<label for="dukuh" class="col-md-4 control-label">Dukuh</label>
		<div class="col-md-8">
			<input type="text" name="dukuh" value="<?php echo $this->input->post('dukuh'); ?>" class="form-control" id="dukuh" />
		</div>
	</div>
	<div class="form-group">
		<label for="dusun" class="col-md-4 control-label">Dusun</label>
		<div class="col-md-8">
			<input type="text" name="dusun" value="<?php echo $this->input->post('dusun'); ?>" class="form-control" id="dusun" />
		</div>
	</div>
	<div class="form-group">
		<label for="rw" class="col-md-4 control-label">Rw</label>
		<div class="col-md-8">
			<input type="text" name="rw" value="<?php echo $this->input->post('rw'); ?>" class="form-control" id="rw" />
		</div>
	</div>
	<div class="form-group">
		<label for="rt" class="col-md-4 control-label">Rt</label>
		<div class="col-md-8">
			<input type="text" name="rt" value="<?php echo $this->input->post('rt'); ?>" class="form-control" id="rt" />
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