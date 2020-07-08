<?php

use app\models\DosenPa;
use app\models\MasaStudi;
use app\models\ProgramPendidikan;
use app\models\ProgramStudi;
use app\models\Registrasi;
use app\models\Semester;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Registrasi::find()->where(['not',['nim'=>null]])->all(), 'nim', 'nim'),
        'options' => ['placeholder' => 'Pilih NIM','id' => 'nim'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rombel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_semester')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Semester::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'status_krs')->widget(Select2::classname(), [
        'data' => ['Disetujui' => 'Disetujui', 'Tidak Disetujui' => 'Tidak Disetujui'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'id_program_pendidikan')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(ProgramPendidikan::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'id_program_studi')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(ProgramStudi::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'id_dosen_pa')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(DosenPa::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>


    <?= $form->field($model, 'id_masa_studi')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(MasaStudi::find()->all(), 'id', 'nama'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'status')->widget(Select2::classname(), [
        'data' => ['Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$script = <<< JS
$('#nim').on("change",function() {
    var nimId = $(this).val();
    $.get('get-mhs', {nim: nimId}, function(data) {
    // alert(data);
        var data = $.parseJSON(data);
        $('#mahasiswa-nama').attr('value', data.nama);
    });
});

JS;
$this->registerJs($script);
?>