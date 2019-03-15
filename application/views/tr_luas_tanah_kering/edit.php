<?php echo form_open('tr_luas_tanah_kering/edit/'.$tr_luas_tanah_kering['id'],array("class"=>"form-horizontal")); ?>

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
					$selected = ($value == $tr_luas_tanah_kering['id_luas_wilayah']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="perkarangan_bangunan" class="col-md-4 control-label">Perkarangan Bangunan</label>
		<div class="col-md-8">
			<input type="text" name="perkarangan_bangunan" value="<?php echo ($this->input->post('perkarangan_bangunan') ? $this->input->post('perkarangan_bangunan') : $tr_luas_tanah_kering['perkarangan_bangunan']); ?>" class="form-control" id="perkarangan_bangunan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tegal_kebun" class="col-md-4 control-label">Tegal Kebun</label>
		<div class="col-md-8">
			<input type="text" name="tegal_kebun" value="<?php echo ($this->input->post('tegal_kebun') ? $this->input->post('tegal_kebun') : $tr_luas_tanah_kering['tegal_kebun']); ?>" class="form-control" id="tegal_kebun" />
		</div>
	</div>
	<div class="form-group">
		<label for="padang_gembala" class="col-md-4 control-label">Padang Gembala</label>
		<div class="col-md-8">
			<input type="text" name="padang_gembala" value="<?php echo ($this->input->post('padang_gembala') ? $this->input->post('padang_gembala') : $tr_luas_tanah_kering['padang_gembala']); ?>" class="form-control" id="padang_gembala" />
		</div>
	</div>
	<div class="form-group">
		<label for="tambak_kolam" class="col-md-4 control-label">Tambak Kolam</label>
		<div class="col-md-8">
			<input type="text" name="tambak_kolam" value="<?php echo ($this->input->post('tambak_kolam') ? $this->input->post('tambak_kolam') : $tr_luas_tanah_kering['tambak_kolam']); ?>" class="form-control" id="tambak_kolam" />
		</div>
	</div>
	<div class="form-group">
		<label for="hutan_negara" class="col-md-4 control-label">Hutan Negara</label>
		<div class="col-md-8">
			<input type="text" name="hutan_negara" value="<?php echo ($this->input->post('hutan_negara') ? $this->input->post('hutan_negara') : $tr_luas_tanah_kering['hutan_negara']); ?>" class="form-control" id="hutan_negara" />
		</div>
	</div>
	<div class="form-group">
		<label for="perkebunan_negara" class="col-md-4 control-label">Perkebunan Negara</label>
		<div class="col-md-8">
			<input type="text" name="perkebunan_negara" value="<?php echo ($this->input->post('perkebunan_negara') ? $this->input->post('perkebunan_negara') : $tr_luas_tanah_kering['perkebunan_negara']); ?>" class="form-control" id="perkebunan_negara" />
		</div>
	</div>
	<div class="form-group">
		<label for="lainnya" class="col-md-4 control-label">Lainnya</label>
		<div class="col-md-8">
			<input type="text" name="lainnya" value="<?php echo ($this->input->post('lainnya') ? $this->input->post('lainnya') : $tr_luas_tanah_kering['lainnya']); ?>" class="form-control" id="lainnya" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>