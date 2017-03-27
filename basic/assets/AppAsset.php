<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Open+Sans:400,700',
        'css/conica.css',
        'css/core.css',
        'css/Menu.css',
        'css/PopupStyles.css',
        'css/site.css?v=1.0.1',
        'css/themeblue.css',
        'css/themeblue_new_updated.css',
        'css/typo.css',
        'fancybox/source/jquery.fancybox.css',


    ];
    public $js = [
        //'js/basf-jquery-1.3.2.js',
        // 'js/init.js',
        // 'js/msstring.js',
        // 'js/non_ie.js',
        // 'js/OpenPopup.js',
        // 'js/swfobject.js',
        'js/site.js',
        'fancybox/source/jquery.fancybox.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
