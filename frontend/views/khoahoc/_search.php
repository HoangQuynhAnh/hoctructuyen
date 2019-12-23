<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchKhoahoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khoahoc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ten')->textInput(["placeholder"=>'Tên khoá học'])->label(false) ?>

    <?php // echo $form->field($model, 'mota') ?>

    <?php // echo $form->field($model, 'gioithieu') ?>

    <?php // echo $form->field($model, 'yeucau') ?>

    <?php // echo $form->field($model, 'thoiluong') ?>

    <?php // echo $form->field($model, 'hocphi') ?>

    <?php // echo $form->field($model, 'khuyenmai') ?>

    <?php // echo $form->field($model, 'magiamgia') ?>

    <?php // echo $form->field($model, 'chude') ?>

    <?php // echo $form->field($model, 'luotmua') ?>

    <?php // echo $form->field($model, 'baihoc') ?>

    <?php // echo $form->field($model, 'hocsinh') ?>

    <?php // echo $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'ngaycapnhat') ?>

    <div class="form-group">
        <?= Html::submitButton('Tìm', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
<style>
   #searchkhoahoc-ten{
        width: 200px;
        margin-left: 30px;
        float:left;
        margin-bottom: 40px;
        margin-right: 20px;
    }
    .btn.btn-primary{
        padding: 12px;
    }
</style>
