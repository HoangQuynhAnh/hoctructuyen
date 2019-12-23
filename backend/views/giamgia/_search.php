<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchGiamgia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giamgia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'tenmagiam') ?>

    <?= $form->field($model, 'noidung') ?>

    <?= $form->field($model, 'thoigianbatdau') ?>

    <?= $form->field($model, 'thoigianketthuc') ?>

    <?php // echo $form->field($model, 'soluong') ?>

    <?php // echo $form->field($model, 'trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
