<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Khoahoc */

$this->title = $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Khoahocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="main-panel">
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
        </div>
    </nav>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="content">
        <div class="container-fluid">
            <p>
                <?= Html::a('Cập nhật', ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Xoá', ['delete', 'id' => (string)$model->_id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'ten',
                    'mota',
                    'gioithieu',
                    'yeucau',
                    'thoiluong',
                    [
                        'attribute'=>'Học phí',
                        'format' => 'raw',
                        'value'=> function($data){
                         $hocphi=$data->hocphi;
                         return number_format($hocphi, 0);
                     }                 
                 ],       
                 'khuyenmai',


                [
                    'attribute'=>'Chủ đề',
                    'format' => 'raw',
                    'value'=> function($data){
                     if($data->chude==1){
                        return "TOÁN";
                    }
                }                 
            ],
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
         'ngaytao',
         'ngaycapnhat',
     ],
 ]) ?>

</div>
