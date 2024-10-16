<?php
// Choisir une arme pour faire avancer les ânes de Stevenson

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

switch ($weapons > $opponentWeapon) {
    case 0:
        $stevensonWeapon = $weapons[0];
        break;
    case 1:
        $stevensonWeapon = $weapons[1];
        break;
    case 3:
        $stevensonWeapon = $weapons[2];
        break;
    default:
    $stevensonWeapon = $opponentWeaponoppenent;
}
echo 'Mr Stevenson chooses the' . ' ' .  $stevensonWeapon;
?>