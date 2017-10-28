<?php

namespace Arena;

class Warrior extends Character
{
    public function __construct()  {
        $this->healthPoints = 100;
        $this->name  =  'Warrior';
    }

    public function attack($character)
    {
        if ($character instanceof Character) {
            echo "{$this->name} attack {$character->name}!\n";
            $character->hit(10);
        }
    }
}
