<?php

namespace app\modules\main\controllers;

use common\models\LoginForm;
use frontend\models\ContactForm;
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

        if (\Yii::$app->request->isAjax && \Yii::$app->request->isPost) {
            if ($model->load(\Yii::$app->request->post())) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

            if ($model->load(\Yii::$app->request->post() && $model->signup())) {
                \Yii::$app->session->setFlash('success', 'Вы успешно зарегестрированы');
            }
        }
        return $this->render('register', ['model' => $model]);
    }

    public function actionContact()
    {
        //$this -> layout = 'bootstrap';
        $model = new ContactForm();
        if ($model->load(\Yii::$app->request->post())) {
            print_r($model->getAttributes());
            die;
        }
        return $this->render('contact', ['model' => $model]);
    }
}
