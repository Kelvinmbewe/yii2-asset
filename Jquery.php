<?php

namespace nolbertovilchez\yii2\asset;

class Jquery extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@web/static/third_party/jquery/dist';

    /**
     * @inherit
     */
    public $js = [
        'jquery.min.js',
    ];

}
