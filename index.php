<?php
use Arena\Arena,
    Arena\Character\Mage,
    Arena\Character\Warrior;

require __DIR__.'/vendor/autoload.php';

$characterOne = new Warrior();
$characterTwo = new Mage;
$arena = new Arena(
    $characterOne, $characterTwo
);


$arena->fight();



