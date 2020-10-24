<section class="content-header">
    <h1>Preview Keluhan <small>Keluhan</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            <a href="<?= site_url('Keluhan') ?>">Keluhan</a>
        </li>
        <li class="active">
            Preview
        </li>
    </ol>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h4>
                Preview Keluhan
                <div class="pull-right">
                    <a href="<?= site_url('Keluhan') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body pad">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1><?= $row->news_head ?></h1>
                    <small style="opacity: 0.7;"><?= $row->nama_lengkap  ?> | <?= $row->updated_news == null ? $row->created_news : $row->updated_news ?></small>
                    <hr>
                    <?= $row->messsage_content ?>
                </div>
            </div>
        </div>
    </div>
</section>