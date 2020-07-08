<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DosenPa */

$this->title = 'Update Dosen Pa: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Dosen Pas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dosen-pa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
