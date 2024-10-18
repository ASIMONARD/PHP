<?php
// Choisir une arme pour faire avancer les ânes de Stevenson

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

switch ($opponentWeapon) {
    case 'fists':
        $stevensonWeapon = 'gun';
        break;
    case 'whip':
        $stevensonWeapon = 'fists';
        break;
    case 'gun':
        $stevensonWeapon = 'whip';
        break;
    default:
    $stevensonWeapon = $opponentWeaponoppenent;
}
echo "face a " . $opponentWeapon . "," . " ";
echo 'Mr Stevenson chooses the' . ' ' .  $stevensonWeapon;
?>