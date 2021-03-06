<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{

    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['login', 'password', 'email'], 'required'],
            ['email', 'email'],
            ['username', 'string'],
            ['referral_id', 'integer'],
        ];
    }

    public function beforeValidate()
    {
        if ($this->isNewRecord && $login = Yii::$app->getRequest()->getCookies()->getValue('partner')) {
            if ($partner = self::findOne(['login' => $login])) {
                $this->referral_id = $partner->id;
            }
        }
        return parent::beforeValidate();
    }

    public function getPartners()
    {
        return $this->hasMany(get_class($this), ['referral_id' => 'id']);
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public static function findByLogin($login, $email)
    {
        return self::find()->where('login = :login OR email = :email')->params([':login' => $login, ':email' => $email])->one();
    }

    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    public function validatePassword($password)
    {
        return md5($password) == $this->password;
    }

}
