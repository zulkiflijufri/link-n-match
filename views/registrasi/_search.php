<?php

use app\models\Registrasi;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registrasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

     <?= $form->field($model, 'tanggal')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Registrasi::find()->all(), 'tanggal', 'tanggal'),
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-info btn-sm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
