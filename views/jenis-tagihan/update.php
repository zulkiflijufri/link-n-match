<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisTagihan */

$this->title = 'Update Jenis Tagihan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Tagihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-tagihan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
