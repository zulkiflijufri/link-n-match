<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-money-bill-alt"></i> &nbsp;Tagihan Biaya Kuliah Mahasiswa</h3>
			</div>
			<div class="panel-body">
				<div class="tagihan-kuliah-index">
					<?php if ($bool): ?>
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
							<?php foreach ($mahasiswa as $key => $mhs) : ?>
								<?php if ($mhs->tagihans && $mhs->tagihans[0]['sisa'] != 0): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $mhs->tagihans[0]["nomor_tagihan"] ?></td>
										<td style="text-transform: uppercase;"><?= $mhs->nama ?></td>
										<td id="prodi" style="text-transform: uppercase;"><?= $mhs->programStudi->nama ?></td>
										<td><?= Yii::$app->formatter->asDate($mhs->tagihans[0]["tanggal"],'dd-MM-Y') ?></td>
										<td id="masa-studi"><?= $mhs->masaStudi->nama ?></td>
										<td style="text-align: right;">Rp.<?= Yii::$app->formatter->asDecimal($mhs->tagihans[0]["sisa"], 0) ?></td>
										<?php if ($mhs->tagihans[0]["sisa"] == 0): ?>
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