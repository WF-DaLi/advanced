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
        'static/css/site.css',
        'plugins/layui/css/layui.css',
        'static/css/iview.css',
        'plugins/layui/css/modules/layer/default/layer.css',
    ];
    public $js = [
        'static/js/jquery/jquery.min.js',
        'static/js/vue/vue.min.js',
        'plugins/layui/layui.js',
        'static/js/vue/iview.min.js',
    ];
    public $jsOptions = [
        //定义js在页面的位置在head标签内部。
        'position' => \yii\web\View::POS_HEAD,
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
