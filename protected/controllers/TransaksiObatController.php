<?php
require_once(Yii::app()->basePath . '/models/TransaksiObat.php');
class TransaksiObatController extends CController
{
    public function actionView($id)
    {
        $model = TransaksiObat::model()->findByPk($id);

        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }

        $this->render('view', array(
            'model' => $model,
        ));
    }

    public function actionViewObat($obatId)
    {
        $transaksiObatList = TransaksiObat::model()->findAllByAttributes(array('obat_id' => $obatId));

        $this->render('viewObat', array(
            'transaksiObatList' => $transaksiObatList,
        ));
    }

    public function actionIndex()
    {
        // Mendapatkan semua data transaksi obat
        $transaksiObatList = TransaksiObat::model()->findAll();

        $this->render('index', array(
            'transaksiObatList' => $transaksiObatList,
        ));
    }
    public function actionInformasiPembayaran()
    {
        $informasiPembayaran = Yii::app()->db->createCommand()
            ->select('*')
            ->from('informasi_pembayaran')
            ->queryAll();
    
        $this->render('informasiPembayaran', array(
            'informasiPembayaran' => $informasiPembayaran,
        ));
    }
    public function actionLaporan()
{
    $data = Yii::app()->db->createCommand()
        ->select('nama, jumlah')
        ->from('laporan')
        ->queryAll();

    $this->render('laporan', array(
        'data' => $data,
    ));
}

public function actionBeliObat($obatId)
{
    $obatId = $obatId;
    $namaObat = 'Nama Obat'; // Isi dengan informasi obat yang dibeli
    $jumlahObat = 1; // Contoh: asumsikan hanya membeli satu obat
    $hargaObat = 10000; // Isi dengan informasi harga obat yang dibeli

    // Check if the form has been submitted multiple times
    if (isset($_POST['submitted'])) {
        // If the form has been submitted multiple times, redirect or show an error message
        $errorMessage = 'Form telah dikirim lebih dari satu kali.';
        $this->render('errorPage', array(
            'errorMessage' => $errorMessage,
        ));
        return;
    }

    // Disable the submit button to prevent multiple submissions
    echo '<script>document.getElementById("submitButton").disabled = true;</script>';

    $command = Yii::app()->db->createCommand();
    $command->insert('pembelian_obat', array(
        'obat_id' => $obatId,
        'obat_nama' => $namaObat,
        'obat_jumlah' => $jumlahObat,
        'obat_harga' => $hargaObat,
    ));

    if ($command->execute()) {
        $this->render('transaksiBerhasil', array(
            'obat' => $obat,
        ));
    } else {
        // Jika terjadi kesalahan saat menyimpan ke database
        // Anda dapat menangani kesalahan ini sesuai kebutuhan
        // Misalnya, tampilkan pesan kesalahan atau lakukan redirect ke halaman lain
        $errorMessage = 'Terjadi kesalahan saat menyimpan transaksi.';
        $this->render('errorPage', array(
            'errorMessage' => $errorMessage,
        ));
    }
}
}
