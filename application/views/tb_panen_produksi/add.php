<?php echo form_open('panen_produksi/add',array("class"=>"form-horizontal")); ?>

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
		<label for="kuas_panen" class="col-md-4 control-label">Kuas Panen</label>
		<div class="col-md-8">
			<input type="text" name="kuas_panen" value="<?php echo $this->input->post('kuas_panen'); ?>" class="form-control" id="kuas_panen" />
		</div>
	</div>
	<div class="form-group">
		<label for="rata_rata_produksi" class="col-md-4 control-label">Rata Rata Produksi</label>
		<div class="col-md-8">
			<input type="text" name="rata_rata_produksi" value="<?php echo $this->input->post('rata_rata_produksi'); ?>" class="form-control" id="rata_rata_produksi" />
		</div>
	</div>
	<div class="form-group">
		<label for="produksi" class="col-md-4 control-label">Produksi</label>
		<div class="col-md-8">
			<input type="text" name="produksi" value="<?php echo $this->input->post('produksi'); ?>" class="form-control" id="produksi" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>