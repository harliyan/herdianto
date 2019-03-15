<?php echo form_open('tr_luas_tanah_sawah/edit/'.$tr_luas_tanah_sawah['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_luas_wilayah" class="col-md-4 control-label">Id Luas Wilayah</label>
		<div class="col-md-8">
			<select name="id_luas_wilayah" class="form-control">
				<option value="">select</option>
				<?php 
				$id_luas_wilayah_values = array(
				);

				foreach($id_luas_wilayah_values as $value => $display_text)
				{
					$selected = ($value == $tr_luas_tanah_sawah['id_luas_wilayah']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="irigasi_teknis" class="col-md-4 control-label">Irigasi Teknis</label>
		<div class="col-md-8">
			<input type="text" name="irigasi_teknis" value="<?php echo ($this->input->post('irigasi_teknis') ? $this->input->post('irigasi_teknis') : $tr_luas_tanah_sawah['irigasi_teknis']); ?>" class="form-control" id="irigasi_teknis" />
		</div>
	</div>
	<div class="form-group">
		<label for="irigasi_setengah_teknis" class="col-md-4 control-label">Irigasi Setengah Teknis</label>
		<div class="col-md-8">
			<input type="text" name="irigasi_setengah_teknis" value="<?php echo ($this->input->post('irigasi_setengah_teknis') ? $this->input->post('irigasi_setengah_teknis') : $tr_luas_tanah_sawah['irigasi_setengah_teknis']); ?>" class="form-control" id="irigasi_setengah_teknis" />
		</div>
	</div>
	<div class="form-group">
		<label for="irigasi_sederhana" class="col-md-4 control-label">Irigasi Sederhana</label>
		<div class="col-md-8">
			<input type="text" name="irigasi_sederhana" value="<?php echo ($this->input->post('irigasi_sederhana') ? $this->input->post('irigasi_sederhana') : $tr_luas_tanah_sawah['irigasi_sederhana']); ?>" class="form-control" id="irigasi_sederhana" />
		</div>
	</div>
	<div class="form-group">
		<label for="hujan_tadah" class="col-md-4 control-label">Hujan Tadah</label>
		<div class="col-md-8">
			<input type="text" name="hujan_tadah" value="<?php echo ($this->input->post('hujan_tadah') ? $this->input->post('hujan_tadah') : $tr_luas_tanah_sawah['hujan_tadah']); ?>" class="form-control" id="hujan_tadah" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>