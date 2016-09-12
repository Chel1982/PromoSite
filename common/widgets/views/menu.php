<?php
use yii\bootstrap\Nav;

?>
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="/"><img src="source/images/logo.jpg" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <?= Nav::widget([
                    'items' => [
                        ['label' => 'HOME', 'url' => ['/']],
                        ['label' => 'ABOUT', 'url' => ['/#about']],
                        ['label' => 'TEAM', 'url' => ['/#team']],
                        ['label' => 'SERVICE', 'url' => ['/#service']],
                        ['label' => 'PORTFOLIO', 'url' => ['/#portfolio']],
                        ['label' => 'PRICE', 'url' => ['/#pricing-table']],
                        ['label' => 'BLOG', 'url' => ['/#from-blog']],
                        ['label' => 'CONTACT', 'url' => ['/#contact']],

                        Yii::$app->user->isGuest ?

                            ['label' => 'LOGIN', 'url' => ['/site/login']]
                            :
                            [
                                'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout']
                            ],

                        ['label' => 'REGISTER', 'url' => ['/site/register']],

                    ],
                    'options' => [
                        'class' => 'nav navbar-nav menu-scroll active',
                    ],
                ]);

                ?>

            </div><!--/.nav-collapse -->
            <div class="search-area">
                <form action="">
                    <input id="search" name="search" type="text" placeholder="What're you looking for ?">
                    <input id="search_submit" value="Rechercher" type="submit">
                </form>
            </div>
        </div>
    </nav>
</section>