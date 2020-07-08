<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahasiswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mahasiswa', ['create'], ['class' => 'btn btn-sm btn-info']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nim',
            'nama',
            'rombel',
            [
                'attribute' => 'id_semester',
                'value'     => 'semester.nama'
            ],
            'status_krs',
            [
                'attribute' => 'id_program_pendidikan',
                'value'     => 'programPendidikan.nama'
            ],
            [
                'attribute' => 'id_program_studi',
                'value'     => 'programStudi.nama'
            ],
            [
                'attribute' => 'id_dosen_pa',
                'value'     => 'dosenPa.nama'
            ],
            [
                'attribute' => 'id_masa_studi',
                'value'     => 'masaStudi.nama'
            ],
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
