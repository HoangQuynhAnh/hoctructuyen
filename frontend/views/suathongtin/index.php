
<?php 
use yii\helpers\Html;
use common\models\User;
use yii\widgets\ActiveForm;

$name=User::find()->where(['_id'=>Yii::$app->user->identity->_id])->one();
$nameteacher=$name->hoten;
 ?>
            <?php $form = ActiveForm::begin(); ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sửa thông tin cá nhân</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                               <?= $form->field($model, 'username')->textInput(['disabled' => true]) ?>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <?= $form->field($model, 'hoten')->textInput() ?>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <?= $form->field($model, 'email')->textInput() ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                 <?= $form->field($model, 'noicongtac')->textInput() ?>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <?= $form->field($model, 'fb')->textInput() ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <?= $form->field($model, 'diachi')->textInput() ?>
                                            </div>
                                              <div class="col-md-4">
                                                <?= $form->field($model, 'noicongtac')->textInput() ?>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                     <?= $form->field($model, 'gioithieu')->textarea(['rows'=>6]) ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
                                        <div class="clearfix"></div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="../../uploads/anh.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img >
                                            <h3 class="title" style="padding-top:30px; color: orange"><?php echo $nameteacher ?></h3>
                                        </a>
                                        <p class="description">
                                           
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        <?php echo $model->gioithieu; ?>
                                    </p>
                                </div>

                              </div>