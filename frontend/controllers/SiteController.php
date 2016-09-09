<?php
namespace frontend\controllers;

use yii\web\Controller;
use common\models\LoginForm;
use frontend\models\Register;
use frontend\models\SignupForm;
use common\widgets\AboutWidget;


/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->layout = 'inner';
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
        $this->layout = 'inner';

        $model = new SignupForm();

        if ($model->load(\Yii::$app->request->post()) && $model->signup()) {

            \Yii::$app->session->setFlash('registerFormSubmitted');
            return $this->render('register', ['model' => $model]);
        } else {
            return $this->render('register', ['model' => $model]);
        }
    }

}
