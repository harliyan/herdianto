<?php echo form_open('tr_kependudukan_umur/edit/'.$tr_kependudukan_umur['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_kependudukan" class="col-md-4 control-label">Id Kependudukan</label>
		<div class="col-md-8">
			<select name="id_kependudukan" class="form-control">
				<option value="">select</option>
				<?php 
				$id_kependudukan_values = array(
				);

				foreach($id_kependudukan_values as $value => $display_text)
				{
					$selected = ($value == $tr_kependudukan_umur['id_kependudukan']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="umur" class="col-md-4 control-label">Umur</label>
		<div class="col-md-8">
			<input type="text" name="umur" value="<?php echo ($this->input->post('umur') ? $this->input->post('umur') : $tr_kependudukan_umur['umur']); ?>" class="form-control" id="umur" />
		</div>
	</div>
	<div class="form-group">
		<label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>
		<div class="col-md-8">
			<input type="text" name="jenis_kelamin" value="<?php echo ($this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $tr_kependudukan_umur['jenis_kelamin']); ?>" class="form-control" id="jenis_kelamin" />
		</div>
	</div>
	<div class="form-group">
		<label for="jumlah" class="col-md-4 control-label">Jumlah</label>
		<div class="col-md-8">
			<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $tr_kependudukan_umur['jumlah']); ?>" class="form-control" id="jumlah" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>