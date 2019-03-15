<?php echo form_open('tanah_bengkok/add',array("class"=>"form-horizontal")); ?>

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
		<label for="bengkok_sawah" class="col-md-4 control-label">Bengkok Sawah</label>
		<div class="col-md-8">
			<input type="text" name="bengkok_sawah" value="<?php echo $this->input->post('bengkok_sawah'); ?>" class="form-control" id="bengkok_sawah" />
		</div>
	</div>
	<div class="form-group">
		<label for="bengkok_lahan_kering" class="col-md-4 control-label">Bengkok Lahan Kering</label>
		<div class="col-md-8">
			<input type="text" name="bengkok_lahan_kering" value="<?php echo $this->input->post('bengkok_lahan_kering'); ?>" class="form-control" id="bengkok_lahan_kering" />
		</div>
	</div>
	<div class="form-group">
		<label for="kas_sawah" class="col-md-4 control-label">Kas Sawah</label>
		<div class="col-md-8">
			<input type="text" name="kas_sawah" value="<?php echo $this->input->post('kas_sawah'); ?>" class="form-control" id="kas_sawah" />
		</div>
	</div>
	<div class="form-group">
		<label for="kas_lahan_kering" class="col-md-4 control-label">Kas Lahan Kering</label>
		<div class="col-md-8">
			<input type="text" name="kas_lahan_kering" value="<?php echo $this->input->post('kas_lahan_kering'); ?>" class="form-control" id="kas_lahan_kering" />
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