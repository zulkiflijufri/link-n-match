<?php

use app\models\Tagihan;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'id_detail_tagihan')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Tagihan::find()->all(), 'id', 'nomor_tagihan'),
        'options' => [
            'id' => 'nomor_tagihan',
            'placeholder' => 'Nomor Tagihan'
        ],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'bank')->widget(Select2::classname(), [
        'data' => ['BNI' => 'BNI', 'BCA' => 'BCA', 'MANDIRI' => 'MANDIRI'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'nomor_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_pembayaran')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<?php
$script = <<< JS
$('#nomor_tagihan').on("change",function() {
    var tagId = $(this).val();
    $.get('get-mhs', {tagId: tagId}, function(data) {
        var data = $.parseJSON(data);
        $('#pembayaran-nama').attr('value', data.nama);
    });
});

JS;
$this->registerJs($script);
?>