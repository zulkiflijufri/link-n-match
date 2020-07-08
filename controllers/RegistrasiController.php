<?php

namespace app\controllers;

use Yii;
use app\models\Registrasi;
use app\models\RegistrasiSearch;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * RegistrasiController implements the CRUD actions for Registrasi model.
 */
class RegistrasiController extends Controller
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
     * Lists all Registrasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RegistrasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Registrasi model.
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
     * Creates a new Registrasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Registrasi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Registrasi model.
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
     * Deletes an existing Registrasi model.
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
     * Finds the Registrasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Registrasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Registrasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /*
    EXPORT WITH OPENTBS
    */
    public function actionExportExcel()
    {
        $searchModel = new RegistrasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/registrasi.ods';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";
        $data = [];
        $no=1;
        foreach($dataProvider->getModels() as $reg){
            $data[] = [
                'no'=>$no++,
                'nim'=>$reg->nim,
                'nama'=>$reg->nama,
                'tanggal'=>Yii::$app->formatter->asDate($reg->tanggal, 'dd-MM-Y'),
                'biaya'=> 'Rp. ' . Yii::$app->formatter->asDecimal($reg->biaya, 2)
            ];
        }

       $data2 = [
            ['biaya' => 'Rp. ' . Yii::$app->formatter->asDecimal(Registrasi::find()->sum('biaya'), 2)]
       ];

        $OpenTBS->MergeBlock('data', $data);
        $OpenTBS->MergeBlock('total', $data2);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'Rekap Biaya Registrasi MABA.xlsx'); // Also merges all [onshow] automatic fields.
        exit;
    }
}
