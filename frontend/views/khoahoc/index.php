<?php

use yii\helpers\Html;
use yii\grid\GridView;
use MongoDB\Client;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchKhoahoc */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khoá học';
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
                            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    'ten',
                                    [
                                        'attribute'=>'Học phí',
                                        'format' => 'raw',
                                        'value'=> function($data){
                                           $hocphi=$data->hocphi;
                                            return number_format($hocphi, 0);
                                       }                 
                                   ],       
                                    'mota',
                                    'thoiluong',
                                    'luotmua',
                                     [
                                        'attribute'=>'Tổng tiền',
                                        'format' => 'raw',
                                        'value'=> function($data){
                                           $luotmua=(int)$data->luotmua;
                                           $hocphi=(int)$data->hocphi;
                                           $tongtien=$luotmua*$hocphi;
                                            return number_format($tongtien, 0);
                                       }                 
                                   ],       

                                    [
                                        'attribute'=>'Chủ đề',
                                        'format' => 'raw',
                                        'value'=> function($data){
                                           if($data->chude==1){
                                            return "TOÁN";
                                           }
                                       }                 
                                   ],
                                   [
                                        'attribute'=>'trangthai',
                                        'content'=>function($data)
                                        {
                                            if($data->trangthai=='0'){
                                                return Html::a(
                                                    '<span class="glyphicon glyphicon-ok blue"></span>', '');
                                            }
                                            else{
                                                return Html::a(
                                                    '<span class="glyphicon glyphicon-lock blue"></span>', '');
                                            }
                                        }

                                    ],
                                   [
                                    'attribute'=>'Bài học',
                                    'format' => 'raw',
                                    'value'=> function($data){
                                       return
                                       '<button class=" btn btn-warning"><a href="index.php?r=baihoc&khoahoc='.$data->_id.'" style="color:white">Bài học</a></button> ';
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
