<?php

namespace app\repository;

use app\entity\Users;

class UserRepository
{
    public static function getAllUsers()
    {
        return Users::find()->orderBy(['id'=>SORT_DESC])->all();
    }

    public static function createUser($login, $password, $age, $name, $surname, $patronimic){

        $user = new Users();
        $user->login = $login;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->age = $age;
        $user->name = $name;
        $user->surname = $surname;
        $user->patronimic = $patronimic;
        $user->save();
        return $user->id;
    }

    public static function getUser($id)
    {
        return Users::find()->where(['id'=>$id])->one();
    }

    public static function getUserByUsername($username){
        return Users::find()->where(['login' => $username])->one();
    }

}