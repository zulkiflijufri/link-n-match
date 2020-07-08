<div class="row">
	<?php
		$this->title = 'Tagihan Biaya Mahasiswa';
		$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['/welcome/index']];
		$this->params['breadcrumbs'][] = $this->title;
	?>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-money-bill-alt"></i>  &nbsp;Tagihan Biaya Kuliah</h3>
			</div>
			<div class="panel-body">
				<div class="tagihan-kuliah-index">
					<div id="tagihan-kuliah-index-grid" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
						<div id="tagihan-kuliah-grid" class="grid-view table-responsive">
							<table class="table table-striped table-hover">
								<colgroup><col><col><col><col><col><col><col style="width:190px;"></colgroup>
								<thead>
									<tr>
										<th>#</th>
										<th>NOMOR TAGIHAN</th>
										<th>TANGGAL TAGIHAN</th>
										<th>KALENDAR AKADEMIK</th>
										<th style="text-align:right;">
											TOTAL TAGIHAN
										</th>
										<th style="text-align:center;">STATUS</th>
										<th class="text-center">AKSI</th>
									</tr>
								</thead>
								<tbody>

										<tr>
										<td><?= 1?></td>
										<td><?= $tagihan->nomorTagihan->nama ?></td>
										<td><?= Yii::$app->formatter->asDate($tagihan->tanggal, 'd-MM-Y') ?></td>
										<td><?= $tagihan->mahasiswa->semester->nama ?></td>
										<td style="text-align:right;">Rp <?= $t ?>
										</td>

										<td style="text-align:center;">
											<span class="label label-danger">BELUM LUNAS</span>
										</td>

										<td class="text-center">
											<a class="btn btn-sm btn-default" href="#" target="_blank" data-pjax="0"><b>Download</b></a> &nbsp;&nbsp; <a class="btn btn-sm btn-primary" href="/mhs/tagihan-kuliah/detail?id=1"><b>Detail</b></a>
										</td>
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