<?php
	// foreach ($mahasiswa as $mhs) {
	// 	echo count($mhs->tagihans);
	// }
?>

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
								<th class="text-center">AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							<?php foreach ($mahasiswa as $mhs) : ?>
								<?php if ($mhs->tagihans[0]["nomor_tagihan"] != ''): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $mhs->tagihans[0]["nomor_tagihan"] ?></td>
										<td style="text-transform: uppercase;"><?= $mhs->nama ?></td>
										<td style="text-transform: uppercase;"><?= $mhs->programStudi->nama ?></td>
										<td><?= Yii::$app->formatter->asDate($mhs->tagihans[0]["tanggal"],
										'dd-MM-Y') ?></td>
										<td><?= $mhs->masaStudi->nama ?></td>
										<td style="text-align: right;">Rp.<?= Yii::$app->formatter->asDecimal($mhs->tagihans[0]["subtotal_biaya"], 0) ?></td>
										<td style="text-align: center;"><span class="label label-success">LUNAS</span></td>
										<td><a href="#" class="btn btn-sm btn-default"><b>Download</b></a></td>
									</tr>
								<?php endif ?>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>