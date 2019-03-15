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
								<form class="form-hoeizontal" id="form_user" method="post" action="<?=site_url("admin/add_edit_user")?>">
					<div class="col-lg-12">
						<table class="table table-striped">
							<?php foreach ($data as $key => $value): ?>
								<?php if ($key == 'pass_status' || $key == 'data_status' || $key == 'ka_bag'): ?>
								<?php elseif($key == 'password' ): ?>
									<tr>
										<td style="width: 25%!important;vertical-align: middle!important;"><b><?php echo str_replace('_', ' ', ucfirst($key)) ?></b></td>
										<td style="padding:  0 0!important;vertical-align: middle!important;">: </td>
										<td style="width: 75%!important;vertical-align: middle!important;"><input type="text" class="to_edit form-control" name="<?php echo $key ?>" id="<?php echo $key ?>" value=""  ></td>
									</tr>
								<?php elseif($key == 'id'): ?>

									<tr>
										<td style="width: 25%!important;vertical-align: middle!important;"><b><?php echo str_replace('_', ' ', ucfirst($key)) ?></b></td>
										<td style="padding: 0 0!important;vertical-align: middle!important;">: </td>
										<td style="width: 80%!important;vertical-align: middle!important;"><input type="text" class="no_edit form-control" name="<?php echo $key ?>" id="<?php echo $key ?>" value="<?php echo $value ?>" readonly></td>
									</tr>
									<?php elseif($key == 'tanggal_lahir'): ?>

									<tr>
										<td style="width: 25%!important;vertical-align: middle!important;"><b><?php echo str_replace('_', ' ', ucfirst($key)) ?></b></td>
										<td style="padding: 0 0!important;vertical-align: middle!important;">: </td>
										<td style="width: 80%!important;vertical-align: middle!important;">
											<input type="text" class="date form-control" name="<?php echo $key ?>" id="<?php echo $key ?>" value="<?php echo $value ?>"></td>
									</tr>
								<?php else: ?>
									<tr>
										<td style="width: 25%!important;vertical-align: middle!important;"><b><?php echo str_replace('_', ' ', ucfirst($key)) ?></b></td>
										<td style="padding: 0 0!important;vertical-align: middle!important;">: </td>
										<td style="width: 80%!important;vertical-align: middle!important;"><input type="text" class="to_edit form-control" name="<?php echo $key ?>" id="<?php echo $key ?>" value="<?php echo $value ?>" ></td>
									</tr>
								<?php endif ?>
							<?php endforeach ?>
						</table>
						<div class="form-actions right" >	
							
							<button type="submit" class="btn btn-primary mr-1" id="update_user">
								<i class="icon-check2"></i> SIMPAN
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

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script>
		$(document).on("click","#update_user",function(e){
		e.preventDefault();
		var nip = $('#nip').val();
		var level = $('#level').val();
		var nama = $('#nama').val();
		var password = $('#password').val();
		var id = $('#id').val();
	
		if (nip =="" || level=="" || nama=="") {
			swal({
				type: 'error',
				title: 'Oops...',
				text: 'Data tidak Boleh kosong !!'
				// footer: '<a href>Why do I have this issue?</a>'
			})
		}else{
			$.ajax({
				type: "POST",
				url: "<?=site_url("admin/is_user2")?>",
				dataType: "json",
				data: "nip="+nip+"&nama="+nama+"&id="+id,                      
				success: function(data){
					if(data.valid){
						const swalWithBootstrapButtons = swal.mixin({
							confirmButtonClass: 'btn btn-success',
							cancelButtonClass: 'btn btn-danger',
							buttonsStyling: false,
						})

						swalWithBootstrapButtons({
							title: 'Yakin akan disimpan ?',
							// text: "You won't be able to revert this!",
							type: 'question',
							showCancelButton: true,
							confirmButtonText: 'Simpan',
							cancelButtonText: 'Batal',
							reverseButtons: false
						}).then((result) => {
							if (result.value) {
								$("#form_user").submit();
								
							} else if (

								result.dismiss === swal.DismissReason.cancel
								) {
								swalWithBootstrapButtons(
									'Gagal'
									)
							}
						})	
					}else{
						swal({
							type: 'error',
							title: 'Oops...',
							text: 'NIP sudah terpakai !!'

						})
						
					}
				}
			});
		}
	});
$('.date').datepicker({
		autoclose: true,
		minViewMode: 3,
		format: 'yyyy/mm/dd'
       });
</script>