<?php

/**
 * Asset Helper for CSS
 */
$f3->set('css_assets', function() {
    $assets = func_get_args();
    $res = '';
    foreach($assets as $asset) {
        $assetLocation = createAssetLocation($asset);
        if ($assetLocation !== false) {
            $res .= '<link href="'.$assetLocation.'" rel="stylesheet">';
        }
    }

    return $res;
});

/**
 * Asset Helper for JS
 */
$f3->set('js_assets', function(){
    $assets = func_get_args();

    $res = '';
    foreach($assets as $asset) {
        $assetLocation = createAssetLocation($asset);
        if ($assetLocation !== false) {
            $res .= '<script src="'.$assetLocation.'"></script>';
        }
    }

    return $res;
});

/**
 * Checks for valid URL
 *
 * @param $url
 * @return bool
 */
function validUrl ($url) {
    return \Audit::instance()->url($url);
}

/**
 * Return location/URL of asset or false if not valid
 *
 * @param $asset
 * @return bool|string
 */
function createAssetLocation($asset) {
    $theme = \Base::instance()->get('theme');

    $isValidUrl = validUrl($asset);

    if(!$isValidUrl) {
        $asset = 'assets/'.$theme.'/'.$asset;

        if (!is_readable($asset)) {
            $asset = false;
        } else {
            $asset = '/' . $asset;
        }
    }

    return $asset;
}