<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dist/css/bootstrap.min.css',
        'dist/css/fontawesome.min.css',
        'css/sidebar.css',
        'css/site.css',
        'css/fonts.css'
    ];
    public $js = [
        'dist/js/bootstrap.bundle.min.js',
        'js/chart.min.js',
        'js/site.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
