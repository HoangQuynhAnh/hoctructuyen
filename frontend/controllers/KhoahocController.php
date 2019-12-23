<?php

namespace frontend\controllers;

use Yii;
use backend\models\Khoahoc;
use backend\models\SearchKhoahoc;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use MongoDB\Client;
use yii\data\Pagination;

/**
 * KhoahocController implements the CRUD actions for Khoahoc model.
 */
class KhoahocController extends Controller
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
     * Lists all Khoahoc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $id = Yii::$app->user->identity->_id;
        $searchModel = new SearchKhoahoc();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);
        $dataProvider->setPagination(['pageSize' => 10]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Khoahoc model.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $khoahoc = $this->findModel($id);
        $client = new Client('mongodb://localhost:27017/');
        $giaovien = $client->hoctructuyen->user->findOne(['_id' => $khoahoc->giaovien]);
        $khoahoc->giaovien = $giaovien->hoten;

        return $this->render('view', [
            'model' => $khoahoc,
        ]);
    }

    /**
     * Creates a new Khoahoc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Khoahoc();

        if ($model->load(Yii::$app->request->post())) {
            $model->giaovien = Yii::$app->user->identity->_id;
            $model->ngaytao=date('d/m/y');
            $model->save();
            return $this->redirect(['view', 'id' => (string)$model->_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Khoahoc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
              $model->ngaycapnhat=date('d/m/y');
              $model->save();
            return $this->redirect(['view', 'id' => (string)$model->_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Khoahoc model.
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
     * Finds the Khoahoc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $_id
     * @return Khoahoc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Khoahoc::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
