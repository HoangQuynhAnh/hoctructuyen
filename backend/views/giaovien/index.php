<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchGiaovien */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Giáo viên';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
        </div>
    </nav>
    <div class="giaovien-index">

     <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h1 class="card-title"><?= Html::encode($this->title) ?></h1>
                            <p class="card-category" style="float:right; font-size: 16px;padding: 10px"> <?= Html::a('Thêm', ['create'], ['class' => 'btn btn-success them']) ?></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
    // 'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

            //'_id',
                                    'username',
            //'password_hash',
            //'password_reset_token',
            //'email',
            //'auth_key',
            //'role',
                                    'hoten',
                                    'diachi',
            //'noicongtac',
            //'monday',
            //'hocvi',
            //'gioitinh',
            //'fb',
            //'gioithieu',
                                    'anh',
                                    [
                                        'attribute'=>'status',
                                        'content'=>function($data)
                                        {
                                            if($data->status=='10'){
                                                return Html::a(
                                                    '<span class="glyphicon glyphicon-ok blue"></span>', 
                                                    '');
                                            }
                                            else{
                                                return Html::a(
                                                    '<span class="glyphicon glyphicon-lock blue"></span>', 
                                                    '');
                                            }
                                        }

                                    ],

                                    [
                                        'attribute'=>'created_at',
                                        'content'=>function($data)
                                        {
                                            return $data->created_at= date('d/m/Y - H:i:s');
                                        }


                                    ],
                                        [
                                        'attribute'=>'updated_at',
                                        'content'=>function($data)
                                        {
                                            return $data->updated_at= date('d/m/Y - H:i:s');
                                        }
                                        

                                    ],
                                    

            //'ngaysinh',
            //'khoahoc',

                                    ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .table.table-striped.table-bordered{

        }
        table.table.table-hover tbody tr td,.them{
            font-size: 14px;
            font-family: OpenSans-Regular;

        }
    </style>