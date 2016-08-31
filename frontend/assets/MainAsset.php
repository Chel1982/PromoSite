<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'source/css/font-awesome.css',
        'source/css/bootstrap.css',
        'source/css/slick.css',
        'source/css/jquery.fancybox.css',
        'source/css/animate.css',
        'source/css/theme-color/default.css',
        'source/preloader.css',
        'source/style.css',
    ];
    public $js = [
        'source/js/bootstrap.js',
        'source/js/slick.js',
        'source/js/waypoints.js',
        'source/js/jquery.counterup.js',
        'source/js/jquery.mixitup.js',
        'source/js/jquery.fancybox.pack.js',
        'source/js/wow.js',
        'source/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
