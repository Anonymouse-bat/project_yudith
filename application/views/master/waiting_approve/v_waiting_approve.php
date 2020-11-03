<section class="content-header">
    <h1>Data Berita Member <small>Berita Member</small></h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>
        </li>
        <li>
            Master
        </li>
        <li class="active">
            Berita Member
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>Data Berita Member
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
                                <a href="<?= site_url('Waiting_approve/preview/' . $data->keluhan_id) ?>" class="btn btn-default" data-toggle="show" title="Preview">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="<?= site_url('Waiting_approve/edit/' . $data->keluhan_id) ?>" class="btn btn-success" data-toggle="show" title="Edit">
                                    <i class=" fa fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger cetak" id="select" data-keluhan_id="<?= $data->keluhan_id ?>" data-toggle="show" title="Rejected">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-danger">
                    <center><b>Rejected ?</b></center>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= site_url('Waiting_approve/del') ?>">
                    <div class="form-group">
                        <input type="hidden" name="keluhan_id" id="keluhan_id" class="form-control" readonly>
                    </div>
                    <textarea name="noted" id="noted" cols="30" rows="4" placeholder="Catatan" class="form-control" autocomplete="off" autofocus required></textarea>
                    <hr style="border: none;border-bottom: 1px solid black;width: 80%;">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger " data-toggle="tooltip" title="Back" onclick="refreshPage()" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
                        <button type="submit" id="keluhan_id" class="btn btn-primary" id="select" data-toggle="show" title="Submit"><i class="fa fa-plus"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {

            $('#keluhan_id').val($(this).data('keluhan_id'));

            $('#exampleModal').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".cetak").click(function() {
            $("#exampleModal").modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    });
</script>
<script>
    function refreshPage() {
        window.location.reload();
    }
</script>