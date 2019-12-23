<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
      public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/css/bootstrap.min.css' ,
        'assets/css/light-bootstrap-dashboard.css?v=2.0.0 ',
          'vendor/bootstrap/css/bootstrap.min.css',
          'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
          'fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
          'vendor/animate/animate.css',
          'vendor/css-hamburgers/hamburgers.min.css',
          'vendor/animsition/css/animsition.min.css',
          'vendor/select2/select2.min.css',
          'vendor/daterangepicker/daterangepicker.css',
          'css/util.css',
          'css/main.css',
    ];
    public $js = [
        'assets/js/core/jquery.3.2.1.min.js' ,
        'assets/js/core/popper.min.js',
        'assets/js/core/bootstrap.min.js' ,
        'assets/js/plugins/bootstrap-switch.js',
        'assets/js/plugins/chartist.min.js',
        'assets/js/plugins/bootstrap-notify.js',
        'assets/js/light-bootstrap-dashboard.js?v=2.0.0 ',
        'assets/js/demo.js',
       'vendor/jquery/jquery-3.2.1.min.js',
       'vendor/animsition/js/animsition.min.js',
       'vendor/bootstrap/js/popper.js',
       'vendor/bootstrap/js/bootstrap.min.js',
       'vendor/select2/select2.min.js',
       'vendor/daterangepicker/moment.min.js',
       'vendor/daterangepicker/daterangepicker.js',
       'vendor/countdowntime/countdowntime.js',
       'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
