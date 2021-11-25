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
        
        // 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        '/venobox/venobox.css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        '/newasset/css/plugins.css',
        '/fontawesome/css/all.css',
        '/owl/dist/assets/owl.carousel.min.css',
        '/owl/dist/assets/owl.theme.default.min.css',
        '/css/font-awesome.min.css',
        '/newasset/css/style.css',
        '/css/style.css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
    ];
    public $js = [
        // 'http://code.jquery.com/jquery-latest.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js',
        // 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js',
        '/owl/dist/owl.carousel.min.js',
        '/newasset/js/plugins.js',
        '/newasset/js/theme.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        '/js/custom.js',
        '/venobox/venobox.min.js',
        '/js/vanilla-tilt.min.js',
      
        // 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
