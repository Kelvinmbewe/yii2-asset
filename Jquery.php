<?php

namespace nolbertovilchez\yii2\asset;

class Jquery extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@bower/jquery/dist';

    /**
     * @inherit
     */
    public $js = [
        'jquery.min.js',
    ];

}
