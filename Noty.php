<?php

namespace nolbertovilchez\yii2\asset;

class Noty extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@webroot/static/third_party/noty/lib';

    /**
     * @inherit
     */
    public $css = [
        'noty.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'noty.min.js'
    ];

}