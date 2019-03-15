<?php echo form_open('luas_wilayah/add',array("class"=>"form-horizontal")); ?>

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
		<label for="luas_wilayah" class="col-md-4 control-label">Luas Wilayah</label>
		<div class="col-md-8">
			<input type="text" name="luas_wilayah" value="<?php echo $this->input->post('luas_wilayah'); ?>" class="form-control" id="luas_wilayah" />
		</div>
	</div>
	<div class="form-group">
		<label for="tanah_sawah" class="col-md-4 control-label">Tanah Sawah</label>
		<div class="col-md-8">
			<input type="text" name="tanah_sawah" value="<?php echo $this->input->post('tanah_sawah'); ?>" class="form-control" id="tanah_sawah" />
		</div>
	</div>
	<div class="form-group">
		<label for="tanah_kering" class="col-md-4 control-label">Tanah Kering</label>
		<div class="col-md-8">
			<input type="text" name="tanah_kering" value="<?php echo $this->input->post('tanah_kering'); ?>" class="form-control" id="tanah_kering" />
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