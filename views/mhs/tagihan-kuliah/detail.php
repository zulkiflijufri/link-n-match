<div class="row">
    <?php
    $this->title = 'Detail Tagihan';
    $this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['/welcome/index']];
    $this->params['breadcrumbs'][] = ['label' => 'Tagihan Biaya Kuliah', 'url' => ['/mhs/tagihan-kuliah/index']];
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money-bill-alt"></i>  &nbsp;Detail Tagihan Biaya Kuliah</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <dl class="dl-horizontal">
                            <dt>Mahasiswa</dt>
                            <dd><?= $mhs->nama_mhs ?></dd>
                            <dt>NIM</dt>
                            <dd><?= $mhs->nim ?></dd>
                            <dt>Rombel</dt>
                            <dd><?= $mhs->rombel ?></dd>
                            <dt>Semester</dt>
                            <dd><span class="text-aqua"><b><?= $mhs->semester->nama ?></b></span></dd>
                            <dt>Status KRS</dt>
                            <dd><?= $mhs->status_krs ?></dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <dl class="dl-horizontal">
                            <dt>Program Pendidikan</dt>
                            <dd><?= $mhs->programPendidikan->nama ?></dd>
                            <dt>Program Studi</dt>
                            <dd><?= $mhs->programStudi->nama?></dd>
                            <dt>Dosen PA</dt>
                            <dd><?= $mhs->dosenPa->nama ?> <?= $mhs->dosenPa->title ?></dd>
                            <dt>Masa Studi</dt>
                            <dd><?= $mhs->masaStudi->nama ?></dd>
                            <dt>Status Mahasiswa</dt>
                            <dd><?= $mhs->status ?></dd>
                        </dl>
                    </div>
                </div>
                <div class="detail-invoice">
                    <legend>Daftar Tagihan</legend>
                    <div id="w0" class="grid-view table-responsive">
                        <table class="table table-bordered table-striped table-hover" style="margin-bottom:0;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Biaya</th>
                                    <th class="text-right">Besar Biaya</th>
                                    <th class="text-right">Pot. Beastudi</th>
                                    <th class="text-center">Pot. Lainnya</th>
                                    <th class="text-right">Subtotal Biaya</th>
                                    <th class="text-right">Terbayar</th>
                                    <th class="text-right">Sisa Tagihan</th>
                                    <th class="text-right">Tarikan</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="text-right"><b>TOTAL</b></td>
                                    <td class="text-right"><b>Rp0</b></td>
                                    <td class="text-right"><b>Rp0</b></td>
                                    <td class="text-right"><b>Rp0</b>
                                    <td class="text-right"><b>Rp0</b>
                                    </td><td>&nbsp;</td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no=1; foreach ($tagihans as $tagihan) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $tagihan->jenisTagihan["nama"] ?></td>
                                        <td class="text-right">
                                            <?php if ($tagihan->jenisTagihan["nama"] == "Biaya SKS"): ?>
                                            <sup class="text-red" style="margin-right:5px; color: red">20 x </sup>Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->besar_biaya, 0) ?>
                                            <?php else: ?>
                                            <sup class="text-red" style="margin-right:5px; color: red">1 x </sup>Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->besar_biaya, 0) ?>

                                            <?php endif ?>
                                        </td>
                                        <td class="text-right">
                                            <?php if ($tagihan->detailTagihan->pot_beastudi == 3500000): ?>
                                                <sup class="text-red" style="margin-right:5px; color: red">(100%)</sup> - Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->pot_beastudi, 0) ?>
                                            <?php elseif (($tagihan->detailTagihan->pot_beastudi >= 2625000) && ($tagihan->detailTagihan->pot_beastudi < 3500000)) : ?>
                                                <sup class="text-red" style="margin-right:5px; color: red">(75%)</sup> - Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->pot_beastudi, 0) ?>
                                            <?php elseif (($tagihan->detailTagihan->pot_beastudi >= 1750000) && ($tagihan->detailTagihan->pot_beastudi < 2625000)) : ?>
                                                <sup class="text-red" style="margin-right:5px; color: red">(50%)</sup> - Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->pot_beastudi, 0) ?>
                                            <?php endif ?>
                                        </td>
                                        <td class="text-right">- Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->pot_lainnya, 0) ?></td>
                                        <td class="text-right">Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->subtotal_biaya, 0) ?></td>
                                        <td class="text-right">Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->terbayar, 0) ?></td>
                                        <td class="text-right">Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->sisa, 0) ?></td>
                                        <td class="text-right">Rp <?= Yii::$app->formatter->asDecimal($tagihan->detailTagihan->tarikan, 0) ?></td>
                                        <?php if ($tagihan->status == 'Lunas') : ?>
                                            <td style="text-align:center;">
                                                <span class="label label-success">LUNAS</span>
                                            </td>
                                            <?php else: ?>
                                            <td style="text-align:center;">
                                                <span class="label label-danger">BELUM LUNAS</span>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                        <p style="margin-bottom: 20px;">
                            <i>* Pot. : Potongan</i>
                        </p>
                    </div>
                    <div class="history-pembayaran">
                        <legend>Daftar Pembayaran</legend>
                        <div id="w1" class="grid-view table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <colgroup><col><col><col><col><col><col style="width:200px;"><col></colgroup>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nomor Bukti</th>
                                        <th>Pembayaran</th>
                                        <th class="text-right">Besar Pembayaran</th>
                                        <th>Keterangan</th>
                                        <th class="text-center">Download Bukti Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="7"><div class="empty">Tidak ada data yang ditemukan.</div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>