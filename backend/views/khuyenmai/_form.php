<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Khuyenmai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khuyenmai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'ngaybatdau') ?>

    <?= $form->field($model, 'ngayketthuc') ?>

    <?= $form->field($model, 'loaikm') ?>

    <?= $form->field($model, 'phantram') ?>

    <?= $form->field($model, 'kichhoat')->dropDownList(
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
