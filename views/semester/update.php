<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Semester */

$this->title = 'Update Semester: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="semester-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
