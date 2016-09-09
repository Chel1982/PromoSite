<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <?php
        $form = \yii\bootstrap\ActiveForm::begin();
        ?>

        <?= $form->field($model,'username');?>
        <?= $form->field($model,'email');?>
        <?= $form->field($model,'password')->passwordInput();?>
        <?= $form->field($model,'repassword')->passwordInput();?>

        <?= \yii\helpers\Html::submitButton('Register',['class' => 'btn btn-success'])?>


        <?php \yii\bootstrap\ActiveForm::end();?>

        <?php if (\Yii::$app->session->hasFlash('registerFormSubmitted')): ?>
            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>
        <?php endif; ?>

    </div>

</div>