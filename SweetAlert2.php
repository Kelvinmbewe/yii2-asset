<?php

namespace nolbertovilchez\yii2\asset;

class SweetAlert2 extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@web/static/third_party/sweetalert2/dist';

    /**
     * @inherit
     */
    public $css = [
        'sweetalert2.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'sweetalert2.min.js'
    ];

}
