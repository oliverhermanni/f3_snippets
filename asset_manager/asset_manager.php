<?php

/**
 * Asset Helper for CSS
 *
 * @param array $css_files
 */
$f3->set('css_assets', function($assets) {
    $f3 = \Base::instance();
    $theme = $f3->get('theme');

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
 *
 * @param array $js_files
 */
$f3->set('js_assets', function($assets){
    $f3 = \Base::instance();
    $theme = $f3->get('theme');

    $res = '';
    $audit = \Audit::instance();

    foreach($assets as $asset) {
        $audit->url($asset) ? $url = $asset : $url = '/assets/'.$theme.'/'.$asset;
        $res .= '<script src="'.$url.'"></script>';
    }

    return $res;
});

