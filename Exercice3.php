<?php
$tableDe = readline("Table de quoi ?");
$jusquA = readline("Jusqu'à combien ?");

for ($i = 1; $i <= $jusquA; $i++) {
    //echo $tableDe . " x " . $i . " = ";
    echo "$tableDe x $i = ";
    echo $tableDe * $i;
    echo PHP_EOL;
}