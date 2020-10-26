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
    <div class="box box-primary">
        <div class="box-header">
            <h4>Data Users</h4>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">No Telephone</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Is Active</th>
                        <th class="text-center">Level</th>
                        <th class="text-center">Approved By</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $data->nama_lengkap ?></td>
                            <td><?= $data->no_tlp ?></td>
                            <td><?= $data->alamat ?></td>
                            <td class="text-center">
                                <?php if ($data->is_active == 1) { ?>
                                    <a href="" class="btn btn-success btn-xs">Aktif</a>
                                <?php } else { ?>
                                    <a href="" class="btn btn-danger btn-xs">Tidak Aktif</a>
                                <?php } ?>
                            </td>
                            <td class="text-center"><?= $data->level == 1 ? 'Admin' : 'Member' ?></td>
                            <td class="text-center"><?= $data->approve_by == NULL ? '-' : $data->approve_by ?></td>
                            <td class="text-center">
                                <a href="<?= site_url('Users/edit_admin/' . $data->user_id) ?>" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <?php if ($this->fungsi->user_login()->user_id == $data->user_id) { ?>
                                    <button disabled class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                <?php } else { ?>
                                    <a href="<?= site_url('Users/del/' . $data->user_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data <?= $data->nama_lengkap ?> akan dihapus secara permanen, apakah anda yakin  ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>