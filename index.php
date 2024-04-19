<?php

function renderTemplate($page, $content = '') {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

$content = renderTemplate('about', 2000);
echo renderTemplate('layout', $content);