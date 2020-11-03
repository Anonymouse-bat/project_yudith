<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register | Homepage</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/iCheck/square/blue.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?= base_url('assets') ?>/index2.html"><b>Register</b> Member</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>
            <?php echo form_open_multipart('Auth/register'); ?>
            <div class="form-group has-feedback <?= form_error('nama_lengkap') != NULL ? 'has-error' : null ?>">
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap') ?>" autocomplete="off" autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <?= form_error('nama_lengkap', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group has-feedback <?= form_error('no_tlp') != NULL ? 'has-error' : null ?>">
                <input type="text" id="no_tlp" onkeypress="return isNumberKey(event)" name="no_tlp" class="form-control" placeholder="No Telephone" value="<?= set_value('no_tlp') ?>" autocomplete="off">
                <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                <?= form_error('no_tlp', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group has-feedback <?= form_error('jk') != NULL ? 'has-error' : null ?>">
                <select id="jk" name="jk" class="form-control select2_jk">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="1" <?= set_value('jk') == 1 ? 'selected' : null ?>>Laki-Laki</option>
                    <option value="2" <?= set_value('jk') == 2 ? 'selected' : null ?>>Perempuan</option>
                </select>
                <?= form_error('jk', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group has-feedback <?= form_error('alamat') != NULL ? 'has-error' : null ?>">
                <textarea id="alamat" name="alamat" cols="30" rows="4" class="form-control" placeholder="Alamat Rumah Saat Ini" autocomplete="off"><?= set_value('alamat') ?></textarea>
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group <?= form_error('id_provinsi') != NULL ? 'has-error' : null ?>">
                <select id="id_provinsi" name="id_provinsi" class="form-control select2">
                    <option value="">-- Pilih Provinsi --</option>
                    <?php foreach ($row as $key => $data) { ?>
                        <option value="<?= $data->id_provinsi ?>" <?= set_value('id_provinsi') == $data->id_provinsi ? "selected" : null ?>><?= $data->nama_provinsi ?></option>
                    <?php } ?>
                </select>
                <?= form_error('id_provinsi', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group has-feedback">
                <input type="file" id="foto_ktp" name="foto_ktp" class="form-control" placeholder="File Ktp" autocomplete="off" required>
                <span class="glyphicon glyphicon-cloud-upload form-control-feedback"></span>
                <small><a href="https://www.reduceimages.com/" target="_blank"><span class="text-danger">* Max File Foto 2 Mb </span></a> |<span><a href="https://www.reduceimages.com/" target="_blank"> Convert disini</a></span></small>
            </div>
            <div class="form-group has-feedback <?= form_error('password') != NULL ? 'has-error' : null ?>">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="form-group has-feedback <?= form_error('password') != NULL ? 'has-error' : null ?>">
                <input type="password" name="retype_password" class="form-control" placeholder="Ulangi password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
            </div>
            </form>
            <hr>
            <a href="<?= base_url('Auth') ?>" class="text-center">Sudah punya account ? Silahkan Login</a>
        </div>
    </div>

    <script src="<?= base_url('assets') ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/iCheck/icheck.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
            $('.select2_jk').select2();

        });

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

</body>

</html>