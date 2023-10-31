<?php
// Menangani data input
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan = $_POST['pendidikan']; { ?>

<style>
.table > :not(:first-child) {
    border-top: 2px solid currentColor;
}
table.table-bordered {
    border: 1px solid black !important;
    margin-top: 20px;
}
table.table-bordered > thead > tr > th {
    border: 1px solid black !important;
}
table.table-bordered > tbody > tr > td {
    border: 1px solid black !important;
}
</style>
<div class="row">
        <div class="col-6 col-sm-2 mb-3">
            <table class="table table-bordered">
                <tr>
                    <td>Nama</td>
                    <td><?= $nama;?></td>
                </tr>

                <tr>
                    <td>Telp</td>
                    <td><?= $alamat;?></td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td><?= $tempat_lahir;?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><?= $tanggal_lahir;?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?= $jenis_kelamin;?></td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td><?= $pendidikan;?></td>
                </tr>
            </table>
</div>
</div>
<?php } ?>