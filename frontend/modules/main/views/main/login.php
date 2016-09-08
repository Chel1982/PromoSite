<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <div class="alert alert-success">

            <?php if ($model->load(\Yii::$app->request->post()) && $model->login()): ?>

                <?= 'Добро пожаловать, ' . Yii::$app->user->identity->username; ?>

            <?php endif; ?>

        </div>
        <?php $form = \yii\bootstrap\ActiveForm::begin();?>

        <?=$form->field($model,'username'); ?>
        <?=$form->field($model,'password')->passwordInput(); ?>
        <?=$form->field($model,'rememberMe')->checkbox(); ?>

        <?=\yii\helpers\Html::submitButton('Login',['class' => 'btn btn-success']) ?>

        <?php \yii\bootstrap\ActiveForm::end();?>

    </div>

</div>