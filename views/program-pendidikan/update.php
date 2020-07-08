<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramPendidikan */

$this->title = 'Update Program Pendidikan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Program Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="program-pendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
