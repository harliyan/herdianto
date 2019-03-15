<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
     <script src="<?php echo base_url() ?>app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/FileSaver.js"></script>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>E-DUPAK - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/ui/prism.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/sliders/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/sweet/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/sweet/sweetalert2.min.css">

    <link href="<?php echo base_url() ?>app-assets/newpicker/monthpicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/newpicker/examples.css" />
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/plugins/pickers/daterange/daterange.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <style>
    .field-icon {
    	top: 15px;
    	right: 9px;
    	position: absolute;
    	z-index: 2;
    }

    .container{
    	padding-top:50px;
    	margin: auto;
    }
    </style>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-md-8 offset-md-2 col-xs-10 offset-xs-1 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header no-border text-xs-center">
                                <h3 class="info" style="text-transform: uppercase;">SELAMAT DATANG DI APLIKASI E-DUPAK</h3>
                                <b class="" style="text-transform: uppercase;">Silahkan Lengkapi Data Anda</b>
                                <br>
                                <br>
                                <h5 class="card-title mt-1"><?php echo session_getnama() ?></h5>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <div class="row"> 
                                        <div class="col-lg-12">                               
                                            <form class="form-horizontal" action="<?=site_url("dashboard/update_data")?>" method="post">
                                                <div class="row col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="jenis_kelamin"><b>Pilih Jenis Kelamin</b></label>
                                                            <div class="input-group">
                                                                <select class="input form-control border-info" name="jenis_kelamin" id="jenis_kelamin" required="true">
                                                                    <option value="">- Jenis Kelamin -</option> 
                                                                    <option value="l">Laki Laki</option>
                                                                    <option value="p">Perempuan</option>                                      
                                                                </select> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pangkat_golongan"><b>Pangkat / Golongan</b></label>
                                                            <div class="input-group">
                                                                <input type="text" id="pangkat_golongan" class="form-control border-info" placeholder="pangkat_golongan" name="pangkat_golongan" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_lahir"><b>Tempat Lahir</b></label>
                                                            <div class="input-group">
                                                                <input type="text" id="tempat_lahir" class="form-control border-info" placeholder="tempat_lahir" name="tempat_lahir" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tanggal_lahir"><b>Tanggal Lahir</b></label>
                                                            <div class="input-group">
                                                                <input type="text" id="tanggal_lahir" class="form-control border-info" placeholder="tanggal_lahir" name="tanggal_lahir" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pendidikan"><b>Pendidikan</b></label>
                                                            <div class="input-group">
                                                                <input type="text" id="pendidikan" class="form-control border-info" placeholder="pendidikan" name="pendidikan" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="jabatan"><b>Jabatan</b></label>
                                                            <div class="input-group">
                                                                <input type="text" id="jabatan" class="form-control border-info" placeholder="jabatan" name="jabatan" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">

                                                    <div class="col-md-12">
                                                        <div class="form-actions right"  >  
                                                            <button type="submit" class="btn btn-info mr-1">
                                                                <i class="icon-check2"></i> SIMPAN
                                                            </button>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
   <script src="<?php echo base_url() ?>app-assets/sweet/sweetalert2.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>app-assets/sweet/sweetalert2.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>app-assets/sweet/sweetalert2.all.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>app-assets/sweet/sweetalert2.all.min.js" type="text/javascript"></script>



<!--     <script src="<?php echo base_url() ?>app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
    -->
     <script src="<?php echo base_url() ?>app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="<?php echo base_url() ?>app-assets/vendors/js/ui/prism.min.js"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo base_url() ?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    <!-- datatable -->
     <script src="<?php echo base_url() ?>app-assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/js/scripts/forms/extended/form-inputmask.min.js" type="text/javascript"></script> 


    <script src="<?php echo base_url() ?>app-assets/vendors/js/forms/extended/formatter/formatter.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/js/scripts/forms/extended/form-formatter.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>app-assets/vendors/js/tables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/js/scripts/tables/datatables/datatable-advanced.min.js" type="text/javascript"></script>


    
    <script type="text/javascript" src="<?php echo base_url() ?>assets/FileSaver.js"></script>
    <script>
    	$(".toggle-password").click(function() {

    		$(this).toggleClass("fa-eye fa-eye-slash");
    		var input = $($(this).attr("toggle"));
    		if (input.attr("type") == "password") {
    			input.attr("type", "text");
    		} else {
    			input.attr("type", "password");
    		}
    	});

    $('#tanggal_lahir').datepicker({
        autoclose: true,
        minViewMode: 3,
        format: 'yyyy/mm/dd'
       });
    </script>
  </body>
</html>
