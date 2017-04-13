<?php

namespace Arena\Character;

class Warrior extends Character
{
    public function __construct()
    {
        $this->healthPoints = 20;
        $this->name = 'Warrior';
    }

    public function attack(Character $character)
    {
        $character->hit(10);
    }
}
