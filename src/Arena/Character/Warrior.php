<?php

namespace Arena\Character;

class Warrior extends Character
{
    public function __construct()
    {
        $this->healthPoints = 100;
        $this->name = 'Warrior';
    }

    public function attack(Character $character)
    {
        parent::attack($character);
        $character->hit(10);
    }
}
