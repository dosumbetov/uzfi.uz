<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        
        '/venobox/venobox.css',
        '/menu/fonts/icomoon/style.css',
        '/menu/css/bootstrap.min.css',
        '/fontawesome/css/all.css',
        '/owl/dist/assets/owl.carousel.min.css',
        '/owl/dist/assets/owl.theme.default.min.css',
        '/css/font-awesome.min.css',
        '/menu/css/style.css',
        '/css/style.css',
        '/css/style-mob.css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-2.2.4.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        '/menu/js/jquery.sticky.js',
         '/menu/js/bootstrap.min.js',
        '/menu/js/main.js',
        '/owl/dist/owl.carousel.min.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        '/venobox/venobox.min.js',
        '/js/vanilla-tilt.min.js',
        '/js/jquery.nicescroll.min.js',
        
        
        
        //  '/js/waypoints.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js',
        '/js/custom.js',
        
      
        // 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
