<?php

/**
 * FontAwesome assetBundle
 */

namespace nolbertovilchez\yii2\asset;

class FontAwesome extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@webroot/static/third_party/fontawesome';

    /**
     * @inherit
     */
    public $css        = [
        'css/font-awesome.min.css',
    ];

    /**
     * Initializes the bundle.
     * Set publish options to copy only necessary files (in this case css and font folders)
     * @codeCoverageIgnore
     */
    public function init() {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css)%', $from);
        };
    }

}
