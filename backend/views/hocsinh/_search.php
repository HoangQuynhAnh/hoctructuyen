<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchHocsinh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hocsinh-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'lop') ?>

    <?= $form->field($model, 'truong') ?>

    <?= $form->field($model, 'matkhau') ?>

    <?= $form->field($model, 'sdt') ?>

    <?php // echo $form->field($model, 'anh') ?>

    <?php // echo $form->field($model, 'hoten') ?>

    <?php // echo $form->field($model, 'ngaysinh') ?>

    <?php // echo $form->field($model, 'gioitinh') ?>

    <?php // echo $form->field($model, 'diachi') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'taikhoan') ?>

    <?php // echo $form->field($model, 'matkhau') ?>

    <?php // echo $form->field($model, 'trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
