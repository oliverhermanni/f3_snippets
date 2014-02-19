<?php

/**
 * Asset Helper for CSS
 */
$f3->set('css_assets', function() {
    $f3 = \Base::instance();
    $theme = $f3->get('theme');

    $assets = func_get_args();

    $res = '';
    $audit = \Audit::instance();

    foreach($assets as $asset) {
        $audit->url($asset) ? $url = $asset : $url = '/assets/'.$theme.'/'.$asset;
        $res .= '<link href="'.$url.'" rel="stylesheet">';
    }

    return $res;
});

/**
 * Asset Helper for JS
 */
$f3->set('js_assets', function(){
    $f3 = \Base::instance();
    $theme = $f3->get('theme');

    $assets = func_get_args();

    $res = '';
    $audit = \Audit::instance();

    foreach($assets as $asset) {
        $audit->url($asset) ? $url = $asset : $url = '/assets/'.$theme.'/'.$asset;
        $res .= '<script src="'.$url.'"></script>';
    }

    return $res;
});

