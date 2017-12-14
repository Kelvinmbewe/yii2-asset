<?php

namespace nolbertovilchez\yii2\asset;

class JqueryValidation extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@webroot/static/third_party/jquery-validation/dist';

    /**
     * @inherit
     */
    public $js = [
        'jquery.validate.min.js'
    ];

}
