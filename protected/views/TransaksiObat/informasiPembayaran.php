<?php
/* @var $this TransaksiObatController */
/* @var $informasiPembayaran array */

$this->pageTitle = 'Informasi Pembayaran';
?>

<h1>Informasi Pembayaran</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Catatan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($informasiPembayaran as $pembayaran): ?>
            <tr>
                <td><?php echo $pembayaran['id']; ?></td>
                <td><?php echo $pembayaran['tanggal']; ?></td>
                <td><?php echo $pembayaran['jumlah']; ?></td>
                <td><?php echo $pembayaran['catatan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>