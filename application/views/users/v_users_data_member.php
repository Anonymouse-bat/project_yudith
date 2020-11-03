<style>
    #hover_btn:hover {
        background-color: orange;
        color: black;
        font-weight: bold;
    }
</style>

<section class="content-header">
    <h1>Data Users <small>Users</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            Users
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-md-2">
            <div class="box box-primary">
                <img src="<?= $this->fungsi->user_login()->jk == 1 ? base_url('assets/dist/img/male.png') : base_url('assets/dist/img/female.png') ?>" class="img-responsive center-block">
            </div>
        </div>
        <div class="col-md-10">
            <div class="box box-success">
                <div class="box-body">
                    <form action="<?= site_url('Users/edit'); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?= $this->fungsi->user_login()->user_id ?>" required>
                        <div class="form-group">
                            <label for="">Nama Lengkap <i class="text-danger">* </i></label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?= $this->fungsi->user_login()->nama_lengkap ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group <?= form_error('no_tlp') == true ? 'has-error' : null ?>">
                            <label for="">No Telephone <i class="text-danger">* </i></label>
                            <input type="text" name="no_tlp" id="no_tlp" placeholder="Email" class="form-control" value="<?= $this->fungsi->user_login()->no_tlp ?>" autocomplete="off" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="news_image">Image <span class="text-danger">* </span>| <small><a href="https://www.reduceimages.com/" target="_blank"><span class="text-danger">* Max File Foto 2 Mb </span></a> |<span><a href="https://www.reduceimages.com/" target="_blank"> Convert disini</a></span></small></label>
                            <div style="margin-bottom: 5px;">
                                <a href="<?= base_url('./uploads/ktp_user/') . $this->fungsi->user_login()->foto_ktp ?>" download>
                                    <img src="<?= base_url('./uploads/ktp_user/') . $this->fungsi->user_login()->foto_ktp ?>" style="width: 300px; height: 150px;">
                                </a>
                            </div>
                            <input type="file" id="foto_ktp" name="foto_ktp" class="form-control" placeholder="File Ktp" autocomplete="off">
                            <span class="text-danger">* Biarkan Kosong jika tidak diganti</span>
                        </div>
                        <div class="form-group <?= form_error('alamat') == true ? 'has-error' : null ?>">
                            <label for="">Alamat Rumah Saat Ini <i class="text-danger">* </i></label>
                            <textarea name="alamat" id="alamat" placeholder="Alamat" rows="3" class="form-control" required><?= $this->fungsi->user_login()->alamat ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Retype Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="retype_password" placeholder="Retype Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <hr style="width: 80%;">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block" id="hover_btn" style="width: 100%;">Update</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>