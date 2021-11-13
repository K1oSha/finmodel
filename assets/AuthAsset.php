<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 */
class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/auth.css'
    ];
    public $js = [
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
