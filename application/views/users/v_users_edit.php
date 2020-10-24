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
                    <form action="" method="POST">
                        <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                        <div class="form-group <?= form_error('name') == true ? 'has-error' : null ?>">
                            <label for="">Nama Lengkap <i class="text-danger">* </i></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" value="<?= $this->input->post('nama_lengkap') ?? $row->nama_lengkap ?>" autocomplete="off">
                            <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group <?= form_error('email') == true ? 'has-error' : null ?>">
                            <label for="">No Telephone <i class="text-danger">* </i></label>
                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?= $this->input->post('no_tlp') ?? $row->no_tlp ?>" autocomplete="off">
                            <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
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