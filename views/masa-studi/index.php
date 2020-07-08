<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasaStudiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masa Studis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masa-studi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Masa Studi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
