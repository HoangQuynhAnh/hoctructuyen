<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'hoten')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'gioitinh')->dropDownList(
        [
            '1'=>'Nam',
            '0'=>'Nữ',
        ],
    )?>
                <?= $form->field($model, 'hocvi')->dropDownList(
        [
            '1'=>'Cử nhân',
            '0'=>'Thạc sĩ',
            '2'=>'Tiến sĩ',
            '3'=>'Giáo sư',


        ],
    )?>
                <?= $form->field($model, 'monday')->dropDownList(
        [
            '1'=>'Toán',
            '0'=>'Văn',
            '2'=>'Anh',
            '3'=>'Sinh',


        ],
    )?>
                <?= $form->field($model, 'noicongtac')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'status')->dropDownList(
        [
            '10'=>'Kích hoạt',
            '9'=>'Khoá',
        ],
    )?>

                <?= $form->field($model, 'email') ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
