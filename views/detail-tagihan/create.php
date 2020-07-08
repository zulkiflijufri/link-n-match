<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTagihan */

$this->title = 'Create Detail Tagihan';
$this->params['breadcrumbs'][] = ['label' => 'Detail Tagihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-tagihan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
