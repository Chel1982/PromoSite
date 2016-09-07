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
        $model = new LoginForm();

        return $this->render('login', ['model' => $model]);

    }

    public function actionRegister()
    {
        $model = new SignupForm();

        if ($model->load(\Yii::$app->request->post()) && $model->signup()) {

            return $this->render('register', ['model' => $model]);
        }
        return $this->render('register', ['model' => $model]);

    }

    public function actionContact()
    {
        $model = new ContactForm();

        if ($model->load(\Yii::$app->request->post()) && $model->contact()) {
            return $this->render('contact', ['model' => $model]);
        } else {
            return $this->render('contact', ['model' => $model]);
        }
    }
}
