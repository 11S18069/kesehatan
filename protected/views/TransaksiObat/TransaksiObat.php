<h1>Laporan</h1>

<table>
    <tr>
        <th>Nama</th>
        <th>Jumlah</th>
        <!-- Tambahkan kolom lain yang Anda perlukan -->
    </tr>
    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['jumlah']; ?></td>
            <!-- Tambahkan kolom lain yang Anda perlukan -->
        </tr>
    <?php endforeach; ?>
</table>