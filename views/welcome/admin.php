<?php

use kartik\icons\Icon;
use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'Selamat Datang';
Icon::map($this);
?>
<div class="site-index">
    <div class="jumbotron">
        <h2>Selamat datang, admin</h2>
        <p>Pilihlah menu-menu dibawah untuk memulai aktivitas administrator.</p>
    </div>

    <div class="body-content">
     <div class="row">
               <div class="col-md-2">
                <a href="/user/admin/index" title="Manage users" data-toggle="tooltip" data-original-title="Manage users">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-sm fa-user fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Manage Users</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="/program-studi/index" title="Program Studi" data-toggle="tooltip" data-original-title="Program Studi">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-sm fa-university fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Program Studi</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="/program-pendidikan/index" title="Program Pendidikan" data-toggle="tooltip" data-original-title="Program Pendidikan">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-sm fa-book fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Program Pendidi...</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="/masa-studi/index" title="Masa Studi" data-toggle="tooltip" data-original-title="Masa Studi">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-sm fa-book-open fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Masa Studi</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="/dosen-pa/index" title="Dosen Pembimbing Akademik" data-toggle="tooltip" data-original-title="Dosen Pembimbing Akademik">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-sm fa-chalkboard-teacher fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Dosen Pembimbi...</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="/semester/index" title="Semester" data-toggle="tooltip" data-original-title="Semester">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-sm fa-clock fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Semester</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="/mahasiswa/index" title="Mahasiswa" data-toggle="tooltip" data-original-title="Mahasiswa">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-sm fa-users fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Mahasiswa</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>