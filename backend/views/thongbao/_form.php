<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Thongbao */
/* @var $form yii\widgets\ActiveForm */
?>

                     
<p>Tạo</p>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'tieude') ?>

<?= $form->field($model, 'link') ?>

<?= $form->field($model, 'noidung') ?>

<?= $form->field($model, 'trangthai')->dropDownList(
        [
            '0'=>'Hiện',
            '1'=>'Ẩn',
            
        ],
    )?>

<div class="form-group">
    <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
</div>  

                </div>
            </div>
        </div>
</div>

<style>
    .btn.btn-success{
        padding: 13px;
        float:right;
        font-size: 14px
    }
   #thongbao-trangthai{
        height: 40px;
        font-size: 14px;
    }
    .form-control{
         font-size: 14px;
    }
</style>
