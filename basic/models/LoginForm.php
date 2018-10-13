<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{

    public $login = null;
    public $password = null;

    private $user = null;

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['password', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'passwordRepeat' => 'Повтор пароля',
        ];
    }

    public function validatePassword($attribute)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Неверно введен логин или пароль');
            }
        }
    }

    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), 3600 * 24 * 30);
        }
        return false;
    }

    private function getUser()
    {
        if (!$this->user) {
            $this->user = User::findByLogin($this->login, $this->login);
        }
        return $this->user;
    }
}
