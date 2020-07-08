<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PembayaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembayarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembayaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'tanggal',
            'nomor_bukti',
            'id_detail_tagihan',
            'besar_pembayaran',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
