<?php

namespace nolbertovilchez\yii2\asset;

class BootstrapTable extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@web/static/third_party/bootstrap-table/dist';

    /**
     * @inherit
     */
    public $css = [
        'bootstrap-table.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'bootstrap-table.min.js',
        'locale/bootstrap-table-es-ES.min.js'
    ];

}
