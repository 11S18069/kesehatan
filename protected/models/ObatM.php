<?php

/**
 * This is the model class for table "obat_m".
 *
 * The followings are the available columns in table 'obat_m':
 * @property integer $obat_id
 * @property string $obat_nama
 * @property integer $obat_jumlah
 * @property integer $obat_harga
 */
class ObatM extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'obat_m';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('obat_jumlah, obat_harga', 'numerical', 'integerOnly'=>true),
			array('obat_nama', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('obat_id, obat_nama, obat_jumlah, obat_harga', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'obat_id' => 'Obat',
			'obat_nama' => 'Obat Nama',
			'obat_jumlah' => 'Obat Jumlah',
			'obat_harga' => 'Obat Harga',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('obat_id',$this->obat_id);
		$criteria->compare('obat_nama',$this->obat_nama,true);
		$criteria->compare('obat_jumlah',$this->obat_jumlah);
		$criteria->compare('obat_harga',$this->obat_harga);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ObatM the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
