<?php

use kartik\icons\Icon;
use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'Selamat Datang';
Icon::map($this);
?>
<div class="site-index">


    <div class="jumbotron">
        <!-- <i class="fa fa-user-tie fa-3x"></i> -->
        <h2>Selamat datang, <?= Yii::$app->user->identity->username ?></h2>
        <p>Pilihlah menu-menu dibawah untuk memulai aktivitas akademik.</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-md-2">
                <a href="#" title="Daftar kehadiran" data-toggle="tooltip" data-original-title="Daftar Kehadiran">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-clock fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Daftar Kehadira...</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" title="" data-toggle="tooltip" data-original-title="Tagihan Biaya Kuliah">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-money-bill-alt fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Tagihan Biaya K...</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" title="Kartu Rencana Studi" data-toggle="tooltip">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-user-graduate fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Kartu Rencana S...</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" title="Kartu Hasil Studi" data-toggle="tooltip">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-book-reader fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Kartu Hasil Stu...</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" title="Bimbingan Akademik" data-toggle="tooltip">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-users fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Bimbingan Akade...</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
