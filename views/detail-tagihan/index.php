<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailTagihanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Tagihans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-tagihan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Tagihan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute' => 'id_jenis_tagihan',
                'value'     => 'jenisTagihan.nama'
            ],
            'kuantitas',
            'besar_biaya',
            // 'id_tagihan',
            [
                'attribute' => 'id_tagihan',
                'value'     => 'tagihan.mahasiswa.nama'
            ],
            'pot_beastudi',
            'pot_lainnya',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
