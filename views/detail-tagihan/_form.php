<?php

use app\models\JenisTagihan;
use app\models\Tagihan;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTagihan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_jenis_tagihan')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(JenisTagihan::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'kuantitas')->textInput() ?>

    <?= $form->field($model, 'besar_biaya')->textInput() ?>

    <?= $form->field($model, 'id_tagihan')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Tagihan::find()->all(), 'id', 'mahasiswa.nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'pot_beastudi')->widget(Select2::classname(), [
        'data' => [0 => '0', 1625000 => '25%', 3250000 => '50%', 4875000 => '75%', 6500000 => '100%'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'pot_lainnya')->textInput() ?>

    <?= $form->field($model, 'status')->widget(Select2::classname(), [
        'data' => [ 'Lunas' => 'Lunas', 'Belum Lunas' => 'Belum Lunas', ],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
