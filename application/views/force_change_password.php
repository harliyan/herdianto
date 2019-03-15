<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>E-DUPAK - Ganti Password</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>app-assets/images/ico/apple-icon-152.png">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>app-assets/images/ico/undip.ico">
    <link rel="shortcut icon" href="<?php echo base_url() ?>app-assets/images/ico/undip.ico" type="image/x-icon" />
    <!-- <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>app-assets/images/ico/favicon-32.png"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>app-assets/vendors/css/extensions/pace.css">
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
    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css">
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
        		<div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
        			<div class="card border-grey border-lighten-3 px-2 py-2 m-0">
        				<div class="card-header no-border text-xs-center">
                            <h3 class="info" style="text-transform: uppercase;">SELAMAT DATANG DI APLIKASI E-DUPAK</h3>
                            <b class="" style="text-transform: uppercase;">Silahkan Ganti Password Anda</b>
                            <br>
                            <br>
        					<h5 class="card-title mt-1"><?php echo session_getnama() ?></h5>
        				</div>

        				<p class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-2"><span>Demi Keamanan, Silahkan Ganti Password Anda</span></p>
        				<div class="card-body collapse in">
        					<div class="card-block">
                                <?php if ($this->session->flashdata('message')): ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="alert alert-danger no-border alert-dismissible fade in mb-2 bg-danger bg-lighten-2" role="alert" style="color: #fff !important;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <?php echo $this->session->flashdata('message'); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif ?>
                                <div class="row"> 
                                    <div class="col-xs-12">                               
                						<form class="form-horizontal" action="<?php echo site_url('user/change_password') ?>" method="post" novalidate>
                                            <fieldset class="form-group position-relative has-icon-left">
                								<input type="password" class="form-control form-control-lg input-lg" name="password" id="password" placeholder="Masukkan Password Baru" style="padding-right: 35px;" required>
                								<div class="form-control-position">
                									<i class="icon-key3"></i>
                								</div>
                								<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                							</fieldset>
                							<fieldset class="form-group row">
                								<div class="col-md-12 col-xs-12 text-xs-center">
                									<fieldset>
                										<input type="checkbox" id="remember-me" class="chk-remember">
                										<label for="remember-me"> Remember Me</label>
                									</fieldset>
                								</div>
                							</fieldset>
                							<button type="submit" class="btn btn-info btn-lg btn-block" style="border-radius: 0px;"><i class="icon-check"></i> Simpan Password Baru</button>
                							<a type="button" class="btn btn-danger btn-lg btn-block" href="<?php echo site_url()?>/login/logout " style="border-radius: 0px;"><i class="icon-power3"></i> Logout</a>

                							<div class="col-md-12 col-xs-12 text-xs-center pt-1">
                								<a href="recover-password.html" class="card-link">Lanjutkan?</a>
                							</div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row grey" style="margin-top: 10px;">
                                    <div class="col-xs-12 text-right">
                                        <a href="<?php echo site_url() ?>/dashboard" class="grey" style="text-decoration: underline;" >Lewati...</a>
                                    </div>
                                </div>
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
    <script src="<?php echo base_url() ?>app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
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
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo base_url() ?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
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
    </script>
  </body>
</html>
