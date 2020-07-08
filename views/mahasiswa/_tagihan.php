<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php //if ($mahasiswa[0]->tagihans): ?>
	<!-- <div>
		<a href="#" class="btn btn-sm btn-info" id="download" style="margin-bottom: 10px; float: right;">Download</a>
	</div> -->
<?php //endif ?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-money-bill-alt"></i> &nbsp;Tagihan Biaya Kuliah Mahasiswa</h3>
			</div>
			<div class="panel-body">
				<div class="tagihan-kuliah-index">
					<!-- <div class="pull-right">
					</div> -->
					<?php if ($mahasiswa[0]->tagihans): ?>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>NOMOR TAGIHAN</th>
								<th>NAMA MAHASISWA</th>
								<th>PROGRAM STUDI</th>
								<th>TANGGAL TAGIHAN</th>
								<th>KALENDAR AKADEMIK</th>
								<th class="text-center">TOTAL TAGIHAN</th>
								<th class="text-center">STATUS</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							<?php foreach ($mahasiswa as $mhs) : ?>
								<?php if ($mhs->tagihans && $mhs->tagihans[0]['sisa'] != 0): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $mhs->tagihans[0]["nomor_tagihan"] ?></td>
										<td style="text-transform: uppercase;"><?= $mhs->nama ?></td>
										<td id="prodi" style="text-transform: uppercase;"><?= $mhs->programStudi->nama ?></td>
										<td><?= Yii::$app->formatter->asDate($mhs->tagihans[0]["tanggal"],
										'dd-MM-Y') ?></td>
										<td id="masa-studi"><?= $mhs->masaStudi->nama ?></td>
										<td style="text-align: right;">Rp.<?= Yii::$app->formatter->asDecimal($mhs->tagihans[0]["subtotal_biaya"], 0) ?></td>
										<?php if ($mhs->tagihans[0]->detailTagihans[0]["status"] == 'Lunas'): ?>
											<td style="text-align: center;"><span class="label label-success">LUNAS</span></td>
										<?php else: ?>
											<td style="text-align: center;"><span class="label label-danger">BELUM LUNAS</span></td>
										<?php endif ?>
									</tr>
								<?php endif ?>
							<?php endforeach ?>
						</tbody>
					</table>
					<?php else: ?>
						<h4 class="text-center" style="color: #777">Tagihan Not Found.</h4>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$js=<<<js
// $('#download').on("click", function() {
	// var prodi = document.getElementById('prodi').textContent;
	// var studi = document.getElementById('masa-studi').textContent;
	// document.getElementById("download").setAttribute("href", "/mahasiswa/export-tagihan?program_studi="+prodi+"&masa_studi="+studi);
// });
js;
$this->registerJS($js);
?>