<?php
class Pegawai extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pegawai';
    }

    public function authenticate($password)
    {
        return password_verify($password, $this->password);
    }
}