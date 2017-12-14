<?php

namespace nolbertovilchez\yii2\asset;

class Noty extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@bower/noty/lib';

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