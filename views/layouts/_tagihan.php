<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use kartik\icons\Icon;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
Icon::map($this)
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Link n Match | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => "<b>Link n Match</b>",
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav nav'],
            'items' => [
                [
                    'label' => 'Keuangan',
                    'items' => [
                        ['label' => '<i class="fa fa-sm fa-file-invoice-dollar"></i>&nbsp;&nbsp;Rekap Pembayaran', 'url' => '/mahasiswa/tagihan-kuliah', 'encode' => false],
                        ['label' => '<i class="fa fa-sm fa-money-check-alt"></i>Registrasi Pembayaran', 'url' => '/registrasi', 'encode' => false],
                    ],
                ],
            ]
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
