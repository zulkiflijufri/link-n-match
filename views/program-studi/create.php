<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramStudi */

$this->title = 'Create Program Studi';
$this->params['breadcrumbs'][] = ['label' => 'Program Studis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-studi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
