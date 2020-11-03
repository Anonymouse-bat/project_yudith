<?php
date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main Menu | <?= $this->fungsi->user_login()->level == 1 ? 'Admin' : 'Member' ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="<?= base_url('assets') ?>/index2.html" class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!--  Show Notif -->
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <!-- Waiting Approved  -->
                            <li class="dropdown notifications-menu">

                                <?php
                                $query = $this->db->query("SELECT * FROM keluhan WHERE status = 0");
                                $waiting_approve = $query->num_rows();
                                ?>

                                <?php
                                $date  = date('Y-m-d');
                                $query = $this->db->query("SELECT * FROM keluhan WHERE date_news = '$date' AND status = 0");
                                $waiting_approved_harini = $query->num_rows();
                                ?>

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-hourglass-start"></i>
                                    <span class="label label-success"><?= $waiting_approved_harini; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Ada <b><?= $waiting_approve; ?></b> Antrian Berita</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="<?= site_url('Waiting_approve/index/' . $date) ?>">

                                                    <i class="fa fa-envelope-o text-green"></i>
                                                    <?php if ($waiting_approved_harini == NULL) { ?>
                                                        Belum Ada Berita Member Baru Hariini
                                                    <?php } else { ?>
                                                        Ada <b><?= $waiting_approved_harini; ?></b> Berita Member Baru Hariini
                                                    <?php } ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="<?= site_url('Waiting_approve') ?>">View all</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                        <!-- End Waiting Approved -->

                        <!-- News Today -->
                        <li class="dropdown notifications-menu">
                            <?php
                            $date  = date('Y-m-d');
                            $query = $this->db->query("SELECT * FROM keluhan WHERE date_approve = '$date' AND status = 1");
                            $news_today = $query->num_rows();
                            ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-danger"><?= $news_today; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="<?= site_url('News_approve/index/' . $date) ?>">
                                                <i class="fa fa-envelope-open-o text-aqua"></i>
                                                <?php if ($news_today == NULL) { ?>
                                                    Belum Ada Berita Baru Hariini
                                                <?php } else { ?>
                                                    Ada <b><?= $news_today; ?></b> Berita Baru Hariini
                                                <?php } ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="<?= site_url('News_approve'); ?>">View all</a></li>
                            </ul>
                        </li>
                        <!-- End News Today -->

                        <!-- Users -->
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="dropdown notifications-menu">
                                <?php
                                $query = $this->db->query("SELECT * FROM user WHERE is_active = 0");
                                $non_aktif = $query->num_rows();
                                ?>

                                <?php
                                $date  = date('Y-m-d');
                                $query = $this->db->query("SELECT * FROM user WHERE date_user = '$date' AND is_active = 0");
                                $member_harini = $query->num_rows();
                                ?>

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user-o"></i>
                                    <span class="label label-warning"><?= $member_harini; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Ada <b><?= $non_aktif; ?></b> Member belum Aktif</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="<?= site_url('Users/v_users_admin/' . $date) ?>">

                                                    <i class="fa fa-users text-aqua"></i>
                                                    <?php if ($member_harini == NULL) { ?>
                                                        Belum Ada Member Baru Hariini
                                                    <?php } else { ?>
                                                        Ada <b><?= $member_harini; ?></b> Member Baru Hariini
                                                    <?php } ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="<?= site_url('Users/v_users_admin') ?>">View all</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                        <!-- Users -->
                        <!-- End Show Notif -->
                        <li class=" dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= $this->fungsi->user_login()->jk == 1 ? base_url('assets/dist/img/male.png') : base_url('assets/dist/img/female.png') ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= ucfirst($this->fungsi->user_login()->nama_lengkap) ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= $this->fungsi->user_login()->jk == 1 ? base_url('assets/dist/img/male.png') : base_url('assets/dist/img/female.png') ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?= ucfirst($this->fungsi->user_login()->nama_provinsi) ?>
                                        <small><?= $this->fungsi->user_login()->level == 1 ? 'Admin' : 'Member' ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= site_url('Users') ?>" class="btn btn-default">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('Auth/logout') ?>" class="btn btn-danger">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel" style="padding-top: 20px;">
                    <div class="pull-left image">
                        <img src="<?= $this->fungsi->user_login()->jk == 1 ? base_url('assets/dist/img/male.png') : base_url('assets/dist/img/female.png') ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->fungsi->user_login()->nama_lengkap) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree" style="padding-top: 10px;">
                    <li class="header">Main Page</li>
                    <li <?= $this->uri->segment(1) == 'Keluhan' ? 'class="active"' : null ?>>
                        <a href="<?= site_url('Keluhan') ?>">
                            <i class="fa fa-newspaper-o"></i>
                            <span>Keluhan</span>
                        </a>
                    </li>
                    <li class="header">News</li>
                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li <?= $this->uri->segment(1) == 'Waiting_approve' ? 'class="active"' : null ?>>
                            <a href="<?= site_url('Waiting_approve') ?>">
                                <i class="fa fa-hourglass-start"></i>
                                <span>Waiting Approved</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'Rejected' ? 'class="active"' : null ?>>

                            <?php
                            $query = $this->db->query("SELECT * FROM keluhan WHERE is_deleted = 1");
                            $rejected = $query->num_rows();
                            ?>
                            <a href="<?= site_url('Rejected') ?>">
                                <i class="fa fa-ban"></i> <span>Rejected</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-red"><?= $rejected ?></small>
                                </span>
                            </a>
                        </li>
                    <?php } ?>

                    <li <?= $this->uri->segment(1) == 'News_approve' ? 'class="active"' : null ?>>
                        <a href="<?= site_url('News_approve') ?>">
                            <i class="fa fa-line-chart"></i> <span>Berita Terupdate</span>
                            <?php if ($news_today != NULL) { ?>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">new</small>
                                </span>
                            <?php } ?>
                        </a>
                    </li>

                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li class="header">Laporan</li>
                        <li <?= $this->uri->segment(1) == 'Lap_users' ? 'class="active"' : null ?>>
                            <a href="<?= site_url('Lap_users') ?>">
                                <i class="fa fa-bar-chart text-success"></i>
                                <span>Laporan Data User</span>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="header">Users</li>
                    <li <?= $this->uri->segment(1) == 'Users' ? 'class="active"' : null ?>>
                        <a href="<?= site_url('Users') ?>">
                            <i class="fa fa-user-o text-red"></i>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <script src="<?= base_url('assets') ?>/bower_components/jquery/dist/jquery.min.js"></script>
            <?= $contents ?>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <div class="text-center">
                <strong style="text-align: center;">&copy; Copyright <?= date('Y') ?> | Built <i style="color: salmon" class="glyphicon glyphicon-heart"></i> By. Database Provinsi</a></strong>
            </div>
        </footer>
    </div>

    <script src="<?= base_url('assets') ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url('assets') ?>/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= base_url('assets') ?>/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url('assets') ?>/dist/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree()
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>
    <script>
        $('#messsage_content').wysihtml5({
            toolbar: {
                "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                "emphasis": true, //Italics, bold, etc. Default true
                "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html": false, //Button which allows you to edit the generated HTML. Default false
                "link": false, //Button to insert a link. Default true
                "image": false, //Button to insert an image. Default true,
                "color": true, //Button to change color of font  
                "blockquote": true //Blockquote  
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="show"]').tooltip();
        });
    </script>
</body>

</html>