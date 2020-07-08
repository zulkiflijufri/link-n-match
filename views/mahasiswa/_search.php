<?php

use app\models\MasaStudi;
use app\models\ProgramStudi;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-search">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'id') ?>
    <div class="row">
        <div class="col-lg-2">
            <?php echo $form->field($model, 'id_program_studi')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(ProgramStudi::find()->all(), 'id', 'nama'),
                'options' => ['placeholder' => 'Pilih Program Studi', 'id' => 'program-studi'],
                'pluginOptions' => [
                    'allowClear' => true
                ]
        ]) ?>
        </div>
        <div class="col-lg-2">
            <?= Html::submitButton('Search', ['class' => 'btn btn-sm btn-info', 'style' => 'margin-top:27px;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
