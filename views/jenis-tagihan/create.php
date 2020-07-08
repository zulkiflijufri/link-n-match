<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisTagihan */

$this->title = 'Create Jenis Tagihan';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Tagihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-tagihan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
