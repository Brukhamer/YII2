<?php

namespace app\models;

use yii\base\Model;

class UserForm extends Model
{
    public $login;
    public $age;
    public $password;
    public $username;
    public $passwordRepeat;

    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'age' => 'Возраст',
            'password' => 'Пароль',
            'passwordRepeat' => 'Повторенный пароль',
            'name' => 'Ваше имя',
            'surname' => 'Ваша фамилия'
        ];
    }

    public function rules()
    {
        return [
            [['login', 'age', 'password', 'passwordRepeat', 'username'], 'required' ],
            ['age', 'integer'],
            ['login', 'string'],
            ['passwordRepeat', 'compare', 'compareAttribute' => 'password'],
            ['age', 'validateAge' ]

        ];
    }

    public function validateAge($attribute, $params)
    {
        if (!$this->hasErrors()){
            $age = $this->age;
            if($age>100){
                $this->addError($attribute, ' Вы слишком старый');
            }
        }

    }
}