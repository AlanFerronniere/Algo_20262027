<?php
$jouer = "O";
while ($jouer == "O") {
    $nombreADeviner = rand(1, 1000);
    $nombrePropose = readline("Devinez un nombre entre 1 et 1000." . PHP_EOL . "Nombre proposé ? ");
    $essais = 1;

    while ($nombrePropose != $nombreADeviner) {
        if ($nombrePropose > $nombreADeviner) {
            echo "Trop grand" . PHP_EOL;
        } elseif ($nombrePropose < $nombreADeviner) {
            echo "Trop petit" . PHP_EOL;
        }

        $nombrePropose = readline("Nombre proposé ? ");
        $essais++;
    }

//si j'arrive là c'est que je suis sorti du while
    echo "Gagné ! ($essais essais)" . PHP_EOL;

    $jouer = readline("Voulez vous rejouer ? (O/N)");
}
