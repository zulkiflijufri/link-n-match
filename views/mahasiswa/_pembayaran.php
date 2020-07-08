<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-money-bill-alt"></i> &nbsp;Pembayaran Biaya Kuliah Mahasiswa</h3>
			</div>
			<div class="panel-body">
				<div class="tagihan-kuliah-index">
					<?php if ($pay): ?>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>NOMOR TAGIHAN</th>
								<th>TANGGAL</th>
								<th style="text-align: center;">NAMA MAHASISWA</th>
								<th>JUMLAH</th>
								<th style="text-align: center;">BANK</th>
								<th class="text-center">NOMOR PEMBAYARAN</th>
								<th class="text-center">KETERANGAN</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							<?php foreach ($pay as $py) : ?>
								<?php foreach ($notag as $tag): ?>
								<?php endforeach ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $tag ?></td>
										<td><?= Yii::$app->formatter->asDate($py["tanggal"], 'dd-MM-Y') ?></td>
										<td style="text-transform: uppercase; text-align: center;"><?= $py['nama'] ?></td>
										<td>Rp.<?= Yii::$app->formatter->asDecimal($py['besar_pembayaran'], 0) ?></td>
										<td style="text-align: center;"><?= $py['bank'] ?></td>
										<td style="text-align: center;"><?= $py['nomor_pembayaran'] ?></td>
										<td><?= $py['keterangan'] ?></td>
									</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<?php else: ?>
						<h4 class="text-center" style="color: #777">Pembayaran Not Found.</h4>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>