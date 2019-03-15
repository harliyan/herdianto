<?php echo form_open('mutasi_kependudukan/add',array("class"=>"form-horizontal")); ?>

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
		<label for="jenis_mutasi" class="col-md-4 control-label">Jenis Mutasi</label>
		<div class="col-md-8">
			<select name="jenis_mutasi" class="form-control">
				<option value="">select</option>
				<?php 
				$jenis_mutasi_values = array(
				);

				foreach($jenis_mutasi_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('jenis_mutasi')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>
		<div class="col-md-8">
			<select name="jenis_kelamin" class="form-control">
				<option value="">select</option>
				<?php 
				$jenis_kelamin_values = array(
				);

				foreach($jenis_kelamin_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('jenis_kelamin')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jumlah" class="col-md-4 control-label">Jumlah</label>
		<div class="col-md-8">
			<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
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