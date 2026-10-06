<?php
$input="R5, L5, R5, R3";

$instructions=explode(", ",$input);

$x=0;
$y=0;

$direction="N";

foreach($instructions as $instruction){
    $tournant=$instruction[0];
    $nombreDeBlocs=substr($instruction,1);

    if($tournant=="R"){
        if($direction=="N"){
            $direction="E";
        }
        elseif($direction=="E"){
            $direction="S";
        }
        elseif($direction=="S"){
            $direction="W";
        }
        elseif($direction=="W"){
           $direction="N";
        }
    }
    if($tournant=="L"){
        if($direction=="N"){
            $direction="W";
        }
        elseif($direction=="E"){
            $direction="N";
        }
        elseif($direction=="S"){
            $direction="E";
        }
        elseif($direction=="W"){
            $direction="S";
        }
    }

    if($direction=="N"){
        $y+=$nombreDeBlocs;
    }
    if($direction=="S"){
        $y-=$nombreDeBlocs;
    }
    if($direction=="E"){
        $x+=$nombreDeBlocs;
    }
    if($direction=="W"){
        $x-=$nombreDeBlocs;
    }
}

echo "x=$x y=$y donc " . abs($y) + abs($x);
