<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-3">
            <p>
                <?= Html::a('Create Registrasi', ['create'], ['class' => 'btn btn-sm btn-info']) ?>
                <?= Html::a('Export Excel', ['export-excel'], ['class' => 'btn btn-sm btn-success']) ?>
            </p>
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3" style="margin-top: 0.5em">
            <?= $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nim',
            'nama',
            'tanggal',
            'biaya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
