<?php

namespace app\controllers;

use app\models\UserForm;
use app\repository\UserRepository;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionProfile()
    {
        $this->view->title = "Профиль";
        $model = new UserForm();
        if($model->load(\Yii::$app->request->post())&& $model->validate()){
            UserRepository::createUser(
                $model->login,
                $model->password,
                $model->age,
                $model->username
            );
            return $this->redirect('/user/');
        }
        return $this->render('profile', ['model'=>$model]);
    }

    public function actionIndex()
    {
        var_dump(UserRepository::getAllUsers());
//        $user = UserRepository::getUser(1);
//        var_dump($user);
//        var_dump($user->request);
    }

}