<section class="content-header">
    <h1>Preview News <small>News</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            <a href="<?= site_url('News_approve') ?>">Preview News</a>
        </li>
        <li class="active">
            Preview News
        </li>
    </ol>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h4>
                Preview News
                <div class="pull-right">
                    <a href="<?= site_url('News_approve') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body pad">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1><?= $row->news_head ?></h1>
                    <small style="opacity: 0.7;"><?= $row->nama_lengkap  ?> | <?= $row->updated_news == null ? $row->created_news : $row->updated_news ?> <?= $row->updated_news == NULL ? '' : '(Updated)' ?> </small>
                    <?php if ($row->news_image == NULL) { ?>
                        <a href="<?= base_url('./uploads/news_image/image_not_found/image_not_available.png'); ?>" download>
                            <img src="<?= base_url('./uploads/news_image/image_not_found/image_not_available.png'); ?>" style="width: 800px; height: 400px;">
                        </a>
                    <?php  } else { ?>
                        <a href="<?= base_url('./uploads/news_image/') . $row->news_image ?>" download>
                            <img src="<?= base_url('./uploads/news_image/') . $row->news_image ?>" style="width: 800px; height: 400px;">
                        </a>
                    <?php } ?>
                    <small style="opacity: 0.8;"><i class="text-danger">*</i> Klik Image untuk Download</small>
                    <hr>
                    <?= $row->messsage_content ?>
                </div>
            </div>
        </div>
    </div>
</section>