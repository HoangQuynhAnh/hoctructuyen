<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Khoahoc;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchGiaovien */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doanh số từng giáo viên';
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

                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'username',
                                    
                                    'hoten',
                                    [
                                        'attribute'=>'Tổng tiền',
                                        'format' => 'raw',
                                        'value'=> function($data){
                                            $gv=$data->_id;
                                            $khoahoc=Khoahoc::find()->where(['giaovien'=>$gv])->all();
                                            $tong=0;
                                            foreach ($khoahoc as $key => $value) {
                                             $tong+= $value['hocphi'].$value['luotmua'];
                                         }
                                         return number_format($tong,0);
                                         
                                         
                                     }                 
                                 ],      
                                 
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