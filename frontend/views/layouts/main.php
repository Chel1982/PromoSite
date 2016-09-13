<?php
\frontend\assets\MainAsset::register($this);

use yii\helpers\Html;
use common\widgets\AboutWidget;
use common\widgets\HeaderContentWidget;
use common\widgets\MenuWidget;
use common\widgets\TeamWidget;
use common\widgets\ServiceWidget;
use common\widgets\PortfolioWidget;
use common\widgets\CounterWidget;
use common\widgets\PriceWidget;
use common\widgets\TestimonialWidget;
use common\widgets\BlogWidget;
use common\widgets\ContactWidget;
use common\widgets\ClientWidget;
use common\widgets\FooterWidget;

?>

<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app -> language; ?>">
    <head>

        <?= Html::csrfMetaTags(); ?>

        <meta charset="<?= Yii::$app -> charset; ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Rex : Home</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="source/images/favicon.ico"/>

        <?php $this->head(); ?>

        <!-- Fonts -->
        <!-- Open Sans for body font -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Raleway for Title -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <!-- Pacifico for 404 page   -->
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <?php $this->beginBody(); ?>

    <?php if (\Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success">
            <p>Thank you from message.</p>
        </div>
    <?php endif; ?>

    <!-- Start header section -->
    <?= HeaderContentWidget::widget(); ?>
    <!-- End header section -->

    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div class="loader">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start menu section -->
    <?= MenuWidget::widget(); ?>
    <!-- End menu section -->

    <!-- Start about section -->
    <?= AboutWidget::widget(); ?>
    <!-- End about section -->
    <!-- Start call to action -->
    <!--connected in AboutWidget -->
    <!-- End call to action -->

    <!-- Start Team action -->
    <?= TeamWidget::widget(); ?>
    <!-- Start Team action -->

    <!-- Start service section -->
    <?= ServiceWidget::widget(); ?>
    <!-- End service section -->

    <!-- Start Portfolio section -->
    <?= PortfolioWidget::widget(); ?>
    <!-- End Portfolio section -->

    <!-- Start counter section -->
    <?= CounterWidget::widget(); ?>
    <!-- End counter section -->

    <!-- Start Pricing Table section -->
    <?= PriceWidget::widget(); ?>
    <!-- End Pricing Table section -->

    <!-- Start Testimonial section -->
    <?= TestimonialWidget::widget(); ?>
    <!-- End Testimonial section -->

    <!-- Start from blog section -->
    <?= BlogWidget::widget(); ?>
    <!-- End from blog section -->

    <?= ClientWidget::widget(); ?>

    <!-- Start Contact section -->
    <?= ContactWidget::widget(); ?>
    <!-- End Contact section -->

    <!-- Start Google Map -->
    <section id="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- End Google Map -->



    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Start Footer -->
    <?= FooterWidget::widget(); ?>
    <!-- End Footer -->

    <?php $this->endBody(); ?>

    </body>
    </html>

<?php $this->endPage(); ?>