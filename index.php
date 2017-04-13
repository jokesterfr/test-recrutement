<?php
use Arena\Arena;
use Arena\Character\Mage;
use Arena\Character\Warrior;

require __DIR__ . '/vendor/autoload.php';



$charOne = new Warrior();
$charTwo = new Mage();
$arena = new Arena($charOne, $charTwo);

$arena->fight();

