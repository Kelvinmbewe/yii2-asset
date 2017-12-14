<?php

namespace nolbertovilchez\yii2\asset;

class Select2 extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@webroot/static/third_party/select2/dist';

    /**
     * @inherit
     */
    public $css = [
        'css/select2.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'js/select2.min.js',
        'js/i18n/es.js'
    ];

}
