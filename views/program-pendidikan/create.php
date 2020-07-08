<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramPendidikan */

$this->title = 'Create Program Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Program Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-pendidikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
