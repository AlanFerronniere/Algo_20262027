<?php
//commentaires sur une ligne
/*
Commentaire
sur
plusieurs lignes
 */
//On commence avec une variable somme à 0
$somme = 0;
$nb_notes = 0;
//pour écrire : echo
echo "Saisissez votre note (entrée pour terminer)\n";
$saisie = readline();

while ($saisie != "") {
    //on va vérifier que c'est un entier
    $note = filter_var($saisie, FILTER_VALIDATE_INT);
    if ($note !== false && $note >= 0 && $note <= 20) {
        $somme+=$note;
        $nb_notes++; //équivalent de $nb_notes=$nb_notes+1
    }
    else{
        echo "saisie invalide\n";
    }
    $saisie = readline();
}
//quand la saisie est finie
//on calcule la somme
echo "La moyenne est : " . $somme/$nb_notes . "\n";