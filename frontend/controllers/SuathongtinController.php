<?php

namespace frontend\controllers;

use Yii;
use backend\models\Baihoc;
use common\models\User;
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
class SuathongtinController extends Controller
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
        $name=User::find()->where(['_id'=>Yii::$app->user->identity->_id])->one();
          $id=$name->id;
         $model = $this->findModel($id);
          if ($model->load(Yii::$app->request->post())) {
              var_dump($model);
              die();
              
               $model->save(false);
       return $this->redirect(['index']);
    }
      return $this->render('index', [
    'model' => $model,
]);
}
    /**
     * Displays a single Baihoc model.
     * @param integer $_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
