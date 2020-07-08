<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTagihanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-tagihan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_jenis_tagihan') ?>

    <?= $form->field($model, 'kuantitas') ?>

    <?= $form->field($model, 'besar_biaya') ?>

    <?= $form->field($model, 'id_tagihan') ?>

    <?php // echo $form->field($model, 'pot_beastudi') ?>

    <?php // echo $form->field($model, 'pot_lainnya') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
