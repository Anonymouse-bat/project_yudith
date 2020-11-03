<section class="content-header">
    <h1>Edit Users <small>Users</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            <a href="<?= site_url('Users') ?>">
                Users
            </a>
        </li>
        <li>
            Edit
        </li>
    </ol>
</section>

<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h4>Edit Users
                <div class="pull-right">
                    <a href="<?= site_url('Users') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                        <div class="form-group <?= form_error('nama_lengkap') == true ? 'has-error' : null ?>">
                            <label for="">Nama Lengkap <i class="text-danger">* </i></label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?= $this->input->post('nama_lengkap') ?? $row->nama_lengkap ?>" autocomplete="off">
                            <?= form_error('nama_lengkap', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('email') == true ? 'has-error' : null ?>">
                            <label for="">No Telephone <i class="text-danger">* </i></label>
                            <input type="text" name="no_tlp" id="no_tlp" placeholder="Email" class="form-control" value="<?= $this->input->post('no_tlp') ?? $row->no_tlp ?>" autocomplete="off" readonly>
                            <?= form_error('no_tlp', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="news_image">Image <span class="text-danger">* </span>| <small><a href="https://www.reduceimages.com/" target="_blank"><span class="text-danger">* Max File Foto 2 Mb </span></a> |<span><a href="https://www.reduceimages.com/" target="_blank"> Convert disini</a></span></small></label>
                            <div style="margin-bottom: 5px;">
                                <a href="<?= base_url('./uploads/ktp_user/') . $row->foto_ktp ?>" download>
                                    <img src="<?= base_url('./uploads/ktp_user/') . $row->foto_ktp ?>" style="width: 300px; height: 150px;">
                                </a>
                            </div>
                            <input type="file" id="foto_ktp" name="foto_ktp" class="form-control" placeholder="File Ktp" autocomplete="off">
                            <span class="text-danger">* Biarkan Kosong jika tidak diganti</span>
                        </div>
                        <div class="form-group <?= form_error('alamat') == true ? 'has-error' : null ?>">
                            <label for="">Alamat <i class="text-danger">* </i></label>
                            <textarea name="alamat" id="alamat" placeholder="Alamat" rows="3" class="form-control"><?= $this->input->post('alamat') ?? $row->alamat ?></textarea>
                            <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('password') == true ? 'has-error' : null ?>">
                            <label for="">Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('password') == true ? 'has-error' : null ?>">
                            <label for="">Retype Password <i class="text-danger">* Biarkan kosong jika tidak diganti</i></label>
                            <input type="password" name="retype_password" placeholder="Retype Password" class="form-control">
                            <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('is_active') == true ? 'has-error' : null ?>">
                            <label for="">Is Active <i class="text-danger">* </i></label>
                            <select name="is_active" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $row->is_active == 1 ? 'selected' : null ?>>Aktif</option>
                                <option value="0" <?= $row->is_active == 0 ? 'selected' : null ?>>Tidak Aktif</option>
                            </select>
                            <?= form_error('is_active', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('level') == true ? 'has-error' : null ?>">
                            <label for="">Level <i class="text-danger">* </i></label>
                            <select name="level" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $row->level == 1 ? 'selected' : null ?>>Admin</option>
                                <option value="2" <?= $row->level == 2 ? 'selected' : null ?>>Member</option>
                            </select>
                            <?= form_error('level', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger"><i class="fa fa-rotate-left"></i></button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>