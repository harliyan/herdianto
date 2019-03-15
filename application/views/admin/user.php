<style>
.select2-container .select2-selection--single {
	height: 37px !important;
}

</style>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>USER</h2>
		<ol class="breadcrumb">
			<li>
				<a href="index.html">Home</a>
			</li>
			<li class="active">
				<strong>Layouts</strong>
			</li>
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Basic form <small>Simple login form example</small></h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-wrench"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a>
							</li>
							<li><a href="#">Config option 2</a>
							</li>
						</ul>
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="row">
						<div class="col-sm-12"><h3 class="m-t-none m-b">Sign in</h3>
							<p>Sign in today for more expirience.</p>
							<form class="form-horizontal" id="form_user" method="post" action="<?=site_url("admin/add_user")?>">
									<div class="row col-md-6">
										<div class="form-group">
											<label class="col-lg-2 control-label" for="jenis" ><b>Pegawai</b></label>
											<div class="col-lg-10">
												<select class="input form-control border-info" name="jenis" id="jenis" required="true">
													<option value="">- Pilih Pegawai -</option>	
													<option value="kepala">Kepala</option>
													<option value="staf">staf</option>										
												</select> 
											</div>
										</div>
									</div>
									<div class="row col-md-6">
										<div class="form-group">
											<label class="col-lg-2 control-label" for="bagian" ><b>Bagian</b></label>
											<div class="col-lg-10">
												<select class="input form-control border-info" name="bagian" id="bagian" required="true">
													<option value="">- Pilih Bagian -</option>	
													<option value="1">Kependudukan</option>
													<option value="2">Administrasi Wilayah</option>										
													<option value="3">Pertanahan</option>										
													<option value="3">Pertanian</option>										
													<option value="99">Pemerintah Pusat Kecamatan</option>										
												</select> 
											</div>
										</div>
									</div>
									<div class="row col-md-6">
										<div class="form-group">
											<label class="col-lg-2 control-label" for="nip"><b>NIP</b></label>
											<div class="col-lg-10">
												<input type="number" id="nip" class="form-control border-info" placeholder="nip" name="nip" required>
											</div>
										</div>
									</div>
									<div class="row col-md-6">
										<div class="form-group">
											<label class="col-lg-2 control-label" for="nama"><b>Nama</b></label>
											<div class="col-lg-10">
												<input type="text" id="nama" class="form-control border-info" placeholder="nama" name="nama"  required>
											</div>
										</div>
									</div>
									<div class="row col-md-6">
										<div class="form-group">
											<label class="col-lg-2 control-label" for="password"><b>Password</b></label>
											<div class="col-lg-10">
												<input type="text" id="password" class="form-control border-info" placeholder="password" name="password" required>
											</div>
										</div>
									</div>
									<div class="row col-md-12">
										<div class="form-actions right"  >	
											<button type="button" class="btn btn-info mr-1" id="tambah_user">
												<i class="icon-check2"></i> SUBMIT
											</button>
										</div>	
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Basic form <small>Simple login form example</small></h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-wrench"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a>
							</li>
							<li><a href="#">Config option 2</a>
							</li>
						</ul>
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content text-center p-md">

									<table class="table table-hover table-bordered table-striped mb-0">
						<thead class="bg-teal bg-lighten-4">
							<tr>
								<th>No</th>
								
								<th>NIP</th>
								<th>Nama</th>
								<th>Jenis Pegawai</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i =1; ?>
							<?php foreach ($user as $key => $value): ?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $value->nip ?></td>
									<td><?php echo $value->nama ?></td>
									<td><?php echo $value->level ?></td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-sm mr-0 mb-0 btn-outline-danger " value="<?php echo $value->id ?>" id="delete_user" 
												<?php if ($value->level == 'admin' ): ?>
													disabled="disabled"
												<?php endif ?>>
												Delete
											</button>
											<?php if ($value->level != 'admin'): ?>
												<a class="btn btn-sm mr-0 mb-0 btn-outline-warning"  data-toggle="tooltip" data-placement="top" 			
												href="<?= base_url('admin/edituser/'.$value->id)?>" 
												>Edit</a>
											<?php endif ?>
											
										</div>
									</td>
								</tr>
							<?php $i++; endforeach ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>

</div>


<script>


	$(document).on("click","#tambah_user",function(e){
		// alert('asas');
		// e.preventDefault();
		var nip = $('#nip').val();
		var jenis = $('#jenis').val();
		var nama = $('#nama').val();
		var password = $('#password').val();
		if (nip =="" || jenis=="" || nama==""  || password=="") {
			swal({
				type: 'error',
				title: 'Oops...',
				text: 'Data tidak Boleh kosong !!'
				// footer: '<a href>Why do I have this issue?</a>'
			})
		}else{
			$.ajax({
				type: "POST",
				url: "<?=site_url("admin/is_user")?>",
				dataType: "json",
				data: "nip="+nip,                      
				success: function(data){
					if(data.valid){
						$("#form_user").submit();
						const toast = swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						});

						toast({
							type: 'success',
							title: 'Data berhasil ditambahkan'
						})
					}else{
						swal({
							type: 'error',
							title: 'Oops...',
							text: 'NIP sudah terpakai !!'

						})
						$("#form_user")[0].reset();
					}
				}
			});
		}
	});

	$(document).on("click","#delete_user",function(){
		var id = $(this).val();

		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value) {

				hapus(id);
			}
		})		

	});

	$(document).on("click","#set_kabag",function(){
		var id = $(this).val();

		swal({
			title: 'Jadikan Kepala SubBag Pelayanan Kesehatan ??',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes!'
		}).then((result) => {
			if (result.value) {

				set_kabag(id);
			}
		})		

	});

	function hapus(id){
		$.ajax({
			type: "POST",
			url: "<?=site_url("admin/delete_user")?>",
			data: "id="+id,                      
			success:function(respon){
				if (respon=="berhasil"){
					swal({
						position: 'top-end',
						type: 'success',
						title: 'Berhasil',
						showCancelButton: false,
						confirmButtonColor: '#3085d6',
						confirmButtonText: 'OK!'
					}).then((result) => {
						if (result.value) {
							
							window.location.reload();			
						}
					})
				}
			}
		});	
	}

	function set_kabag(id){
		$.ajax({
			type: "POST",
			url: "<?=site_url("admin/set_kabag")?>",
			data: "id="+id,                      
			success:function(respon){
				if (respon=="berhasil"){
					swal({
						position: 'top-end',
						type: 'success',
						title: 'Berhasil',
						showCancelButton: false,
						confirmButtonColor: '#3085d6',
						confirmButtonText: 'OK!'
					}).then((result) => {
						if (result.value) {
							
							window.location.reload();			
						}
					})
				}
			}
		});	
	}


</script>