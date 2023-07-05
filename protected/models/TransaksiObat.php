<?php
class TransaksiObat extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'obat_m';
    }

    public function rules()
    {
        return array(
            array('obat_nama, obat_jumlah, obat_harga', 'required'),
            array('obat_jumlah', 'numerical', 'integerOnly' => true),
            array('obat_harga', 'numerical'),
            array('obat_id, obat_nama, obat_jumlah, obat_harga', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'obat_id' => 'Obat ID',
            'obat_nama' => 'Nama Obat',
            'obat_jumlah' => 'Jumlah Obat',
            'obat_harga' => 'Harga Obat',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('obat_id', $this->obat_id);
        $criteria->compare('obat_nama', $this->obat_nama, true);
        $criteria->compare('obat_jumlah', $this->obat_jumlah);
        $criteria->compare('obat_harga', $this->obat_harga);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}