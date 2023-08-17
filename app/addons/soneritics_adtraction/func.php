<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_soneritics_adtraction_website()
{
    return \Tygh\Registry::get('addons.soneritics_adtraction.website');
}

/**
 * Check if the tags needs to be inserted
 * @param $controller
 * @param $mode
 * @param $action
 * @param $dispatch_extra
 * @param $area
 */
function fn_soneritics_adtraction_before_dispatch($controller, $mode, $action, $dispatch_extra, $area)
{
    // Only for the customer area
    if (AREA != 'C') {
        return;
    }

    // Check if the current page contains data we should process
    switch ("{$controller}.{$mode}") {
        case 'checkout.complete':
            $template = 'complete';
            break;
    }

    // Set view variable for the addon
    $website = fn_soneritics_adtraction_website();
    if (!empty($template) && !empty($website)) {
        Tygh::$app['view']->assign('soneriticsAdtractionPage', $template);
    }
}
