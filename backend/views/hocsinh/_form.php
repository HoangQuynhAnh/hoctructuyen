<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hocsinh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hocsinh-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'taikhoan') ?>
      <?= $form->field($model, 'hoten') ?>

    <?= $form->field($model, 'lop') ?>

    <?= $form->field($model, 'truong') ?>
    <?= $form->field($model, 'sdt') ?>

    <?= $form->field($model, 'anh') ?>

  

    <?= $form->field($model, 'ngaysinh') ?>

    <?= $form->field($model, 'gioitinh') ?>

    <?= $form->field($model, 'diachi') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'trangthai')->dropDownList(
        [
            '0'=>'Kích hoạt',
            '1'=>'Khoá',
        ])
        ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
