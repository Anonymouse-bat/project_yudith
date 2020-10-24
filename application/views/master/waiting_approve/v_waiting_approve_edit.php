<section class="content-header">
    <h1>Data Keluhan Member <small>Keluhan Member</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('Dashboard') ?>">
                <i class="fa fa-dashboard"></i>
            </a>
        </li>
        <li>
            <a href="<?= site_url('Waiting_approve') ?>">Keluhan Member</a>
        </li>
        <li class="active">
            Edit
        </li>
    </ol>
</section>
<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h4>
                Edit Keluhan Member
                <div class="pull-right">
                    <a href="<?= site_url('Waiting_approve') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </h4>
        </div>
        <div class="box-body pad">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="" method="POST">
                        <input type="hidden" name="keluhan_id" id="keluhan_id" value="<?= $row->keluhan_id ?>">
                        <div class="form-group <?= form_error('news_head') != NULL ? 'has-error' : null ?>">
                            <label for="news_head">Kepala Berita <i class="text-danger">*</i></label>
                            <input type="text" name="news_head" id="news_head" class="form-control" placeholder="Kepala Berita" autocomplete="off" value="<?= $this->input->post('news_head') ?? $row->news_head ?>">
                            <?= form_error('news_head', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="news_image">Image </label>
                            <input type="file" name="news_image" id="news_image" class="form-control" placeholder="Kepala Berita" autocomplete="off">
                            <i class="text-danger">* Biarkan Kosong jika tidak ada</i>
                        </div>
                        <div class="form-group <?= form_error('messsage_content') != NULL ? 'has-error' : null ?>">
                            <textarea class="textarea" name="messsage_content" id="messsage_content" placeholder="Isi Berita Disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $this->input->post('messsage_content') ?? $row->messsage_content ?></textarea>
                            <?= form_error('messsage_content', '<div class="text-danger">', '</div>'); ?>
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