<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Baihoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baihoc-form">

   <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'tieude') ?>

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
