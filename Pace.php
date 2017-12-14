<?php

namespace nolbertovilchez\yii2\asset;

class Pace extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@thirdparty/pace';

    /**
     * @inherit
     */
    public $css = [
        'themes/red/pace-theme-minimal.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'pace.min.js'
    ];

}
