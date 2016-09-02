<?php

\frontend\assets\MainAsset::register($this);
use yii\helpers\Html;
use yii\bootstrap\Nav;

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

    <!-- Fancybox slider -->
    <link rel="stylesheet" href="source/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="source/css/animate.css"/>
    <!-- Theme color -->
    <link id="switcher" href="source/css/theme-color/default.css" rel="stylesheet">

    <link href="source/preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="source/style.css" rel="stylesheet">

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

<?= $this -> render('//common/head'); ?>


<?php if (Yii::$app -> session -> hasFlash('success')):

    $success = Yii::$app -> session -> getFlash('success');

    echo \yii\bootstrap\Alert::widget([
        'options' => [
            'class' => 'alert-info'
        ],
        'body' => $success,
    ])

    ?>

<?php endif; ?>

<?= $content ?>



<?= $this -> render('//common/footer'); ?>

<?php $this->endBody(); ?>

</body>
</html>

<?php $this->endPage(); ?>