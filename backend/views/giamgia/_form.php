<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Giamgia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giamgia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenmagiam') ?>

    <?= $form->field($model, 'noidung') ?>

    <?= $form->field($model, 'thoigianbatdau') ?>

    <?= $form->field($model, 'thoigianketthuc') ?>

    <?= $form->field($model, 'soluong') ?>

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
