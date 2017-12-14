<?php

namespace nolbertovilchez\yii2\asset;

class Bootstrap4 extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@thirdparty/bootstrap/dist';

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
        'nolbertovilchez\yii2\asset\Tether'
    ];

}
