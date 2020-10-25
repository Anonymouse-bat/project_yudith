<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign | Homepage</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="overflow: hidden;">
    <div class=" login-box">
        <div class="login-logo">
            <a href="#"><b>Admin</b>LTE</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?= $this->session->flashdata('message'); ?>
            <form action="" method="post">
                <div class="form-group has-feedback <?= form_error('no_tlp') != NULL ? 'has-error' : null ?>">
                    <input type="number" id="no_tlp" name="no_tlp" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" class="form-control" placeholder="No Telephone" value="<?= set_value('no_tlp') ?>" autofocus autocomplete="off">
                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                    <?= form_error('no_tlp', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group has-feedback <?= form_error('password') != NULL ? 'has-error' : null ?>">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
            <hr>
            <a href="<?= base_url('Auth/register') ?>" class="text-center">Register a new membership</a>
        </div>
    </div>

    <script src="<?= base_url('assets') ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/iCheck/icheck.min.js"></script>
</body>

</html>