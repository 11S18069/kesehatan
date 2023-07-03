<?php
class UserIdentity extends CUserIdentity
{
    private $_id;

    public function authenticate()
    {
        $user = Yii::app()->db->createCommand()
            ->select('*')
            ->from('user')
            ->where('username=:username', array(':username' => $this->username))
            ->queryRow();

        $pegawai = Yii::app()->db->createCommand()
            ->select('*')
            ->from('pegawai')
            ->where('username=:username', array(':username' => $this->username))
            ->queryRow();

        if ($user === false && $pegawai === false) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif ($user !== false) {
            if (!password_verify($this->password, $user['password'])) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } else {
                $this->_id = $user['id'];
                $this->username = $user['username'];
                $this->setState('role', $user['role']);
                $this->errorCode = self::ERROR_NONE;
            }
        } else {
            if (!password_verify($this->password, $pegawai['password'])) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } else {
                $this->_id = $pegawai['id'];
                $this->username = $pegawai['username'];
                $this->setState('role', $pegawai['role']);
                $this->errorCode = self::ERROR_NONE;
            }
        }

        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}