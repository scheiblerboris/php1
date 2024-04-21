<?php

function renderTemplate($page, $menu = '',  $content = '') {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

//$content = renderTemplate('about');
$content = renderTemplate('main');
$menu = renderTemplate('menu');
echo renderTemplate('layout', $menu, $content);