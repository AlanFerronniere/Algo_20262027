<?php
//https://adventofcode.com/2016/day/1
//On a besoin de https://www.php.net/manual/fr/function.explode.php
$input = "R4, R4, L1, R3, L5, R2, R5, R1, L4, R3, L5, R2, L3, L4, L3, R1, R5, R1, L3, L1, R3, L1, R2, R2, L2, R5, L3, L4, R4, R4, R2, L4, L1, R5, L1, L4, R4, L1, R1, L2, R5, L2, L3, R2, R1, L194, R2, L4, R49, R1, R3, L5, L4, L1, R4, R2, R1, L5, R3, L5, L4, R4, R4, L2, L3, R78, L5, R4, R191, R4, R3, R1, L2, R1, R3, L1, R3, R4, R2, L2, R1, R4, L5, R2, L2, L4, L2, R1, R2, L3, R5, R2, L3, L3, R3, L1, L1, R5, L4, L4, L2, R5, R1, R4, L3, L5, L4, R5, L4, R5, R4, L3, L2, L5, R4, R3, L3, R1, L5, R5, R1, L3, R2, L5, R5, L3, R1, R4, L5, R4, R2, R3, L4, L5, R3, R4, L5, L5, R4, L4, L4, R1, R5, R3, L1, L4, L3, L4, R1, L5, L1, R2, R2, R4, R4, L5, R4, R1, L1, L1, L3, L5, L2, R4, L3, L5, L4, L1, R3";

$instructions = explode(", ", $input);

$x = 0;
$y = 0;

$direction = "N";

foreach ($instructions as $instruction) {
    //d'abord on cherche vers où on va en tournant de 90 (R) ou -90 (L)
    if ($instruction[0] == "R") {
        if ($direction == "N")
            $direction = "E";
        elseif ($direction == "E")
            $direction = "S";
        elseif ($direction == "S")
            $direction = "W";
        elseif ($direction == "W")
            $direction = "N";
    }
    if ($instruction[0] == "L") {
        if ($direction == "N")
            $direction = "W";
        elseif ($direction == "E")
            $direction = "N";
        elseif ($direction == "S")
            $direction = "E";
        elseif ($direction == "W")
            $direction = "S";
    }

    // Ensuite on avance (attention : substr pour récupérer tous les chiffres, ex: L194 -> 194)
    $distance = (int) substr($instruction, 1);
    if($direction == "N")
        $y+=$distance; //on monte
    if($direction == "S")
        $y-=$distance; //on descend
    if($direction == "E")
        $x+=$distance; //on va vers la droite
    if($direction == "W")
        $x-=$distance; //on va vers la gauche
}
echo "x=$x y=$y donc ".abs($y)+abs($x);
