<?php
/* @var $this TransaksiObatController */
/* @var $model TransaksiObat */

$this->pageTitle = 'Detail Transaksi Obat';
?>

<h1>Detail Transaksi Obat</h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $model->id; ?></td>
    </tr>
    <tr>
        <th>Obat ID</th>
        <td><?php echo $model->obat_id; ?></td>
    </tr>
    <tr>
        <th>Tanggal</th>
        <td><?php echo $model->tanggal; ?></td>
    </tr>
    <tr>
        <th>Jumlah</th>
        <td><?php echo $model->jumlah; ?></td>
    </tr>
    <tr>
        <th>Harga</th>
        <td><?php echo $model->harga; ?></td>
    </tr>
    <tr>
        <th>Catatan</th>
        <td><?php echo $model->catatan; ?></td>
    </tr>
</table>