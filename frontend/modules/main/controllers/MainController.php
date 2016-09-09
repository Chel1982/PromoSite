<?php

namespace app\modules\main\controllers;

use common\models\LoginForm;
use frontend\models\ContactForm;
use frontend\models\Register;
use frontend\models\SignupForm;
use yii\base\Response;
use yii\bootstrap\ActiveForm;

class MainController extends \yii\web\Controller
{
    public $layout = 'inner';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $model = new LoginForm;

        $model->load(\Yii::$app->request->post()) && $model->login();

        return $this->render("login", ['model' => $model]);
    }

    public function actionLogout()
    {

        \Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionRegister()
    {
        $model = new SignupForm();

        if ($model->load(\Yii::$app->request->post()) && $model->signup()) {

            \Yii::$app->session->setFlash('registerFormSubmitted');
            return $this->render('register', ['model' => $model]);
        } else {
            return $this->render('register', ['model' => $model]);
        }
    }
}
