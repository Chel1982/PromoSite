<!-- Start Contact section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-left wow fadeInLeft">
                    <h2>Contact with us</h2>
                    <address class="single-address">
                        <h4>Postal address:</h4>
                        <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                    </address>
                    <address class="single-address">
                        <h4>Headquarters:</h4>
                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                    </address>
                    <address class="single-address">
                        <h4>Phone</h4>
                        <p>Phone Number: (123) 456 7890</p>
                        <p>Fax Number: (123) 456 7890</p>
                    </address>
                    <address class="single-address">
                        <h4>E-Mail</h4>
                        <p>Support: Support@example.com</p>
                        <p>Sales: sales@example.com</p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2>Send a message</h2>
                    <form action="" class="contact-form">

                        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>

                        <div class="form-group">

                            <?= $form -> field($model, 'name') -> textInput(['placeholder' => $model->getAttributeLabel('Name')]); ?>

                        </div>
                        <div class="form-group">

                            <?= $form -> field($model, 'email') -> textInput(['placeholder' => $model->getAttributeLabel('Enter Email')]); ?>

                        </div>
                        <div class="form-group">
                            <textarea class="form-control"></textarea>
                        </div>
                        <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>

                        <span><?= \yii\helpers\Html::submitButton('SUBMIT',['class' => 'button button-default']); ?></span>

                        <?php \yii\bootstrap\ActiveForm::end(); ?>


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->