<section class="content-header">
    <h1>Data Berita Terupdate <small>Berita Terupdate</small></h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>
        </li>
        <li>
            Master
        </li>
        <li class="active">
            Berita Terupdate
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>Data Berita Terupdate
                <div class="pull-right">
                    <a href="<?= site_url('Keluhan/add') ?>" class="btn btn-primary" data-toggle="show" title="Add">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Users</th>
                        <th class="text-center" style="overflow: auto; margin: 0px; width: 302px;">Kepala Berita</th>
                        <th class="text-center">Tgl Berita</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->nama_lengkap ?></td>
                            <td>
                                <textarea name="" id="" rows="4" style="overflow: auto; margin: 0px; width: 302px; height: 45px;" readonly><?= $data->news_head ?></textarea>
                            </td>
                            <td class="text-center"><?= $data->created_news ?></td>
                            <td class="text-center">
                                <a href="<?= site_url('News_approve/preview/' . $data->keluhan_id) ?>" class="btn btn-default" data-toggle="show" title="Preview">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <?php if ($this->fungsi->user_login()->level == 1) { ?>
                                    <a href="<?= site_url('News_approve/del/' . $data->keluhan_id) ?>" class="btn btn-danger" data-toggle="show" title="Hapus" onclick="return confirm('Data <?= $data->news_head ?> akan dihapus, Apakah Yakin ?')">
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