<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramStudi */

$this->title = 'Update Program Studi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Program Studis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="program-studi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
