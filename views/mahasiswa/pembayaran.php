<?php

use app\models\ProgramStudi;
use kartik\select2\Select2;
use kartik\widgets\ActiveForm;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembayaran Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-pembayaran">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
    	<div class="col-md-2" style="margin-top: 10px">
    		<?php
    			echo Select2::widget([
				    'name' => 'prodi',
				    'data' => $prodi,
				    'options' => [
				        'id' => 'program-studi',
				        'placeholder' => 'Pilih Prodi',
				    ],
				]);
    		 ?>
    	</div>
    	<div class="col-md-2" style="margin-top: 10px">
    		<?php
    			echo Select2::widget([
				    'name' => 'studi',
				    'data' => $studi,
				    'options' => [
				        'id' => 'masa-studi',
				        'placeholder' => 'Pilih Masa Studi',
				    ],
				]);
    		 ?>
    	</div>
    	<div class="col-md-2" style="display: inline-block;">
    		<button type="button" class="btn btn-default" id="search" style="margin-top: 10px">
    			<i class="fas fa-search"></i>
    		</button>
    		<div id="export" style="display: inline-block;"></div>
        </div>

		<div id="pembayaran-mahasiswa">
			<!-- Place pembayaran mhs -->
		</div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<?php
$urlData = Url::to(['mahasiswa/get-data-pembayaran']);
$js=<<<js
	$('#search').on("click", function() {
		var prodi = $("#program-studi").val();
		var studi = $("#masa-studi").val();
		if( ($("#program-studi").val() !== '') && ($("#masa-studi").val() === '')) {
			alert('Mohon isi masa studi');
		 } else if ( ($("#program-studi").val() === '') && ($("#masa-studi").val() !== '')){
			alert('Mohon isi program studi');
		} else if ( ($("#program-studi").val() === '') && ($("#masa-studi").val() === '')){
			alert('Mohon isi program studi dan masa studi');
		} else {
			$.ajax({
				url: "{$urlData}",
				type: "GET",
				data: "id_program_studi="+prodi+"&id_masa_studi="+studi,
				success: function(data) {
					$('#pembayaran-mahasiswa').html(data);
				}
			});
			var prodi = $('#program-studi option:selected').text();
			var studi = $('#masa-studi option:selected').text();
			document.getElementById('export').innerHTML = '<a href="" class="btn btn-default" id="download" title="Download Excel" style="margin-top:10px; margin-left:10px;"><i class="fas fa-cloud-download-alt"></i></a>'
			document.getElementById('download').setAttribute("href", "/mahasiswa/export-tagihan?program_studi="+prodi+"&masa_studi="+studi);
		}
	});
js;
$this->registerJS($js);
?>