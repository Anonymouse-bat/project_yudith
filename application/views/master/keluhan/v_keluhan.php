<section class="content-header">
    <h1>Data Keluhan <small>Keluhan</small></h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>
        </li>
        <li>
            Master
        </li>
        <li class="active">
            Keluhan
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>Data Keluhan
                <div class="pull-right">
                    <a href="<?= site_url('Keluhan/add') ?>" class="btn btn-primary">
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
                        <th class="text-center">Kepala Berita</th>
                        <th class="text-center">Tgl Berita</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $data->news_head ?></td>
                            <td class="text-center">
                                <?= $data->created_news ?>
                            </td>

                            <!-- Status -->
                            <?php if ($data->is_deleted_keluhan == 1) { ?>
                                <td class="text-center">
                                    <span class="btn btn-danger">Rejected</span>
                                </td>
                            <?php } elseif ($data->status == 1) { ?>
                                <td class="text-center">
                                    <span class="btn btn-success">Go Public</span>
                                </td>
                            <?php } elseif ($data->status == 0) { ?>
                                <td class="text-center">
                                    <span class="btn btn-primary">Dalam Antrian</span>
                                </td>
                            <?php } ?>
                            <!-- End Status -->
                            <!-- Edit -->
                            <td class="text-center">
                                <a href="<?= site_url('Keluhan/preview/' . $data->keluhan_id) ?>" class="btn btn-default">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="<?= site_url('Keluhan/edit/' . $data->keluhan_id) ?>" class="btn btn-success">
                                    <i class=" fa fa-edit"></i>
                                </a>
                                <!-- End Preview -->
                                <?php if ($data->status == 1 and $data->level == 2) { ?>
                                    <button disabled class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                <?php } else { ?>
                                    <a href="<?= site_url('Keluhan/del/' . $data->keluhan_id) ?>" class="btn btn-danger" onclick="return confirm('Data <?= $data->news_head ?> akan dihapus, Apakah Yakin ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                <?php } ?>
                            </td>
                            <!-- End Edit -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>