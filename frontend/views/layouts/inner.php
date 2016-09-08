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




<?= $content ?>



<?= $this -> render('//common/footer'); ?>

<?php $this->endBody(); ?>

</body>
</html>

<?php $this->endPage(); ?>