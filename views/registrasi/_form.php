<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registrasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
