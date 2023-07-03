<?php
/* @var $this TransaksiObatController */
/* @var $transaksiObatList TransaksiObat[] */

$this->pageTitle = 'Daftar Transaksi Obat Berdasarkan Obat ID';
?>

<h1>Daftar Transaksi Obat Berdasarkan Obat ID</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Obat ID</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transaksiObatList as $transaksiObat): ?>
            <tr>
                <td><?php echo $transaksiObat->id; ?></td>
                <td><?php echo $transaksiObat->obat_id; ?></td>
                <td><?php echo $transaksiObat->tanggal; ?></td>
                <td><?php echo $transaksiObat->jumlah; ?></td>
                <td><?php echo $transaksiObat->harga; ?></td>
                <td><?php echo $transaksiObat->catatan; ?></td>
                <td>
                    <?php echo CHtml::link('Ubah', array('update', 'id' => $transaksiObat->id), array('class' => 'btn btn-primary')); ?>
                    <?php echo CHtml::link('Hapus', array('delete', 'id' => $transaksiObat->id), array('class' => 'btn btn-danger', 'confirm' => 'Apakah Anda yakin ingin menghapus transaksi ini?')); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>