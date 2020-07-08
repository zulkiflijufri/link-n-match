<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DosenPa */

$this->title = 'Create Dosen Pa';
$this->params['breadcrumbs'][] = ['label' => 'Dosen Pas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-pa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
