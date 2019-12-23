<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchKhuyenmai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khuyenmai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'ngaybatdau') ?>

    <?= $form->field($model, 'ngayketthuc') ?>

    <?= $form->field($model, 'loaikm') ?>

    <?php // echo $form->field($model, 'phantram') ?>

    <?php // echo $form->field($model, 'kichhoat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
