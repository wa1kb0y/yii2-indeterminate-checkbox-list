<?php
namespace walkboy\IndeterminateCheckboxList;

use yii\web\AssetBundle;

class IndeterminateCheckboxListAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = __DIR__ . '/assets';
    public $js = [
        'main.js',
    ];
    public $css = [
        'style.css',
    ];

    //public $jsOptions = [ 'position' => \yii\web\View::POS_HEAD ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

}
