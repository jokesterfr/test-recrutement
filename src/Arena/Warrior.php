<?php

namespace Arena;

class Warrior extends Character
{
    public function __construct()
    {
        $this->healthPoints = 100;
        $this->name  =  'Warrior';
    }

    public function attack(Character $character)
    {
        echo "{$this->name} attack {$character->name}!\n";
        $character->hit(10);
    }
}
