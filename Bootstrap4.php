<?php

namespace nolbertovilchez\yii2\asset;

class Bootstrap4 extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@web/static/third_party/bootstrap4/dist';

    /**
     * @inherit
     */
    public $css = [
        'css/bootstrap.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'js/bootstrap.min.js'
    ];
    
    public $depends = [
        'nolbertovilchez\yii2\asset\Popper',
        'nolbertovilchez\yii2\asset\Tether'
    ];

}
