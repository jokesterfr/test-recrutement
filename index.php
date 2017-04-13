<?php
use Arena\Arena,
    Arena\Mage,
    Arena\Warrior;

require __DIR__.'/vendor/autoload.php';

$characterOne = new Warrior();
$characterTwo = new Mage;
$arena = new Arena(
    $characterOne, $characterTwo
);


$arena->fight();



