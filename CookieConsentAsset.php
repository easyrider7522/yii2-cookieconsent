<?php
namespace easyrider7522\cookieconsent;

use yii\web\AssetBundle;


class CookieConsentAsset extends AssetBundle
{
    public $sourcePath = '@bower/cookieconsent/build/';

    public $css = [
        // '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css',
        'cookieconsent.min.css',
    ];

    public $js= [
        // '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js',
        'cookieconsent.min.js',
    ];

    public $jsOptions= [
        'position'  => 'POS_HEAD',
    ];
}
