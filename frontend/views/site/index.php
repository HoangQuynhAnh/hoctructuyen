<?php 
use backend\models\Khoahoc;
 ?>
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
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header " style="height: 400px">
                            <h4 class="card-title">Doanh thu</h4>
                            <p class="card-category">&nbsp</p>
                            <p><h1>
                               
                                <?php 
                                if(isset(Yii::$app->user->identity->_id)){
                                    $gv=Yii::$app->user->identity->_id;
                                $khoahoc=Khoahoc::find()->where(['giaovien'=>$gv])->all();
                               // $khoahockhoa=Khoahoc::find()->where(['giaovien'=>$gv,'trangthai'=>'1'])->all();

                                // var_dump($khoahockhoa);
                                
                                $tong=0;
                                $luotmua=0;
                                $tongkhoahoc=0;$i=0;


                                foreach ($khoahoc as $key => $value) {
                                   $tong+= $value['hocphi'].$value['luotmua'];
                                   $luotmua+=$value['luotmua'];
                                   $tongkhoahoc=$i+1;
                                }
                                echo '<span style="color:red">'. number_format($tong,0).'</span> VND Đồng';
                               

                                 ?>

                            </h1>
                            <p>
                                &nbsp
                                <?php

                                 ?>
                            </p>
                            </p>
                                <p style="color: black">
                                Số lượt mua khoá học: <?php echo '<span style="color:red">'.$luotmua.'</span> '; ?>
                            </p>
                         <p style="color: black">
                           Số khoá học đang bán: <?php echo '<span style="color:red">'.$i.'</span> '; ?>
                                
                            </p>
                             <p style="color: black">
                                
                            </p>
                           

                        </div>

                        
                    </div>
                </div>
                <div class="col-md-8">
                   
                </div>
            </div>
           </div>
                
<style>
      .form-control{
         font-size: 14px;
    }
   
</style>
<?php } ?>