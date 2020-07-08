<?php

namespace app\controllers;

use Yii;
use app\models\DetailTagihan;
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
        $searchModel = new MahasiswaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $prodi = ArrayHelper::map(ProgramStudi::find()->all(), 'id', 'nama');
        $studi = ArrayHelper::map(MasaStudi::find()->all(), 'id', 'nama');

        return $this->render('tagihan', [
            // 'searchModel' => $searchModel,
            'prodi' => $prodi,
            'studi' => $studi,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionGetDataTagihan($id_program_studi, $id_masa_studi)
    {
        $this->layout = "_tagihan";

        $mahasiswa = Mahasiswa::find()->where(['id_program_studi' => $id_program_studi, 'id_masa_studi' => $id_masa_studi])->all();

        return $this->render('_tagihan',[
            'mahasiswa' => $mahasiswa,
            // 'status'    => $status
            //'pages'     => $pages
        ]);
    }

    public function actionGetTagihanProdi($id_program_studi)
    {
        $this->layout = "_tagihan";

        $mahasiswa = Mahasiswa::find()->where(['id_program_studi' => $id_program_studi])->all();
        // var_dump($mahasiswa[0]->tagihans[0]->detailTagihans);
        return $this->render('_tagihan',[
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function actionGetTagihanStudi($id_masa_studi)
    {
        $this->layout = "_tagihan";

        $mahasiswa = Mahasiswa::find()->where(['id_masa_studi' => $id_masa_studi])->all();

        return $this->render('_tagihan',[
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function actionExportTagihan($program_studi, $masa_studi)
    {
        // var_dump($program_studi, $masa_studi); die();
        $prodi = ProgramStudi::find()->where(['nama' => $program_studi])->one();
        $studi = MasaStudi::find()->where(['nama' => $masa_studi])->one();
        $mahasiswa = Mahasiswa::find()->where(['id_program_studi' => $prodi->id, 'id_masa_studi' => $studi->id])->all();

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
       //  // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/tagihan.ods';
        $OpenTBS->LoadTemplate($template);
        $data = [];
        $tmpid = [];
        $no=1;
        foreach($mahasiswa as $mhs){
            if ($mhs->tagihans[0]["nomor_tagihan"] != '') {
                $data[] = [
                'no'=>$no++,
                'nomor_tagihan'=>$mhs->tagihans[0]["nomor_tagihan"],
                'tanggal'=>Yii::$app->formatter->asDate($mhs->tagihans[0]["tanggal"], 'dd-MM-Y'),
                'nama'=>$mhs->nama,
                'prodi'=>$mhs->programStudi->nama,
                'studi'=>$mhs->masaStudi->nama,
                'tagihan'=>'Rp. ' . Yii::$app->formatter->asDecimal($mhs->tagihans[0]["subtotal_biaya"], 0)
            ];
            }
            $tmpid[] = $mhs->tagihans[0]["id_mahasiswa"];
            $command = Yii::$app->db->createCommand(
                'SELECT sum(subtotal_biaya) FROM tagihan WHERE `id_mahasiswa` IN ('.implode(',',$tmpid).')');
            $total = $command->queryScalar();
            $data2 = [
                ['tagihan' => 'Rp. ' . Yii::$app->formatter->asDecimal($total, 0)]
            ];
        }

        $OpenTBS->MergeBlock('data', $data);
        $OpenTBS->MergeBlock('total', $data2);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'Rekap Biaya Tagihan Mahasiswa.xlsx'); // Also merges all [onshow] automatic fields.
        exit;
    }
}
