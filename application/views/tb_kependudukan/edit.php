<?php echo form_open('kependudukan/edit/'.$tb_kependudukan['id'],array("class"=>"form-horizontal")); ?>

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
					$selected = ($value == $tb_kependudukan['id_desa']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="laki_laki" class="col-md-4 control-label">Laki Laki</label>
		<div class="col-md-8">
			<input type="text" name="laki_laki" value="<?php echo ($this->input->post('laki_laki') ? $this->input->post('laki_laki') : $tb_kependudukan['laki_laki']); ?>" class="form-control" id="laki_laki" />
		</div>
	</div>
	<div class="form-group">
		<label for="perempuan" class="col-md-4 control-label">Perempuan</label>
		<div class="col-md-8">
			<input type="text" name="perempuan" value="<?php echo ($this->input->post('perempuan') ? $this->input->post('perempuan') : $tb_kependudukan['perempuan']); ?>" class="form-control" id="perempuan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tahun" class="col-md-4 control-label">Tahun</label>
		<div class="col-md-8">
			<input type="text" name="tahun" value="<?php echo ($this->input->post('tahun') ? $this->input->post('tahun') : $tb_kependudukan['tahun']); ?>" class="form-control" id="tahun" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>