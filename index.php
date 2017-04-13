<?php
use Arena\Arena;
use Arena\Character\Mage;
use Arena\Character\Warrior;

require __DIR__.'/vendor/autoload.php';

$characterOne = new Warrior();
$characterTwo = new Mage();
$arena = new Arena($characterOne, $characterTwo);

$arena->fight();
