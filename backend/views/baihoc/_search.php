<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchBaihoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baihoc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'tenbai') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'thoigian') ?>

    <?= $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'ngaycapnhat') ?>

    <?php // echo $form->field($model, 'trangthai') ?>

    <?php // echo $form->field($model, 'noidung') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
