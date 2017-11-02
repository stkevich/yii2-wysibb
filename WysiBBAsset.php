<?php
namespace stkevich\wysibb;

use yii\web\AssetBundle;

/**
 * WysiBBWidgetAsset
 *
 * Register required JavaScript and CSS files
 *
 * @author Stas Kevich <st.kevich@gmail.com>
 */
class WysiBBAsset extends AssetBundle
{

    public $sourcePath = '@bower/jqjquery-wysibb';

    public $css = [
        'theme/default/wbbtheme.css',
    ];

    public $js = [
        'jquery.wysibb.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}