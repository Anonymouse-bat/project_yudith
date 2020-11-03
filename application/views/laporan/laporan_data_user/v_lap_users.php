<section class="content-header">
    <h1>Laporan Data Users <small>Lap Data Users</small></h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>
        </li>
        <li>
            Laporan
        </li>
        <li class="active">
            Lap Data Users
        </li>
    </ol>
</section>

<section class="content">
    <?= $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header">
            <h4>Laporan Data Users
                <div class="pull-right">
                    <button type="button" class="btn btn-warning cetak" data-toggle="show" title="Cetak"><i class="glyphicon glyphicon-print"></i></button>
                </div>
            </h4>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">No Telephone</th>
                        <th class="text-center" style="overflow: auto; margin: 0px; width: 302px;">Alamat</th>
                        <th class="text-center">Provinsi</th>
                        <th class="text-center">Created</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($get_user_data as $key => $data) { ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $data->nama_lengkap ?></td>
                            <td class="text-center"><?= $data->jk == 1 ? 'Pria' : 'Wanita' ?></td>
                            <td class="text-center"><?= $data->no_tlp ?></td>
                            <td>
                                <textarea name="" id="" rows="4" style="overflow: auto; margin: 0px; width: 302px; height: 45px;" readonly><?= $data->alamat ?></textarea>
                            </td>
                            <td class="text-center"><?= $data->nama_provinsi ?></td>
                            <td class="text-center"><?= $data->created ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('./uploads/ktp_user/' . $data->foto_ktp); ?>" download class="btn btn-success" data-toggle="show" title="Download KTP">
                                    <i class="fa fa-download"></i>
                                </a>
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
                <div class="alert alert-success">
                    <center><b>Laporan Data Users</b></center>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= site_url('Lap_users/get_data') ?>" target="_blank">
                    <div class="form-group">
                        <label class="control-label">Pilih Provinsi</label>
                        <select name="id_provinsi" id="id_provinsi" class="form-control select2" style="width: 100%;">
                            <option value=""> --Pilih-- </option>
                            <?php foreach ($provinsi as $key => $data) { ?>
                                <option value="<?= $data->id_provinsi ?>"><?= $data->nama_provinsi ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input type="date" name="end_date" class=" form-control">
                    </div>
                    <hr style="border: none;border-bottom: 1px solid black;width: 80%;">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger " data-toggle="tooltip" title="Back" onclick="refreshPage()" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
                        <button class="btn btn-primary" type="submit" name="submit" value="proses" data-toggle="tooltip" title="Print" onclick="return valid();"><i class="glyphicon glyphicon-print"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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