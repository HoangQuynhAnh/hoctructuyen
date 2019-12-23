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
  

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'mota')->textarea(['rows'=>4]) ?>

    <?= $form->field($model, 'gioithieu')->textarea(['rows'=>4]) ?>

    <?= $form->field($model, 'yeucau')->textarea(['rows'=>4]) ?>

    <?= $form->field($model, 'thoiluong') ?>

    <?= $form->field($model, 'hocphi') ?>

    <?= $form->field($model, 'khuyenmai') ?>

    <?= $form->field($model, 'chude')->dropDownList(
                [
                    '1'=>'Toán',
                    '0'=>'Văn',
                    '2'=>'Anh',
                    '3'=>'Sinh',
                ],
                 )?>
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
