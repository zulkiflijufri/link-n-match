<?php

namespace app\controllers;

use Yii;
use app\models\DetailTagihan;
use app\models\JenisTagihan;
use app\models\Mahasiswa;
use app\models\MahasiswaSearch;
use app\models\MasaStudi;
use app\models\ProgramStudi;
use app\models\Registrasi;
use app\models\Tagihan;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * MahasiswaController implements the CRUD actions for Mahasiswa model.
 */
class MahasiswaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mahasiswa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MahasiswaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mahasiswa model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mahasiswa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mahasiswa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mahasiswa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mahasiswa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mahasiswa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mahasiswa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mahasiswa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetMhs($nim)
    {
        $nim = Registrasi::find()->where(['nim' => $nim])->one();
        echo Json::encode($nim);
    }

    public function actionTagihanKuliah()
    {
        $prodi = ArrayHelper::map(ProgramStudi::find()->all(), 'id', 'nama');
        $studi = ArrayHelper::map(MasaStudi::find()->all(), 'id', 'nama');

        return $this->render('tagihan', [
            'prodi' => $prodi,
            'studi' => $studi,
        ]);
    }

    public function actionGetDataTagihan($id_program_studi, $id_masa_studi)
    {
        $this->layout = "_tagihan";

        $mahasiswa = Mahasiswa::find()->where(['id_program_studi' => $id_program_studi, 'id_masa_studi' => $id_masa_studi])->all();

        $sisa = [];
        $id_tagihan = [];
        foreach ($mahasiswa as $mhs) {
            for ($i = 0; $i < count($mhs->tagihans[0]->detailTagihans); $i++) {
                if ($mhs->tagihans[0]->detailTagihans[$i]->tagihan['sisa'] != 0 && $mhs->tagihans[0]->detailTagihans[$i]['status'] != 'Lunas') {
                    $jt[] = $mhs->tagihans[0]->detailTagihans[$i]->jenisTagihan['nama'];
                }
            }
        }

        // var_dump($jt);
        // foreach ($jt as $jenis) {
        //     $data = ['jenis' => $jenis];
        //     var_dump($data);
        // }

        foreach ($mahasiswa as $mhs) {
            $sisa[] = $mhs->tagihans[0]['sisa'];
        }
        for ($i = 0; $i < count($sisa); $i++) {
            if ($sisa[$i] != 0) {
                $bool = true;
            }
        }

        return $this->render('_tagihan',[
            'mahasiswa' => $mahasiswa,
            'bool'  => $bool,
            'sisa'  => $sisa,
        ]);
    }

    public function actionPembayaran()
    {
        $prodi = ArrayHelper::map(ProgramStudi::find()->all(), 'id', 'nama');
        $studi = ArrayHelper::map(MasaStudi::find()->all(), 'id', 'nama');

        return $this->render('pembayaran',[
            'prodi' => $prodi,
            'studi' => $studi,
        ]);
    }

    public function actionGetDataPembayaran($id_program_studi, $id_masa_studi)
    {
        $this->layout = '_tagihan';

        $mahasiswa = Mahasiswa::find()->where(['id_program_studi' => $id_program_studi, 'id_masa_studi' => $id_masa_studi])->all();

        $payId = [];
        $notag = [];
        foreach ($mahasiswa as $mhs) {
            $payId[] = $mhs->tagihans[0]['id'];
            $notag[] = $mhs->tagihans[0]['nomor_tagihan'];
        }

        $command = Yii::$app->db->createCommand('SELECT * FROM pembayaran WHERE `id_detail_tagihan` IN ('.implode(',',$payId).')');
        $pay = $command->queryAll();

        return $this->render('_pembayaran',[
            'mahasiswa' => $mahasiswa,
            'pay'       => $pay,
            'notag'     => $notag
        ]);
    }

    public function actionExportTagihan($program_studi, $masa_studi)
    {
        $prodi = ProgramStudi::find()->where(['nama' => $program_studi])->one();
        $studi = MasaStudi::find()->where(['nama' => $masa_studi])->one();
        $mahasiswa = Mahasiswa::find()->where(['id_program_studi' => $prodi->id, 'id_masa_studi' => $studi->id])->all();

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS;
       // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/tagihan.ods';
        $OpenTBS->LoadTemplate($template);
        $data = [];
        $tmpid = [];
        $jt = [];
        $no=1;


        foreach($mahasiswa as $mhs){
            if ($mhs->tagihans[0]["nomor_tagihan"] != '' && $mhs->tagihans[0]["sisa"] != 0) {
                $data[] = [
                    'no'=>$no++,
                    'nomor_tagihan'=>$mhs->tagihans[0]["nomor_tagihan"],
                    'tanggal'=>Yii::$app->formatter->asDate($mhs->tagihans[0]["tanggal"], 'dd-MM-Y'),
                    'nama'=>$mhs->nama,
                    'prodi'=>$mhs->programStudi->nama,
                    'studi'=>$mhs->masaStudi->nama,
                    'tagihan'=>'Rp. ' . Yii::$app->formatter->asDecimal($mhs->tagihans[0]["sisa"], 0)
                ];
            }

            $tmpid[] = $mhs->tagihans[0]["id_mahasiswa"];
            $command = Yii::$app->db->createCommand(
            'SELECT sum(sisa) FROM tagihan WHERE `sisa` NOT IN (0) AND `id_mahasiswa` IN ('.implode(',',$tmpid).')');
            $total = $command->queryScalar();

            $data2 = [
                ['tagihan' => 'Rp. ' . Yii::$app->formatter->asDecimal($total, 0)]
            ];
        }

        foreach ($mahasiswa as $mhs) {
            for ($i = 0; $i < count($mhs->tagihans[0]->detailTagihans); $i++) {
                if ($mhs->tagihans[0]->detailTagihans[$i]->tagihan['sisa'] != 0 && $mhs->tagihans[0]->detailTagihans[$i]['status'] != 'Lunas') {
                    $jt[] = $mhs->tagihans[0]->detailTagihans[$i]->jenisTagihan['nama'];
                }
            }
        }

        $OpenTBS->MergeBlock('data', $data);
        // $OpenTBS->MergeBlock('jenis', $data3);
        $OpenTBS->MergeBlock('total', $data2);
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'Rekap Biaya Tagihan Mahasiswa.xlsx');
        exit;
    }
}
