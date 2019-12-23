<?php
/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="../../web/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../web/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="utf-8" />
    <?php $this->head() ?>
</head>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <div class="sidebar" data-image="../../web/assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                ADMIN
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?r=site">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="index.php?r=khoahoc">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Khoá học</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="index.php?r=giamgia">
                    <i class="nc-icon nc-atom"></i>
                    <p>Mã giảm giá</p>
                </a>
            </li>
             <li>
                <a class="nav-link" href="index.php?r=doanhthu">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Doanh thu</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="index.php?r=giaovien">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Giảng viên</p>
                </a>
            </li>
             <li>
                <a class="nav-link" href="index.php?r=hocsinh">
                    <i class="nc-icon nc-notes"></i>
                    <p>Học sinh</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="index.php?r=thongbao">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Thông báo</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="index.php?r=site/logout" data-method='post'>
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Thoát</p>
                </a>
            </li>
        </ul>
    </div>

    </div>
    <?= $content ?>




</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
        demo.showNotification();
</script>
<style>
    p{
        color:white;
    }
</style>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>