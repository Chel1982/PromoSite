<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-left wow fadeInLeft">
                    <h2>Contact with us</h2>
                    <address class="single-address">
                        <h4>Postal address:</h4>
                        <p><?= Yii::$app->params['Postal address']; ?></p>
                    </address>
                    <address class="single-address">
                        <h4>Headquarters:</h4>
                        <p><?= Yii::$app->params['Headquarters']; ?></p>
                    </address>
                    <address class="single-address">
                        <h4>Phone</h4>
                        <p><?= Yii::$app->params['Phone']['Phone Number']; ?></p>
                        <p><?= Yii::$app->params['Phone']['Fax Number']; ?></p>
                    </address>
                    <address class="single-address">
                        <h4>E-Mail</h4>
                        <p><?= Yii::$app->params['E-Mail']['Support']; ?></p>
                        <p><?= Yii::$app->params['E-Mail']['Sales']; ?></p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2>Send a message</h2>

                        <?php $form = \yii\bootstrap\ActiveForm::begin(['options' => ['class' => 'contact-form']]); ?>

                        <div class="form-group">

                            <?= $form -> field($model, 'name') -> textInput(['placeholder' => $model->getAttributeLabel('Name')]) -> label(false); ?>

                            <?= $form -> field($model, 'email') -> textInput(['placeholder' => $model->getAttributeLabel('Enter Email')]) -> label(false); ?>

                            <?= $form -> field($model, 'textArea')->textarea(['rows' => 2, 'cols' => 5]) -> label(false);?>

                        </div>

                        <span><?= \yii\helpers\Html::submitButton('SUBMIT',['class' => 'button button-default']); ?></span>

                        <?php \yii\bootstrap\ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->