<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?php echo base_url() ?>app-assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>app-assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>app-assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>app-assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
              <?php if ($this->session->flashdata('message')): ?>
                    <div class="col-xs-12">
                        <div class="alert alert-danger no-border alert-dismissible fade in mb-2 bg-danger bg-lighten-2" role="alert" style="color: #fff !important;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    </div>
                    <?php endif ?>
            <form class="form-horizontal form-simple" action="<?php echo site_url('login/auth') ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>app-assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>app-assets/js/bootstrap.min.js"></script>

</body>

</html>
