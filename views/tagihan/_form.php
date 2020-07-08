<?php

use app\models\Mahasiswa;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tagihan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nomor_tagihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_mahasiswa')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Mahasiswa::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'subtotal_biaya')->textInput() ?>

    <?= $form->field($model, 'terbayar')->textInput() ?>

    <?= $form->field($model, 'sisa')->textInput() ?>

    <?= $form->field($model, 'tarikan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
