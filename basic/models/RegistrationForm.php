<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegistrationForm extends Model
{

    public $login = null;
    public $email = null;
    public $password = null;
    public $passwordRepeat = null;

    public function rules()
    {
        return [
            [['login', 'email', 'password', 'passwordRepeat'], 'required'],
            ['email', 'email'],
            [['password', 'passwordRepeat'], 'validatePassword'],
            ['login', 'validateLogin'],
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
            if ($this->password != $this->passwordRepeat) {
                $this->addError($attribute, 'Повтор пароля введен неверно');
            }
        }
    }

    public function validateLogin($attribute)
    {
        if (!$this->hasErrors()) {
            if (User::findByLogin($this->login, $this->email)) {
                $this->addError($attribute, 'Пользователь с таким логином / email уже существует');
            }
        }
    }

    public function registration()
    {
        if ($this->validate()) {
            $user = new User();
            $user->login = $this->login;
            $user->email = $this->email;
            $user->setPassword($this->password);
            return $user->save();
        }
        return false;
    }
}
