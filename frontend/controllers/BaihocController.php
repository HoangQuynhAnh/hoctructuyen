<?php

namespace frontend\controllers;

use Yii;
use backend\models\Baihoc;
use backend\models\SearchBaihoc;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use MongoDB\Client;
use yii\web\UploadedFile;
use yii\data\Pagination;




/**
 * BaihocController implements the CRUD actions for Baihoc model.
 */
class BaihocController extends Controller
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
     * Lists all Baihoc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchBaihoc();
           $id=$_GET['khoahoc'];
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);
        $dataProvider->setPagination(['pageSize' => 10]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Baihoc model.
     * @param integer $_id
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
     * Creates a new Baihoc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Baihoc();

        if ($model->load(Yii::$app->request->post())) {
            $model->khoahoc=$_GET['khoahoc'];
             $model->ngaytao=date('d/m/y');
             $model->file=UploadedFile::getinstance($model,'file');
             if($model->file){
                $model->file->saveAs('../../uploads'.$model->file->name);
                $model->link=$model->file->name;

                 }

            $model->save(false);
            return $this->redirect(['view', 'id' => (string)$model->_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Baihoc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
              $model->ngaycapnhat=date('d/m/y');
                 $model->file=UploadedFile::getinstance($model,'file');
             if(isset($model->file->name)){
             $model->link=$model->file->name;
               $model->file->saveAs('../../uploads/'.$model->file->name);
           }
              $model->save(false);
            
            return $this->redirect(['view', 'id' => (string)$model->_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Baihoc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Baihoc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $_id
     * @return Baihoc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Baihoc::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
