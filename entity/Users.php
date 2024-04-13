<?php

namespace app\entity;

use yii\db\ActiveRecord;
/**
 * @property integer $id Индификатор пользователя
 * @property string $login Логин пользователя
 * @property string $password Пароль пользователя
 * @property integer $age Возраст пользователя
 * @property string $username Имя пользователя
 * @property boolean $is_admin
 */

class Users extends ActiveRecord
{
    public function getRequest()
    {
        return $this->hasMany(Requests::class, ['user_id' => 'id']);
    }
}