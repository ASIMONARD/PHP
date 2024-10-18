<?php
// Créer une fonction pour recréer une phrase mystère

function writeSecretSentence(String $param1, string $param2)
{
    // La fonction doit reourner une phrase avec des valeurs assignées aux paramètres
    return $param1 . ' ' . "s'incline devant " . $param2;
}
echo writeSecretSentence("L'âne", "le feu");
?>