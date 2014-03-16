<?php
// general config files
$gc = array_filter(scandir('../config'), 'valid_configs');
// stage config files
$sc = array_filter(scandir('../config/' . $_SERVER['STAGE']), 'valid_configs');

/**
 * Load all config files
 * First the global configs, than the configs for the current stage if available
 */
foreach($gc as $config) {
    $f3->config('../config/' . $config);
}

foreach($sc as $config) {
    $f3->config('../config/' . $_SERVER['STAGE'] . '/' . $config);
}

/**
 * Helper function to check if files are valid config files
 *
 * @param $d
 * @return bool
 */
function valid_configs($d) {
    $res = false;
    if (!is_dir($d)) {
        $ext = pathinfo($d, PATHINFO_EXTENSION);
        $res = (strtolower($ext) === 'ini');
    }
    return $res;
}