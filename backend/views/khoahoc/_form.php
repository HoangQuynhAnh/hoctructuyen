<?php

use yii\helpers\Html;
use yii\backend\models\Giamgia;
use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Khoahoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khoahoc-form">

    
    <?php $form = ActiveForm::begin(); ?>
  

    <?= $form->field($model, 'khuyenmai') ?>

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
