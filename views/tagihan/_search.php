<?php

use app\models\Tagihan;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TagihanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //echo $form->field($model, 'id') ?>

    <?php //echo $form->field($model, 'tanggal') ?>

    <?php //echo $form->field($model, 'nomor_tagihan') ?>

    <?= $form->field($model, 'id_mahasiswa')->dropDownList(
        ArrayHelper::map(Tagihan::find()->all(), 'mahasiswa.id', 'mahasiswa.programStudi.nama')
    ) ?>

    <?php //echo $form->field($model, 'id_mahasiswa') ?>

    <?php //echo $form->field($model, 'subtotal_biaya') ?>

    <?php // echo $form->field($model, 'terbayar') ?>

    <?php // echo $form->field($model, 'sisa') ?>

    <?php // echo $form->field($model, 'tarikan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-sm btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
