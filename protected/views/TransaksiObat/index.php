
<h1>Daftar Transaksi Obat</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Obat ID</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <!-- Tambahkan kolom lain yang Anda perlukan -->
    </tr>
    <?php foreach ($transaksiObatList as $transaksiObat): ?>
        
        <tr>
            <td><?php echo $transaksiObat->obat_id; ?></td>
            <td><?php echo $transaksiObat->obat_nama; ?></td>
            <td><?php echo $transaksiObat->obat_jumlah; ?></td>
            <td><?php echo $transaksiObat->obat_harga; ?></td>
            <td> <?php echo CHtml::link('Beli Obat', array('beliObat', 'obatId' => $transaksiObat->obat_id)); ?></td>
            <!-- Tambahkan kolom lain yang Anda perlukan -->
        </tr>
    <?php endforeach; ?>
</table>