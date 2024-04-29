<?php

function renderTable($n) {
    $table = "<table border='1' cellspacing='0' cellpadding='3'>";
    for ($i = 0; $i < $n; $i++) {
        $table .= "<tr><td>{$i}</td><td>Данные</td></tr>";
    }

    $table .= "</table>";
    return $table;
}

echo renderTable(15);