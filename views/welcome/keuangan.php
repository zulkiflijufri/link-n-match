<?php

use kartik\icons\Icon;
use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'Selamat Datang';
Icon::map($this);
?>
<div class="site-index">
    <div class="jumbotron">
        <h2>Selamat datang, Keuangan</h2>
        <p>Pilihlah menu-menu dibawah untuk melihat aktivitas pembayaran mahasiswa.</p>
    </div>

    <div class="body-content">
     <div class="row">
            <div class="col-md-2">
                <a href="/registrasi/index" title="Registrasi Pembayaran Mahasiswa Baru" data-toggle="tooltip" data-original-title="Registrasi Pembayaran Mahasiswa Baru">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-file-signature fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Registrasi</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="/mahasiswa/tagihan-kuliah" title="Tagihan Biaya Mahasiswa" data-toggle="tooltip" data-original-title="Tagihan Biaya Mahasiswa">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-file-invoice-dollar fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Tagihan Biaya</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" title="Pembayaran Mahasiswa" data-toggle="tooltip" data-original-title="Pembayaran Mahasiswa">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-money-check-alt fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Pembayaran</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>