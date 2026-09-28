<?php
//Dessiner le nombre triangulaire d'un rang
echo "Quel rang ?";
$rang = readline();

for ($i = 1; $i <= $rang; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}