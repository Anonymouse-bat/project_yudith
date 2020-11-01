<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Laporan Pengeluaran_<?= date('Y-m-d') ?></title>
</head>

<body>
    <div class="text-center">
        <h3>Laporan Data Users</h3>
        <h5>Filter : </h5>
    </div>
    <hr style="width: 40%;">
    <b style="text-align: center;"> </b>
    <br>
    Print On : <?= date('Y-m-d H:i:s'); ?>

    <table class=" table table-striped table-bordered table-responsive" style="padding-top: 10px;">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center">Gander</th>
                <th class="text-center">No Telephone</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Provinsi</th>
                <th class="text-center">Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($get_all_data as $key => $data) { ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $data->nama_lengkap ?></td>
                    <td class="text-center"><?= $data->jk == 1 ? 'Pria' : 'Wanita' ?></td>
                    <td class="text-center"><?= $data->no_tlp ?></td>
                    <td>
                        <?= $data->alamat ?>
                    </td>
                    <td class="text-center"><?= $data->nama_provinsi ?></td>
                    <td class="text-center"><?= $data->created ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>