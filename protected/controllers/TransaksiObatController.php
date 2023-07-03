<?php

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
}

